<?php
require_once 'utils/funcoes.php';
require_once 'classes/Usuario.php';

start_session();

if (!is_logged_in()) {
    header("Location: index.php");
}
else {
	unset($_SESSION['user']);
	
	header("Location: index.php");
}
?>