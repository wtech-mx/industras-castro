<?php

class ControladorSlide{

	public function ctrMostrarSlide(){

		$tabla = "slider";

		$respuesta = ModeloSlide::mdlMostrarSlide($tabla);

		return $respuesta;
		
	}

}