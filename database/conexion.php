<?php


class Conexion{
    public static function make($config){ //funcion estática!!
        try{
            $opciones = [
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_PERSISTENT =>true
            ];
                $conexion = new PDO(
                    $config['connection'] . ';dbname=' . $config['name'],
                    $config['username'],
                    $config['password'],
                    $config['opciones']
                );
                
        }
        
        catch (PDOException $PDOExcepetion){ //las excepciones se muestran de manera automática
            die($PDOExcepetion->getMessage());
        }

        return $conexion;
    }
}

