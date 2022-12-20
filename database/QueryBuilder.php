<?php



class QueryBuilder{
    private $conexion;

    private $tabla;

    private $entidad;

    private $constructor;

    public function __construct($tabla, $entidad, $constructor){
        $this->conexion = App::getConexion();
        $this->tabla = $tabla;
        $this->entidad = $entidad;
        $this->constructor = $constructor;
    }

    public function findAll(){
        $sql = "SELECT * from $this->tabla";
        $pdoStatment = $this->conexion->prepare($sql);
        if($pdoStatment->execute()===false){
            throw new Base_Exception('No se ha podido ejecutar la query 
            solicitada');
        }
        return $pdoStatment->fetchAll(PDO::FETCH_CLASS |
            PDO::FETCH_PROPS_LATE, $this->entidad, $this->constructor);
    }

    public function save($entidad){
        try{
            $parametros = $entidad->toArray();

            $sql = sprintf('INSERT INTO %s (%s) values (%s)',
            $this->tabla,
            implode(', ', array_keys($parametros)),
            ':' . implode(', :', array_keys($parametros))
            );
            $statement = $this->conexion->prepare($sql);
            $statement->execute($parametros);
        }
        catch (PDOException $ex){
            throw new Base_Exception('No se ha podido ejecutar la Query solicitada');
        }

    }
    public function getTotalLibros(){
        try{
            $sql = sprintf('SELECT COUNT(*) FROM biblioteca1.libros');
            $statement = $this->conexion->prepare($sql);
            $statement->execute();
            return $statement->fetchAll(PDO::FETCH_CLASS |
                PDO::FETCH_PROPS_LATE, $this->entidad, $this->constructor);

        }
        catch (PODException $ex){
            throw new Base_Exception('No se ha podido ejecutar la Query solicitada');
        }
    }
    public function getLibrosDisponibles(){
        try{
            $sql = sprintf('SELECT * 
                                   FROM biblioteca1.libros
                                   WHERE Cod_libro NOT IN(SELECT Cod_libro
                                                          FROM biblioteca1.prestamos
                                                          WHERE Devuelto = "false");');
            $statement = $this->conexion->prepare($sql);
            $statement->execute();
            return $statement->fetchAll(PDO::FETCH_CLASS |
                PDO::FETCH_PROPS_LATE, $this->entidad, $this->constructor);
        }
        catch (PODException $ex){
            throw new Base_Exception('No se ha podido ejecutar la Query solicitada');
        }
    }
    public function getLibrosPrestados(){
        try{
            $sql = sprintf('SELECT * 
                                   FROM biblioteca1.libros
                                   WHERE Cod_libro IN(SELECT Cod_libro
                                                          FROM biblioteca1.prestamos
                                                          WHERE Devuelto = "false");');
            $statement = $this->conexion->prepare($sql);
            $statement->execute();
            return $statement->fetchAll(PDO::FETCH_CLASS |
                PDO::FETCH_PROPS_LATE, $this->entidad, $this->constructor);
        }
        catch (PODException $ex){
            throw new Base_Exception('No se ha podido ejecutar la Query solicitada');
        }
    }
}