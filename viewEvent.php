<?php
require_once 'classes/Event.php';
require_once 'classes/EventTableGateway.php';
require_once 'classes/Connection.php';


if (!isset($_GET['id'])) {
    die("Illegal request");
}
$id = $_GET['id'];

$connection = Connection::getInstance();
$gateway = new EventTableGateway($connection);

$statement = $gateway->getEventsById($id);

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
    <?php require 'utils/header.php'; ?>
    <div class="content">
        <div class="container">
            <?php 
                if (isset($message)) {
                    echo '<p>'.$message.'</p>';
                }
                ?>
            <table class="table table-hover">
                <thead>
                    <!--table labels-->
                    <tr>
                        <th>ID do Evento</th>
                        <th>Título</th>
                        <th>Descrição</th>
                        <th>Data de Início</th>
                        <th>Data de Fim</th>
                        <th>Custo</th>
                        <th>ID Local</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <!--table contents, pulled from database-->
                    <?php
                        echo '<tr>';
                        echo '<td>' . $row['EventID'] . '</td>';
                        echo '<td>' . $row['Title'] . '</td>';
                        echo '<td>' . $row['Description'] . '</td>';                    
                        echo '<td>' . $row['StartDate'] . '</td>';
                        echo '<td>' . $row['EndDate'] . '</td>';
                        echo '<td>' . $row['Cost'] . '</td>';
                        echo '<td>' . $row['LocationID'] . '</td>';
                        echo '<td>'
                        . '<a class="delete" href="deleteEvent.php?id='.$row['EventID'].'">Deletar</a> '
                        . '</td>';
                        echo '</tr>';  
                        ?>
                </tbody>
            </table>
            <a class="btn btn-default" href="viewEvents.php"><span class="glyphicon glyphicon-circle-arrow-left"></span>
                Voltar</a>
        </div>
    </div>
    <?php require 'utils/footer.php'; ?>
</body>

</html>