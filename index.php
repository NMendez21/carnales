<?php

	include("models/Producto.php");	
	$obj = new Producto();

?>

<!DOCTYPE html>
<html prefix="og: https://ogp.me/ns#">
<head>
	<title>Carnales</title>

	<meta charset="UTF-8">

	<meta property="og:title" content="Los Carnales" />
	<meta property="og:type" content="Estructuras metalicas" />
	<meta property="og:image:type" content="/images/carnales.png" />
	<meta property="og:image:width" content="400" />
	<meta property="og:image:height" content="300" />


	<meta name="description" content="Empresa 100% Salvadoreña enfocada en la creacion de estructuras metalicas.">

	<link rel="icon" type="image/png" href="/images/carnales.png" sizes="16x16">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&family=Montserrat&family=Noto+Sans+JP:wght@900&family=Open+Sans&family=Oswald:wght@200;700&family=Raleway:wght@700&family=Recursive&display=swap" rel="stylesheet">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Cuprum:wght@700&display=swap" rel="stylesheet">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand&family=Roboto+Condensed:wght@700&display=swap" rel="stylesheet">

	<script src="https://code.jquery.com/jquery-3.6.0.js"
	  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
	  crossorigin="anonymous"></script>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@900&family=Lora:wght@521&family=Open+Sans+Condensed:wght@700&family=Smooch&family=Staatliches&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="assets/style.css"></link>


	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-192915241-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-192915241-1');
	</script>

