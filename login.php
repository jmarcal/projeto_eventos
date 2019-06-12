<?php

require_once 'utils/funcoes.php';
require_once 'classes/Usuario.php';
require_once 'classes/BD.php';
require_once 'classes/TabelaUsuario.php';

start_session();


try {
    $formdata = array();
    $errors = array();
    
    $input_method = INPUT_POST;

    $formdata['username'] = filter_input($input_method, "username", FILTER_SANITIZE_STRING);
    $formdata['password'] = filter_input($input_method, "password", FILTER_SANITIZE_STRING);
    
    // lanca erro se todos os campos estao vazios 
    if (empty($formdata['username'])) {
        $errors['username'] = "Username required";
    }

    if (empty($formdata['password'])) {
        $errors['password'] = "Password required";
    }
    if (empty($errors)) {
        // desde que nenhum campo esteja vazio, 
        // armazena o dado nas variaveis
        $username = $formdata['username'];
        $password = $formdata['password'];

        // cria um objeto tabela usuario
        $connection = BD::getConnection();
        $userTable = new TabelaUsuario($connection);
        $user = $userTable->getUserByUsername($username);

        // desde que as senhas batam, verifica se o usuario
        // ja foi registrado - se tiver sido
        // lanca uma excessao
        if ($user == null) {
            $errors['username'] = "Username is not registered";
        }
        else {
            if ($password !== $user->getSenha()) {
                $errors['password'] = "Password is incorrect";
            }
        }
    }
    
    if (!empty($errors)) {
        throw new Exception("");
    }
    
    // desde que o nome de usuario nao esteja registrado, cria
    // um novo objeto usuario, add ao banco de dados usando
    // a tabela usuario, e armazena numa session
    // usando a chave `usuario`
    $_SESSION['user'] = $user;
    
    // agora que o usuario esta cadastrado e logado e redirecionado
    // para home page
    // note que o usuario e redirecionado para home.php 
    // requisitando o script home.php  nesse ponto - isso 
    // garante que se o usuario atualizar a pagina home ele
    // nao estara reenviando o formulario.
    // 
    header('Location: index.php');
    }
    catch (Exception $ex) {
        // se uma excessao occorer extrai a mensagem
        // da excesao e manda o usuario para
        // o formulario de registro
        $errorMessage = $ex->getMessage();
        require 'login_formulario.php';
    }
    ?>