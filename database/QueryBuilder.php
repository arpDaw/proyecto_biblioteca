<?php


class QueryBuilder{
    private $conexion;
    public function __construct(PDO $conexion){
        $this->conexion = $conexion;
    }

    public function findAll($tabla, $entidad, $args){
        $sql = "SELECT * from $tabla";
        $pdoStatment = $this->conexion->prepare($sql);
        if($pdoStatment->execute()===false){
            throw new Base_Exception('No se ha podido ejecutar la query 
            solicitada');
        }
        return $pdoStatment->fetchAll(PDO::FETCH_CLASS |
            PDO::FETCH_PROPS_LATE, $entidad, $args);
    }
    public function addRegister($tabla, $columnas, $valores){
        $sql = sprintf("INSERT INTO %s (%s) VALUES (%s);", $tabla, getColumnas($columnas), getMarcadores($columnas));

        print_r($sql);
        $pdoStatment = $this->conexion->prepare($sql);
        $pdoStatment->bindParam(':nombre', $valores[0] );
        $pdoStatment->bindParam(':descripcion', $valores[1]);
        $pdoStatment->bindParam(':imagen', $valores[2]);

        if($pdoStatment->execute()===false){
            throw new Base_Exception('No se ha podido ejecutar la query 
            solicitada');
        }
    }
}