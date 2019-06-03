<?php
require_once 'classes/Evento.php';
require_once 'classes/TabelaEvento.php';
require_once 'classes/Conexao.php';


if (!isset($_GET['id'])) {
    die("Illegal request");
}
$id = $_GET['id'];

$connection = Conexao::getInstance();

$gateway = new TabelaEvento($connection);

$gateway->delete($id);

header('Location: verEventos.php');