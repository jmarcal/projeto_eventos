<?php
require_once 'utils/funcoes.php';
require_once 'classes/Usuario.php';
require_once 'classes/Evento.php';
require_once 'classes/TabelaEvento.php';
require_once 'classes/Localizacao.php';
require_once 'classes/TabelaLocalizacao.php';
require_once 'classes/Conexao.php';


$connection = Conexao::getInstance();
$gateway = new TabelaEvento($connection);

$statement = $gateway->getEventos();

start_session();

if (!is_logged_in()) {
    header("Location: login_formulario.php");
    header('Content-Type: text/html; charset=utf-8');
}

$user = $_SESSION['user'];
?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Eventos</title>
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
                        <th>ID do Evento</th>
                        <th>Título</th>
                        <th>Descrição</th>
                        <th>Data de Início</th>
                        <th>Data de Fim</th>
                        <th>Custo</th>
                        <th>Local</th>
                        <th>Acões</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                  
                        $row = $statement->fetch(PDO::FETCH_ASSOC);
                        while ($row) {
                            echo '<tr>';
                            echo '<td>' . $row['IDevento'] . '</td>';
                            echo '<td>' . $row['Titulo'] . '</td>';
                            echo '<td>' . $row['Descricao'] . '</td>';                    
                            echo '<td>' . $row['DataInicio'] . '</td>';
                            echo '<td>' . $row['DataFim'] . '</td>';
                            echo '<td>' . $row['Custo'] . '</td>';
                            echo '<td>'
                            . '<a href="verLocalizacao.php?id='.$row['IDlocalizacao'].'">'.$row['Nome'].'</a> '
                            . '</td>';
                            echo '<td>'
                            . '<a href="verEvento.php?id='.$row['IDevento'].'">Ver</a> '
                            . '<a class="delete" href="deletarEvento.php?id='.$row['IDevento'].'">Deletar</a> '
                            . '</td>';
                            echo '</tr>';  

                            $row = $statement->fetch(PDO::FETCH_ASSOC);
                        }
                        ?>
                </tbody>
            </table>

            <a class="btn btn-default" href="criarEventoForm.php">Criar Evento</a>
            <!--register button-->
        </div>
    </div>

    <?php require 'utils/rodape.php'; ?>
</body>

</html>