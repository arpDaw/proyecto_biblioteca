<?php

class Colaboradores{
    public $nombre;
    public $descripcion;
    const RUTA_IMAGEN = '..\..\assets\img\colaboradores/';
    public $imagen;

    function __construct($nombre, $descripcion, $imagen){
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->imagen = $imagen;
    }

    function getNombre(){
        return $this->nombre;
    }

    function getDescripcion(){
        return $this->descripcion;
    }

    function setNombre($nombre){
        $this->nombre = $nombre;
    }
    function setDescripcion($descripcion){
        $this->descripcion = $descripcion;
    }

    function getUrlImagen(){
        return self::RUTA_IMAGEN.$this->imagen;
    }   
}
