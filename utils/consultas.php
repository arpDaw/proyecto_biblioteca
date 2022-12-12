<?php

class Consulta{
   

    public function __construct(){
     
    }

    public function addColaborador($nombre, $descripcion){
        $sql = "INSERT INTO biblioteca1.colaboradores (nombre, descripcion)
        VALUES ('$nombre', '$descripcion');";
        }
}

if(isset($_POST['subir'])){
    $consulta = new Consulta();
    $consulta->addColaborador($_POST['nombre'], $_POST['descripcion']);
}