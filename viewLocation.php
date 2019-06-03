<?php
require_once 'classes/Location.php';
require_once 'classes/LocationTableGateway.php';
require_once 'classes/EventTableGateway.php';
require_once 'classes/Connection.php';


if (!isset($_GET['id'])) {
    die("Illegal request");
}
$id = $_GET['id'];

$connection = Connection::getInstance();
$gateway = new LocationTableGateway($connection);
$eventGateway = new EventTableGateway($connection);

$statement = $gateway->getLocationsById($id);
$events = $eventGateway->getEventsByLocationId($id);

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
                    echo '<p>' . $message . '</p>';
                }
                ?>
            <table class="table table-hover">
                <thead>
                    <!--table label-->
                    <!--this will only show the detail of a location with specific ID chosen by the user-->
                    <tr>
                        <th>ID de Localização</th>
                        <th>Nome Local</th>
                        <th>Endereço</th>
                        <th>Nome Organizador</th>
                        <th>Sobrenome Organizador</th>
                        <th>Email Organizador</th>
                        <th>Contato Organizador</th>
                        <th>Capacidade Máxima</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <!--table contents-->
                    <?php
                        echo '<tr>';
                        echo '<td>' . $row['LocationID'] . '</td>';
                        echo '<td>' . $row['Name'] . '</td>';
                        echo '<td>' . $row['Address'] . '</td>';
                        echo '<td>' . $row['ManagerFName'] . '</td>';
                        echo '<td>' . $row['ManagerLName'] . '</td>';
                        echo '<td>' . $row['ManagerEmail'] . '</td>';
                        echo '<td>' . $row['ManagerNumber'] . '</td>';
                        echo '<td>' . $row['MaxCapacity'] . '</td>';
                        echo '<td>'
                        . '<a href="editLocationForm.php?id=' . $row['LocationID'] . '">Editar</a> '
                        . '<a class="delete" href="deleteLocation.php?id=' . $row['LocationID'] . '">Deletar</a> '
                        . '</td>';
                        echo '</tr>';
                        ?>
                </tbody>
            </table>
            <?php
                if ($events->rowCount() > 0) {
                ?>
            <h2>Eventos nessa localização</h2>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID do Evento</th>
                        <th>Título</th>
                        <th>Descrição</th>
                        <th>Data de Início</th>
                        <th>Data de Fim</th>
                        <th>Custo</th>
                        <th>Localização</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $row = $events->fetch(PDO::FETCH_ASSOC);
                        while ($row) {
                            echo '<tr>';
                            echo '<td>' . $row['EventID'] . '</td>';
                            echo '<td>' . $row['Title'] . '</td>';
                            echo '<td>' . $row['Description'] . '</td>';                    
                            echo '<td>' . $row['StartDate'] . '</td>';
                            echo '<td>' . $row['EndDate'] . '</td>';
                            echo '<td>' . $row['Cost'] . '</td>';
                            echo '<td>'
                            . '<a href="viewLocation.php?id='.$row['LocationID'].'">'.$row['name'].'</a> '
                            . '</td>';
                            echo '<td>'
                            . '<a href="viewEvent.php?id='.$row['EventID'].'">Ver</a> '
                            . '<a class="delete" href="deleteEvent.php?id='.$row['EventID'].'">Deletar</a> '
                            . '</td>';
                            echo '</tr>';  

                            $row = $events->fetch(PDO::FETCH_ASSOC);
                        }
                        ?>
                </tbody>
            </table>
            <?php
                } else {
                ?>
            <p>Não há Eventos nessa localização.</p>
            <?php
                }
                ?>
            <a class="btn btn-default" href="viewLocations.php"><span
                    class="glyphicon glyphicon-circle-arrow-left"></span> Voltar</a>
        </div>
    </div>

    <?php require 'utils/footer.php'; ?>
</body>

</html>