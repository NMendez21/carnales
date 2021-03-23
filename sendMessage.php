<?php
	
	
		if(isset($_POST["txtNombre"]))
		{

			$name = $_POST["txtNombre"];
			$phone = $_POST["txtTelefono"];
			$message = $_POST["txtDeseo"];


			header("location:https://api.whatsapp.com/send?phone=50373019693&text=Hola mi nombre es $name estoy interesado en iniciar un proyecto con ustedes con las siguientes caracteristicas: *$message*, mi numero de contacto es el $phone.");

		}else{

			header("location:https://api.whatsapp.com/send?phone=50373019693&text=Hola, estoy interesado en iniciar un proyecto con ustedes.");
		}
		


?>