<?php
require_once 'classes/Localizacao.php';
require_once 'classes/TabelaLocalizacao.php';
require_once 'classes/Conexao.php';


if (!isset($_GET['id'])) {
    die("Illegal request");
}
$id = $_GET['id'];

$connection = Conexao::getInstancia();

$gateway = new TabelaLocalizacao($connection);

$gateway->delete($id);

header('Location: verLocalizacoes.php');