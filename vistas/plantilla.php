<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="vistas/img/plantilla/invo.ico">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FERXO STYLE</title>

    <!-- PLUGINS DE CSS -->
    <!-- Fuentes de google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- fontawesome -->
    <link rel="stylesheet" href="vistas/libs/fontawesome/css/fontawesome.css">
    <link rel="stylesheet" href="vistas/libs/fontawesome/css/brands.css">
    <link rel="stylesheet" href="vistas/libs/fontawesome/css/solid.css">
    <!-- Estilos de toda la aplicación web -->
    <link rel="stylesheet" href="vistas/dist/css/plantilla.css">
    <!-- Estilos del menú -->
    <link rel="stylesheet" href="vistas/dist/css/menu.css">
    <!-- Estilos del inicio -->
    <link rel="stylesheet" href="vistas/dist/css/inicio.css">
    <!-- Estilos del pie -->
    <link rel="stylesheet" href="vistas/dist/css/pie.css">
    <!-- Estilos del login -->
    <link rel="stylesheet" href="vistas/dist/css/login.css">
    <!-- Estilos de productos -->
    <link rel="stylesheet" href="vistas/dist/css/productos.css">
    <!-- Estilos de detalle de producto -->
    <link rel="stylesheet" href="vistas/dist/css/detalle-productos.css">
    <!-- Estilos de carrito de compras -->
    <link rel="stylesheet" href="vistas/dist/css/carrito.css">

    <!-- PLUGINS DE JS -->
    <script src="vistas/libs/jquery/jquery.min.js"></script>
    <script src="vistas/libs/fontawesome/js/fontawesome.js"></script>
    <script src="vistas/libs/fontawesome/js/brands.js"></script>
    <script src="vistas/libs/fontawesome/js/solid.js"></script>
    <script src="vistas/libs/sweetalert2/sweetalert2.all.js"></script>
</head>
<body>

    <?php
        if(isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"] == "ok"){
            
    ?>
    <div class="header">
        <div class="container">


            <?php include "modulos/menuIni.php";  /* include "modulos/header.php"; */ ?>
           
        </div>
    </div>
    <?php
                
                // redireccionamiento a cada modulo
               if(isset($_GET["ruta"])){
                   if($_GET["ruta"]=="inicio" ||
                        $_GET["ruta"]=="articulos-para-mujeres" ||
                        $_GET["ruta"]=="productos" ||
                        $_GET["ruta"]=="detalle-del-producto" ||
                        $_GET["ruta"]=="carrito" ||
                        $_GET["ruta"]=="salir"){
                       include "modulos/".$_GET["ruta"].".php";
                   }else{
                       include "modulos/404.php";
                   }
               }else{
                   include "modulos/inicio.php";
               }

               include "modulos/pie.php"; 
           ?>

    <?php }else{
        
        // redireccionamiento a cada modulo
       if(isset($_GET["ruta"])){
           if($_GET["ruta"]=="inicio" ||
                $_GET["ruta"]=="login" ||
                $_GET["ruta"]=="articulos-para-mujeres" ||
                $_GET["ruta"]=="detalle-del-producto" ||
                $_GET["ruta"]=="carrito" ||
                $_GET["ruta"]=="productos"){
                
                if($_GET["ruta"]=="login"){
                    include "modulos/".$_GET["ruta"].".php";
                }else{
                    include "modulos/menu.php";
                    include "modulos/".$_GET["ruta"].".php";
                    include "modulos/pie.php"; 
                }
               
           }else{
                include "modulos/menu.php";
               include "modulos/404.php";
               include "modulos/pie.php"; 
           }
       }else{
           include "modulos/menu.php";
           include "modulos/inicio.php";
           include "modulos/pie.php"; 
       }


    } ?>



    

    <script src="vistas/dist/js/menu.js"></script>
    
    <script src="vistas/dist/js/login.js"></script>
    <script src="vistas/js/productos.js"></script>
</body>
</html>