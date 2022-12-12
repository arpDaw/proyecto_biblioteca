<?php

require_once "./database/conexion.php";
require_once "./database/QueryBuilder.php";
require_once "./views/upload.view.php";
require_once "./utils/File.php";
require_once "./utils/utils.php";
require_once "./entity/Colaboradores.php";


$config = require_once __DIR__ . '/app/config.php';
$conexion = Conexion::make($config);


if(isset($_POST['subir'])){
    $file = new File("archivo");
    $file->saveUploadFile(".\assets\img\colaboradores/");

    $queryBuilder = new QueryBuilder($conexion);

    $tabla = "biblioteca1.colaboradores";
    $columnas = ["nombre", "descripcion", "imagen"];

    $valores = [$_POST['nombre'], $_POST['descripcion'], $file->getName()];

    print_r(getColumnas($columnas));
    print_r(getMarcadores($columnas));


    $queryBuilder->addRegister($tabla, $columnas, $valores);




//    $sql = "INSERT INTO biblioteca1.colaboradores (nombre, descripcion, imagen)
//    VALUES (:nombre, :descripcion, :imagen);";
//
//    $nombre = $_POST['nombre'];
//    $descripcion = $_POST['descripcion'];
//    $imagen = $file->getName();
//
//
//    $resultado = $conexion->prepare($sql);
//    $resultado->bindParam(':nombre', $nombre );
//    $resultado->bindParam(':descripcion', $descripcion);
//    $resultado->bindParam(':imagen', $imagen);
//    $resultado->execute();


}

