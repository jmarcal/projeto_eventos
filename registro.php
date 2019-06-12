<?php
require_once 'utils/funcoes.php';
require_once 'classes/Usuario.php';
require_once 'classes/BD.php';
require_once 'classes/TabelaUsuario.php';

start_session();

// tenta registrar o usuario - se houver algum erro/
// excessao, pega e manda o usuario de volta para o 
// formulario de login com erro
try {
    $formdata = array();
    $errors = array();
    
    $input_method = INPUT_POST;

    $formdata['username'] = filter_input($input_method, "username", FILTER_SANITIZE_STRING);
    $formdata['password'] = filter_input($input_method, "password", FILTER_SANITIZE_STRING);
    $formdata['cpassword'] = filter_input($input_method, "cpassword", FILTER_SANITIZE_STRING);

    // lanca uma excessao se houver 
    // campos vazios
    if (empty($formdata['username'])) {
        $errors['username'] = "Username required";
    }

    if (empty($_POST['password'])) {
        $errors['password'] = "Password required";
    }
    if (empty($formdata['cpassword'])) {
        $errors['cpassword'] = "Confirm password required";
    }
    // se os campos de senha nao baterem
    // lanca uma excessao
    if (!empty($formdata['password']) && !empty($formdata['cpassword']) 
            && $formdata['password'] != $formdata['cpassword']) {
        $errors['password'] = "Passwords must match";
    }

    if (empty($errors)) {
        // desde que nao haja campos vazios, 
        // armazena os dados dos formularios em variaveis
        $username = $formdata['username'];
        $password = $formdata['password'];
        $cpassword = $formdata['cpassword'];

        // cria um objeto tabela usuario e usa para pegar 
        // os usuarios
        $connection = BD::getConnection();
        $userTable = new TabelaUsuario($connection);
        $user = $userTable->getUserByUsername($username);

        // desde que os campos de senha batam, verifica se 
        // o usuario ja foi registrado - se ja foi entao
        // lanca uma excessao
        if ($user != null) {
            $errors['username'] = "Username already registered";
        }
    }
    
    if (!empty($errors)) {
        throw new Exception("There were errors. Please fix them.");
    }
    
    $user = new Usuario(null, $username, $password, "user");
    $id = $userTable->insert($user);
    $user->setId($id);
    $_SESSION['user'] = $user;
    

    header('Location: index.php');
}
catch (Exception $ex) {
    $errorMessage = $ex->getMessage();
    require 'registro_formulario.php';
}
?>