</head>
<body>


	<div class="heading">
		

		<!--<div class="future"></div>-->
		<div class="logo"><img src="https://carnales-sv.000webhostapp.com/images/carnales.png"></div>

		<div class="menu">
			<?php $productos = $obj->getAllProducts(1); if(count($productos)) { ?><div><a href="#mesas">Mesas</a></div><?php } ?>
			<?php $productos = $obj->getAllProducts(2); if(count($productos)) { ?><div><a href="#bancos">Bancos</a></div><?php } ?>
			<?php $productos = $obj->getAllProducts(3); if(count($productos)) { ?><div><a href="#navidenos">Navideños</a></div><?php } ?>
			<?php $productos = $obj->getAllProducts(4); if(count($productos)) { ?><div><a href="#escritorios">Escritorios</a></div><?php } ?>
			<?php $productos = $obj->getAllProducts(5); if(count($productos)) { ?><div><a href="#macetas">Macetas</a></div><?php } ?>
			<?php $productos = $obj->getAllProducts(6); if(count($productos)) { ?><div><a href="#decorativas">Decorativas</a></div><?php } ?>
		</div>
		

	</div>

	<div class="carrusel__section">
		<div class="carrusel__text">
			
			<div class="title">DECORA TU HOGAR AL ESTILO DE LOS CARNALES</div>

			<div><button class="botones"><a href="sendMessage.php">COTIZAR <i class="fas fa-location-arrow"></i></a></button></div>
		</div>

		<div class="carrusel">
			<div><img src="https://carnales-sv.000webhostapp.com/images/products/7-1.jpeg"></div>
			<div><img src="https://carnales-sv.000webhostapp.com/images/products/3.jpeg"></div>
			<div><img src="https://carnales-sv.000webhostapp.com/images/products/8.jpeg"></div>
		</div>
	</div>

	<div class="about-us">
		
		<div class="about-us__info">
			
			<div class="info__principal">
				
				<div class="title">Sobre nosotros</div>

				<div>Proyecto familiar iniciado en el año 2020, con el fin de ofrecer productos 100% salvadoreños. Carnales te ofrece calidad, durabilidad, eficiencia, excelentes tiempos de entrega. Diseñamos para ti estructuras personalizadas con originalidad propia o pon tu diseño y nosotros te lo creamos. Animate a conocer sobre nuestros productos y como puedes hacer tus pedidos presionando el siguiente boton.</div>


			</div>

			<div class="info__boton">
				
				<button class="botones"><a href="sendMessage.php">COTIZAR <i class="fas fa-location-arrow"></i></a></button>

			</div>

			
		</div>


		<div class="about-us__image"><img src="https://carnales-sv.000webhostapp.com/images/products/mesa.jpg"></div>
	</div>

	<div class="section__title "><div class="title">CATALOGO</div></div>

	<?php $productos = $obj->getAllProducts(1); if(count($productos)){ ?>
	<div class="title-secundary" id="mesas">MESAS</div>

	<div class="products">

		<?php 

			

			
			
			foreach($productos as $producto){
				
		?>

		<div class="carts cart1"><div class="cart__title"><?=$producto['nombre']?></div><div class="cart__image"><img src="https://carnales-sv.000webhostapp.com/images/products/<?= $producto['cod_producto'] ?>.jpeg"></div><div class="cart__footer"><div class="cart__description"><?= $producto['descripcion'] ?></div><div class="cart__price">$<?= $producto['precio'] ?></div></div></div>
		

		<?php
				
			}

		?>
	</div>

	<?php } ?>

	<?php $productos = $obj->getAllProducts(2); if(count($productos)){ ?>
	<div class="title-secundary" id="bancos">BANCOS</div>

	<div class="products">

		<?php 

			

			
			
			foreach($productos as $producto){
				
		?>

		<div class="carts cart1"><div class="cart__title"><?=$producto['nombre']?></div><div class="cart__image"><img src="https://carnales-sv.000webhostapp.com/images/products/<?= $producto['cod_producto'] ?>.jpeg"></div><div class="cart__footer"><div class="cart__description"><?= $producto['descripcion'] ?></div><div class="cart__price">$<?= $producto['precio'] ?></div></div></div>
		

		<?php
				
			}

		?>
	</div>

	<?php } ?>

	<?php $productos = $obj->getAllProducts(3); if(count($productos)){ ?>
	<div class="title-secundary" id="navidenos">NAVIDEÑOS</div>

	<div class="products">

		<?php 

			

			
			
			foreach($productos as $producto){
				
		?>

		<div class="carts cart1"><div class="cart__title"><?=$producto['nombre']?></div><div class="cart__image"><img src="https://carnales-sv.000webhostapp.com/images/products/<?= $producto['cod_producto'] ?>.jpeg"></div><div class="cart__footer"><div class="cart__description"><?= $producto['descripcion'] ?></div><div class="cart__price">$<?= $producto['precio'] ?></div></div></div>
		

		<?php
				
			}

		?>
	</div>

	<?php } ?>

	<?php $productos = $obj->getAllProducts(4); if(count($productos)){ ?>
	<div class="title-secundary" id="escritorios">ESCRITORIOS</div>

	<div class="products">

		<?php 

			

			
			
			foreach($productos as $producto){
				
		?>

		<div class="carts cart1"><div class="cart__title"><?=$producto['nombre']?></div><div class="cart__image"><img src="https://carnales-sv.000webhostapp.com/images/products/<?= $producto['cod_producto'] ?>.jpeg"></div><div class="cart__footer"><div class="cart__description"><?= $producto['descripcion'] ?></div><div class="cart__price">$<?= $producto['precio'] ?></div></div></div>
		

		<?php
				
			}

		?>
	</div>

	<?php } ?>


	<?php $productos = $obj->getAllProducts(5); if(count($productos)){ ?>
	<div class="title-secundary" id="macetas">MACETAS</div>

	<div class="products">

		<?php 

			

			
			
			foreach($productos as $producto){
				
		?>

		<div class="carts cart1"><div class="cart__title"><?=$producto['nombre']?></div><div class="cart__image"><img src="https://carnales-sv.000webhostapp.com/images/products/<?= $producto['cod_producto'] ?>.jpeg"></div><div class="cart__footer"><div class="cart__description"><?= $producto['descripcion'] ?></div><div class="cart__price">$<?= $producto['precio'] ?></div></div></div>
		

		<?php
				
			}

		?>
	</div>

	<?php } ?>

	<?php $productos = $obj->getAllProducts(6); if(count($productos)){ ?>
	<div class="title-secundary" id="decorativas">ESTRUCTURAS DECORATIVAS</div>

	<div class="products">

		<?php 

			

			
			
			foreach($productos as $producto){
				
		?>

		<div class="carts cart1"><div class="cart__title"><?=$producto['nombre']?></div><div class="cart__image"><img src="https://carnales-sv.000webhostapp.com/images/products/<?= $producto['cod_producto'] ?>.jpeg"></div><div class="cart__footer"><div class="cart__description"><?= $producto['descripcion'] ?></div><div class="cart__price">$<?= $producto['precio'] ?></div></div></div>
		

		<?php
				
			}

		?>
	</div>

	<?php } ?>

	

	<div class="form__contact" style="display: none;">
		
		<div class="form">
			
			<form method="post" action="sendMessage.php">


				<table>
					
					<tr>
						<th>
							<label>Nombre</label><br>
							<input type="text" class="cajon__texto" name="txtNombre" id="txtNombre" />

							<br>
							<br>

							<label>Telefono</label><br>
							<input type="text" class="cajon__texto" name="txtTelefono" id="txtTelefono" />

							<br>
							<br>

							<label>¿Qué deseas realizar?</label><br>
							<textarea type="text" rows="8" class="cajon__area" name="txtDeseo" id="txtDeseo">
							</textarea>
							<br>
							<button class="botones">ENVIAR</button>
						</th>
						
							
							

						
						<th></th>

					</tr>

				</table>
				
				

			</form>


		</div>
		<div class="brand">
				
				<img src="/images/carnales.png">


		</div>
		

	</div>


	<footer>
		
		<!--<h2>Derechos reservados Carnales SA DE CV</h2>-->
		<div>Desarrollado por NicoDev</div>

	</footer>


	<script>
		document.addEventListener( 'DOMContentLoaded', function () {
			new Splide( '.splide' ).mount();
		} );
	</script>

	<script src="https://kit.fontawesome.com/815597cc62.js" crossorigin="anonymous"></script>
</body>
</html>