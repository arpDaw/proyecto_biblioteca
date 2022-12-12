<?php
require_once "./exceptions/FileException.php";

class File {
    private $types  = array("image/jpg", "image/jpeg", "image/png", "image/gif");
    private $file;

    function __construct($nombre){
        if(!in_array($_FILES[$nombre]['type'], $this->types)){
            throw new FileException('El archivo no es una imagen');
        }
        $this->file = $_FILES[$nombre];


    }

    function saveUploadFile($ruta){
        $rutaCompleta = $ruta . $this->file["name"];

        while(is_file($rutaCompleta)){
            $nombre = random_int(1, 1000) . $this->file['name'];
            $rutaCompleta = $ruta . $nombre;
            $this->file['name'] = $nombre;
        }

        $temp = $this->file['tmp_name'];
        if(!move_uploaded_file($temp, $rutaCompleta)){
            throw new FileException('El archivo no se ha subido correctamente');
        }
    }

    public function getName(){
        return $this->file['name'];
    }
}

//if(isset($_POST['subir'])){
//    $file = new File("archivo");
//    $file->saveUploadFile(".\assets\img\colaboradores/");
//}