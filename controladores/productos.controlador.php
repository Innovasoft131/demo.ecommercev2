<?php

class ControladorProductos{
    /*=============================================
	MOSTRAR PRODUCTOS
	=============================================*/

	static public function ctrMostrarProductos($item, $valor){


		$tabla = "productos";

		$respuesta = ModeloProducto::mdlMostrarProductos($tabla, $item, $valor);


		return $respuesta;
	}


    /*=============================================
	MOSTRAR TOTAL DE PRODUCTOS
	=============================================*/

	static public function ctrObtenerTotalProductos($item, $valor){

		$tabla = "productos";

		$respuesta = ModeloProducto::mdlObtenerTotalProductos($tabla, $item, $valor);


		return $respuesta;
	}


    	/*=============================================
	MOSTRAR PRODUCTOS POR NUEVOS Y OFERTAS CON LIMIT
	=============================================*/

	static public function ctrMostrarProductosLim($item, $valor, $inicio, $fin){

		$tabla = "productos";

		$respuesta = ModeloProducto::mdlMostrarProductosLim($tabla, $item, $valor, $inicio, $fin);
			
		return $respuesta;
	}
}