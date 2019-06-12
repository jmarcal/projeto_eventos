<?php
require_once 'classes/Evento.php';
require_once 'classes/TabelaEvento.php';
require_once 'classes/Conexao.php';


if (!isset($_GET['id'])) {
    die("Illegal request");
}
$id = $_GET['id'];

$connection = Conexao::getInstancia();
$gateway = new TabelaEvento($connection);

$statement = $gateway->getEventsPorId($id);

$row = $statement->fetch(PDO::FETCH_ASSOC);
if (!$row) {
    die("Illegal request");
}
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
                    <!--labels tabelas-->
                    <tr>
                        <th>ID do Evento</th>
                        <th>Título</th>
                        <th>Descrição</th>
                        <th>Tipo de Evento</th>
                        <th>Data de Início</th>
                        <th>Data de Fim</th>
                        <th>Custo</th>
                        <th>ID Local</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <!--conteudo tabelas, pega do db-->
                    <?php
                        echo '<tr>';
                        echo '<td>' . $row['IDevento'] . '</td>';
                        echo '<td>' . $row['Titulo'] . '</td>';
                        echo '<td>' . $row['Descricao'] . '</td>'; 
                        echo '<td>' . $row['TipoEvento'] . '</td>';                    
                        echo '<td>' . $row['DataInicio'] . '</td>';
                        echo '<td>' . $row['DataFim'] . '</td>';
                        echo '<td>' . $row['Custo'] . '</td>';
                        echo '<td>' . $row['IDlocalizacao'] . '</td>';
                        echo '<td>'
                        . '<a class="delete" href="deletarEvento.php?id='.$row['IDevento'].'">Deletar</a> '
                        . '</td>';
                        echo '</tr>';  
                        ?>
                </tbody>
            </table>
            <a class="btn btn-default" href="verEventos.php"><span class="glyphicon glyphicon-circle-arrow-left"></span>
                Voltar</a>
        </div>
    </div>
    <?php require 'utils/rodape.php'; ?>
</body>

</html>