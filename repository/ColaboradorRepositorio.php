<?php

class ColaboradorRepositorio extends QueryBuilder{
    public function __construct($tabla='colaboradores', $entidad='colaboradores', $argumentos=['nombre', 'logo'])
    {
        parent::__construct($tabla, $entidad, $argumentos);
    }
}