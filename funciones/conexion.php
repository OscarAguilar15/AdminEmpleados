<?php
class Conexion{

    static public function insertar() {

        $conn = new PDO("mysql:host=localhost;dbname=test", "Juan", "test", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
        );

        return $conn;
    }
    static public function consultar() {

        $conn = new PDO("mysql:host=localhost;dbname=test", "Juan", 'test', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
        );

        return $conn;
    }
    static public function actualizar() {

        $conn = new PDO("mysql:host=localhost;dbname=test", "Juan", "test", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
        );

        return $conn;
    }
    static public function eliminar() {

        $conn = new PDO("mysql:host=localhost;dbname=test", "Juan", "test", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
        );

        return $conn;
    }

}