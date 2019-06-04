<?php
class BD {
    // configuracao banco
    private static $host = "localhost";
    private static $bd = "upeventos2";
    private static $nusuario = "root";
    private static $susuario = "admin1234";
    
    public static function getConnection() {
        $dsn = 'mysql:host=' . BD::$host . ';dbname=' . BD::$bd;

        $connection = new PDO($dsn, BD::$nusuario, BD::$susuario);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        

        return $connection;
    }

}