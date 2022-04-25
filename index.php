<?php

// se requiere utilizar los controladores
require_once "controladores/plantilla.controlador.php";
require_once "controladores/inicio.controlador.php";
require_once "controladores/clientes.controlador.php";
require_once "controladores/productos.controlador.php";


// se requiere utilizar los modelos
require_once "modelos/inicio.modelo.php";
require_once "modelos/clientes.modelo.php";
require_once "modelos/productos.modelo.php";



$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();