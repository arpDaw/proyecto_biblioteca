<?php
require_once "./entity/Colaboradores.php";
require_once "./database/conexion.php";
require_once "./database/QueryBuilder.php";


function ejemplo(){
    $config = require_once __DIR__ . '/../app/config.php';
    App::bind('config', $config);
    $conexion = App::getConexion();


    $constructor = ['nombre', 'descripcion', 'imagen'];
    $entidad = "Colaboradores";
    $tabla = "biblioteca1.colaboradores";

    $queryBuilder = new QueryBuilder($tabla, $entidad, $constructor);

    $colaboradores = $queryBuilder->findAll();

    shuffle($colaboradores);
    $tempo = array_chunk($colaboradores, 3);


    foreach ($tempo[0] as $value) {
        $ruta = $value->getUrlImagen();
        echo "<img src='$ruta'>";
    }
}

ejemplo();