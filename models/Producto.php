<?php



	require_once($_SERVER['DOCUMENT_ROOT']."/carnales/bd/conexion.php");


	class Producto{

		private $cnn;

		function __construct(){

			$conn = new Conexion();
			$this->cnn = $conn->conectar();

		}

		public function insertProduct($producto){
			$sentencia = $this->cnn->prepare("INSERT INTO productos(cod_producto,nombre,precio,descripcion,id_categoria,estado) values(?,?,?,?,?,?)");
			$sentencia->bindParam(1,$producto[0]);
			$sentencia->bindParam(2,$producto[1]);
			$sentencia->bindParam(3,$producto[2]);
			$sentencia->bindParam(4,$producto[3]);
			$sentencia->bindParam(5,$producto[4]);
			$sentencia->bindParam(6,$producto[5]);
			$sentencia->execute();
		}

		public function getAllProducts($id){
			$sentencia = $this->cnn->prepare("SELECT * FROM productos WHERE id_categoria = ?");
			$sentencia->execute([$id]);
			return $sentencia->fetchAll(PDO::FETCH_ASSOC);
		}


		public function getAll($id=1){
			$sentencia = $this->cnn->prepare("SELECT * FROM productos WHERE 1 = ?");
			$sentencia->execute([$id]);
			return $sentencia->fetchAll(PDO::FETCH_ASSOC);
		}





	}