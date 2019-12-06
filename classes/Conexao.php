<?php
class Conexao {
    
    private static $connect = NULL;
    
    public static function getInstancia() {
        if (Conexao::$connect === NULL) {
            // conexao ao banco
            $host = "localhost";
			$bd = " NOMEBANCO ";
			$nusuario = "NOMEUSUARIO";
            $susuario = "SENHAUSUARIO";
            

            $dsn = "mysql:host=" . $host . ";dbname=" . $bd;
            Conexao::$connect = new PDO($dsn, $nusuario, $susuario);
            if (!Conexao::$connect) {
                die("Nao foi possivel conectar ao banco");
            }
        }
        
        return Conexao::$connect;
    }
    
}