<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ConnectionFactory
 *
 * @author instrutor
 */
class ConnectionFactory {

    private static $conn = null;
    private static $tipo = 'mysql';
    private static $host = 'localhost';
    private static $db = 'petshop';
    private static $usuario = 'root';
    private static $senha = '';

    public static function getConnection() {

        if (is_null(self::$conn)) {
            self::$conn = new PDO(self::$tipo . ':host=' . self::$host . ';dbname=' . self::$db, self::$usuario, self::$senha, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET Names UTF8'));
        }
        return self::$conn;
    }

}

?>
