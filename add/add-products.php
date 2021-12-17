<?php

	include(__DIR__."\..\models\Producto.php");	
	$obj = new Producto();

?>


<!DOCTYPE html>
<html>
<head>
	<title>Carnales Panel</title>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@900&family=Lora:wght@521&family=Open+Sans+Condensed:wght@700&family=Smooch&family=Staatliches&display=swap" rel="stylesheet">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&family=Montserrat&family=Noto+Sans+JP:wght@900&family=Open+Sans&family=Oswald:wght@200;700&family=Raleway:wght@700&family=Recursive&display=swap" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="../assets/style.css">

	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jszip-2.5.0/dt-1.11.3/b-2.1.1/b-colvis-2.1.1/b-html5-2.1.1/b-print-2.1.1/r-2.2.9/datatables.min.css"/>
</head>
<body>



	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <div class="container-fluid">
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
	      <a class="navbar-brand" href="#"></a>
	      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
	        <li class="nav-item">
	          <a class="nav-link active brand" aria-current="page" href="#"><img src="https://carnales-sv.000webhostapp.com/images/carnales.png" class="brand-panel"></a>
	        </li>
	        <!--<li class="nav-item">
	          <a class="nav-link" href="#">Link</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
	        </li>-->
	      </ul>
	      
	    </div>
	  </div>
	</nav>


	<div class="container-fluid">
		
			<div class="row p-4">
				

					<div class="col-lg-4 col-md-12 col-sm-12 p-3 box">	

							<h2>Agregar productos</h2>

							<form method="post" action="../controllers/addProductsController.php">
								<div class="mb-3">
									<label>Codigo del producto</label>
									<input class="form-control input-xs" type="text" name="txtCodigo">
								</div>

								<div class="mb-3">
									<label>Nombre del producto</label>
									<input class="form-control" type="text" name="txtNombre">
								</div>

								<div class="mb-3">
									<label>Descripción del producto</label>
									<textarea class="form-control" type="text" name="txtDescripcion"></textarea>
								</div>

								<div class="mb-3">
									<label>Precio</label>
									<input class="form-control" type="text" name="txtPrecio">
								</div>

								<div class="mb-3">
									<label>Categoria</label>
									<select class="form-control" type="text" name="selectCategoria">
											<option value="1">Mesas</option>
											<option value="2">Bancos</option>
											<option value="3">Navideños</option>
											<option value="4">Escritorios</option>
											<option value="5">Macetas</option>
											<option value="6">Estructuras decorativas</option>
									</select>
								</div>

								<div class="mb-3">
									<button class="btn btn-dark">Guardar</button>
								</div>



							</form>


					</div>

					<div class="col-lg-8 col-md-12 col-sm-12 p-3 box">		

							<table id="table-productos" class="table table-striped" style="width: 100%;">
								
								<thead>
									 <tr>

									  <th>Codigo Producto</th>

								      <th>Nombre</th>

								      <th>Descripción</th>

								      <th>Precio</th>

								      <th>Categoria</th>

								      <th>Estado</th>

								      <th>Opciones</th>

								     
								    </tr>
								</thead>


							<tbody>

						<?php $table = $obj->getAll(); 

							foreach ($table as $key) {
								echo "<tr>

										<td>".$key["cod_producto"]."</td>
										<td>".$key["nombre"]."</td>
										<td>".$key["descripcion"]."</td>
										<td>".$key["precio"]."</td>
										<td>".$key["id_categoria"]."</td>
										<td>".$key["estado"]."</td>
										<td><button class='btn btn-warning'><i class='fas fa-pen-square'></i></button> <button class='btn btn-danger'><i class='fas fa-trash'></i></buttom></td>

								</tr>";	
							}


						 ?>
						 	</tbody>

						 	</table>

					</div>


			</div>


	</div>

	<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


 	
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jszip-2.5.0/dt-1.11.3/b-2.1.1/b-colvis-2.1.1/b-html5-2.1.1/b-print-2.1.1/r-2.2.9/datatables.min.js"></script>

	<script src="https://kit.fontawesome.com/815597cc62.js" crossorigin="anonymous"></script>


	<script type="text/javascript">
		$(document).ready(function() {
			$('#table-productos').DataTable({
				responsive: true
			});
		} );
	</script>
</body>
</html>