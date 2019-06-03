<?php
require_once 'utils/functions.php';
require_once 'classes/User.php';
require_once 'classes/Event.php';
require_once 'classes/EventTableGateway.php';
require_once 'classes/Location.php';
require_once 'classes/LocationTableGateway.php';
require_once 'classes/Connection.php';


$connection = Connection::getInstance();
$gateway = new EventTableGateway($connection);

$statement = $gateway->getEvents();

start_session();

if (!is_logged_in()) {
    header("Location: login_form.php");
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

                            $row = $statement->fetch(PDO::FETCH_ASSOC);
                        }
                        ?>
                </tbody>
            </table>

            <a class="btn btn-default" href="createEventForm.php">Criar Evento</a>
            <!--register button-->
        </div>
    </div>

    <?php require 'utils/footer.php'; ?>
</body>

</html>