<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Proyecto Servidor</title>
        <meta name="description" content="biblioteca para DWES">
        <meta name="author" content="Pablo">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">

        <link rel="stylesheet" href="../assets/css/normalize.css">
        <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="../assets/css/fontello.css">
        <link href="../assets/fonts/icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet">
        <link href="../assets/fonts/icon-7-stroke/css/helper.css" rel="stylesheet">
        <link href="../assets/css/animate.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" href="../assets/css/bootstrap-select.min.css"> 
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/css/icheck.min_all.css">
        <link rel="stylesheet" href="../assets/css/price-range.css">
        <link rel="stylesheet" href="../assets/css/owl.carousel.css">  
        <link rel="stylesheet" href="../assets/css/owl.theme.css">
        <link rel="stylesheet" href="../assets/css/owl.transitions.css">
        <link rel="stylesheet" href="../assets/css/style.css">
        <link rel="stylesheet" href="../assets/css/responsive.css">
    </head>

    <body>
        <!-- <div id="preloader">
            <div id="status">&nbsp;</div>
        </div> -->

        <?php
            require_once "partials/inicio.part.php";
            require_once "./utils/File.php";
            require_once "./database/conexion.php";
            require_once "./utils/consultas.php";
        ?>
                            <h2>Añadir Colaborador</h2>
                            <form method="post" enctype="multipart/form-data" >
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="firstname">Nombre</label>
                                            <input type="text" class="form-control" id="nombre" name="nombre" required>

                                            <label for="firstname">Descripción</label>
                                            <input type="text" class="form-control" id="descripcion" name="descripcion" required>

                                            <br>

                                            <input type="submit" class="btn btn-primary" value="↑ Upload" name="subir" id="subir">
                                        </div>
                                    </div>
                                        <div class="col-sm-6 ">
                                            <label for="firstname">Picture</label>
                                            <input type="file" class="form-control" id="archivo" name="archivo" required>
                                        </div>
                                </div>
                                <!-- /.row -->
                            </form>
                        </div>
                    </div>    
                </div>
            </div>
        </div>

        <?php
            require_once "partials/final.part.php";
            include 'C:\xampp\htdocs\Practicas_DWES_Ruiz_Alfaro_Pablo\UD06\proyecto_biblioteca\utils\verificaForm.php'
        ?>


        <script src="../assets/js/modernizr-2.6.2.min.js"></script>
        <script src="../assets/js/jquery-1.10.2.min.js"></script> 
        <script src="../bootstrap/js/bootstrap.min.js"></script>
        <script src="../assets/js/bootstrap-select.min.js"></script>
        <script src="../assets/js/bootstrap-hover-dropdown.js"></script>
        <script src="../assets/js/easypiechart.min.js"></script>
        <script src="../assets/js/jquery.easypiechart.min.js"></script>
        <script src="../assets/js/owl.carousel.min.js"></script>
        <script src="../assets/js/wow.js"></script>
        <script src="../assets/js/icheck.min.js"></script>
        <script src="../assets/js/price-range.js"></script>
        <script src="../assets/js/main.js"></script>

    </body>