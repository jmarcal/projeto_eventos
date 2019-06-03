<?php
require_once 'classes/Localizacao.php';
require_once 'classes/TabelaLocalizacao.php';
require_once 'classes/TabelaEvento.php';
require_once 'classes/Conexao.php';


if (!isset($_GET['id'])) {
    die("Illegal request");
}
$id = $_GET['id'];

$connection = Conexao::getInstance();
$gateway = new TabelaLocalizacao($connection);
$eventGateway = new TabelaEvento($connection);

$statement = $gateway->getLocationsById($id);
$events = $eventGateway->getEventsPorIdlocalizacao($id);

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
                        echo '<td>' . $row['IDlocalizacao'] . '</td>';
                        echo '<td>' . $row['Nome'] . '</td>';
                        echo '<td>' . $row['Endereco'] . '</td>';
                        echo '<td>' . $row['NomeOrganizador'] . '</td>';
                        echo '<td>' . $row['SobrenomeOrganizador'] . '</td>';
                        echo '<td>' . $row['EmailOrganizador'] . '</td>';
                        echo '<td>' . $row['ContatoOrganizador'] . '</td>';
                        echo '<td>' . $row['CapacidadeMaxima'] . '</td>';
                        echo '<td>'
                        . '<a href="editarLocalizacaoForm.php?id=' . $row['IDlocalizacao'] . '">Editar</a> '
                        . '<a class="delete" href="deletarLocalizacao.php?id=' . $row['IDlocalizacao'] . '">Deletar</a> '
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
                            echo '<td>' . $row['IDevento'] . '</td>';
                            echo '<td>' . $row['Titulo'] . '</td>';
                            echo '<td>' . $row['Descricao'] . '</td>';                    
                            echo '<td>' . $row['DataInicio'] . '</td>';
                            echo '<td>' . $row['DataFim'] . '</td>';
                            echo '<td>' . $row['Custo'] . '</td>';
                            echo '<td>'
                            . '<a href="verLocalizacao.php?id='.$row['IDlocalizacao'].'">'.$row['nome'].'</a> '
                            . '</td>';
                            echo '<td>'
                            . '<a href="verEvento.php?id='.$row['IDevento'].'">Ver</a> '
                            . '<a class="delete" href="deletarEvento.php?id='.$row['IDevento'].'">Deletar</a> '
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
            <a class="btn btn-default" href="verLocalizacoes.php"><span
                    class="glyphicon glyphicon-circle-arrow-left"></span> Voltar</a>
        </div>
    </div>

    <?php require 'utils/rodape.php'; ?>
</body>

</html>