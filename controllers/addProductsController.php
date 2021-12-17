<?php
	
	require_once("../models/Producto.php");

	$codigo = $_POST["txtCodigo"];
	$nombre = $_POST["txtNombre"];
	$descripcion = $_POST["txtDescripcion"];
	$precio = $_POST["txtPrecio"];
	$categoria = $_POST["selectCategoria"];


	$producto = array($codigo,$nombre,$precio,$descripcion,$categoria,1);


	$productoObj = new Producto();
	$productoObj->insertProduct($producto);
	

	echo 'Producto agregado';