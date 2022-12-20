<?php

class Usuarios implements IEntity{
    public $cod_usuario;

    public function getCodUsuario()
    {
        return $this->cod_usuario;
    }

    public function setCodUsuario($cod_usuario): void
    {
        $this->cod_usuario = $cod_usuario;
    }
    public $nombre;

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre): void
    {
        $this->nombre = $nombre;
    }
    public $apellidos;

    public function getApellidos()
    {
        return $this->apellidos;
    }

    public function setApellidos($apellidos): void
    {
        $this->apellidos = $apellidos;
    }
    public $dni;

    public function getDni()
    {
        return $this->dni;
    }

    public function setDni($dni): void
    {
        $this->dni = $dni;
    }
    public $domicilio;

    public function getDomicilio()
    {
        return $this->domicilio;
    }

    public function setDomicilio($domicilio): void
    {
        $this->domicilio = $domicilio;
    }
    public $poblacion;

    public function getPoblacion()
    {
        return $this->poblacion;
    }

    public function setPoblacion($poblacion): void
    {
        $this->poblacion = $poblacion;
    }
    public $provincia;

    public function getProvincia()
    {
        return $this->provincia;
    }

    public function setProvincia($provincia): void
    {
        $this->provincia = $provincia;
    }
    public $fecha_nacimiento;

    public function getFechaNacimiento()
    {
        return $this->fecha_nacimiento;
    }

    public function setFechaNacimiento($fecha_nacimiento): void
    {
        $this->fecha_nacimiento = $fecha_nacimiento;
    }


    public function toArray()
    {
        return[
            'Cod_usuario'=>$this->getCodUsuario(),
            'Nombre'=>$this->getNombre(),
            'Apellidos'=>$this->getApellidos(),
            'DNI'=>$this->getDni(),
            'Domicilio'=>$this->getDomicilio(),
            'Poblacion'=>$this->getPoblacion(),
            'Provincia'=>$this->getProvincia(),
            'Fecha_nacimiento'=>$this->getFechaNacimiento()
        ];
    }
}