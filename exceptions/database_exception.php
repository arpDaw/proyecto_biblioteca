<?php

class Database_exception extends Exception{

    public function __construct($mensaje){
        parent::__construct($mensaje);
    }
}