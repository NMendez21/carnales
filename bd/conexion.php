<?php

		class Conexion{

				public function conectar(){

					  $usuario = 'root';
					  $contrasena = '';


					  try{
					    $objetoPDO = new PDO('mysql:host=localhost;dbname=carnales', $usuario, $contrasena);
					    $objetoPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					    
					    return $objetoPDO;
					  }catch(PDOException $e){
					    return "ERROR: " . $e->getMessage();
					  }
				}

		}


		