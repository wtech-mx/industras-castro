<?php

class Conexion{

	public function conectar(){

		//$link = new PDO("mysql:host=localhost;dbname=blog-eago",
						//"user-blog",
						//"Blog123.",
		$link = new PDO("mysql:host=localhost;dbname=blog-eago",
						"user-blog",
						"Blog123.",
						array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		                      PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
						);

		return $link;

	}


}

