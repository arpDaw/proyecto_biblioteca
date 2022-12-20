<?php

class LibrosRepositorio extends QueryBuilder
{
    public function __construct($tabla = 'libros', $entidad = 'libros', $argumentos = ['nombre', 'logo'])
    {
        parent::__construct($tabla, $entidad, $argumentos);
    }
}
