<?php

class PrestamosRepositorio extends QueryBuilder{
    public function __construct($tabla='prestamos', $entidad='prestamos', $argumentos=['nombre', 'logo'])
    {
        parent::__construct($tabla, $entidad, $argumentos);
    }
}