<?php
require_once 'utils/funcoes.php';
require_once 'classes/Usuario.php';
require_once 'classes/Localizacao.php';
require_once 'classes/TabelaLocalizacao.php';
require_once 'classes/Conexao.php';

$connection = Conexao::getInstancia();
$gateway = new TabelaLocalizacao($connection);

$statement = $gateway->getLocations();

start_session();

if (!is_logged_in()) {
    header("Location: login_formulario.php");
}

$user = $_SESSION['user'];
?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title></title>
    <?php require 'utils/styles.php'; ?>
    <?php require 'utils/scripts.php'; ?>
</head>

<body>
    <?php require 'utils/cabecalho.php'; ?>
    <div class="content">
        <div class="container">
            <?php 
                if (isset($message)) {
                    echo '<p>'.$message.'</p>';
                }
                ?>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <!--label tabela-->
                        <!--somente mostrara localizacao detalhada com ID especifico escolhido pelo usuario-->
                        <th>ID de Localização</th>
                        <th>Nome</th>
                        <th>Endereço</th>
                        <th>Nome do Organizador</th>
                        <th>Sobrenome do Organizador</th>
                        <th>Email do Organizador</th>
                        <th>Contato do Organizador</th>
                        <th>Capacidade Máxima</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <!--conteudo tabela-->
                    <?php
                        $row = $statement->fetch(PDO::FETCH_ASSOC);
                        while ($row) {
                            echo '<tr>';
                            echo '<td>' . $row['IDlocalizacao'] . '</td>';
                            echo '<td>' . $row['Nome'] . '</td>';
                            echo '<td>' . $row['Endereco'] . '</td>';                    
                            echo '<td>' . $row['NomeOrganizador'] . '</td>';
                            echo '<td>' . $row['SobrenomeOrganizador'] . '</td>';
                            echo '<td>' . $row['EmailOrganizador'] . '</td>';
                            echo '<td>' . $row['ContatoOrganizador'] . '</td>';
                            echo '<td>' . $row['CapacidadeMaxima'] . '</td>';
                            echo '<td>'
                            . '<a href="verLocalizacao.php?id='.$row['IDlocalizacao'].'">Ver</a> '
                            . '<a href="editarLocalizacaoForm.php?id='.$row['IDlocalizacao'].'">Editar</a> '
                            . '<a class="delete" href="deletarLocalizacao.php?id='.$row['IDlocalizacao'].'">Deletar</a> '
                            . '</td>';
                            echo '</tr>';  

                            $row = $statement->fetch(PDO::FETCH_ASSOC);
                        }
                        ?>
                </tbody>
            </table>
            <a class="btn btn-default" href="criarLocalizacaoForm.php">Criar Local</a>
        </div>
    </div>
    <?php require 'utils/rodape.php'; ?>
</body>

</html>