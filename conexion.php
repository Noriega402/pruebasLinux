<?php
  class Conexion{
		function connection(){
			try{
				$db = 'employees';
				$user ='denc';
				$pass = 'admin';
				$host = 'localhost';

				$conexion = new PDO("mysql:host=$host; dbname=$db",$user,$pass);
				echo "Conectado a la base de datos desde a terminal de linux";

			}catch(PDOException $e){
				echo "Ocurrio un error al conectar con la base de datos, verifica que es";
				echo $e->getMessage();
				echo "\nLinea de error: ".$e->getLine();
			};
			return $conexion;
		};
  };