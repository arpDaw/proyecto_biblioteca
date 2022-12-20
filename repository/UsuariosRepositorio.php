<?php

class UsuariosRepositorio extends QueryBuilder{
    public function __construct($tabla='usuarios', $entidad='usuarios', $argumentos=['nombre', 'logo'])
    {
        parent::__construct($tabla, $entidad, $argumentos);
    }
}