<?php
//JELSYN 3-04-19 10pm
	class Productos{

		private $id_producto;
		private $name;
		private $cantidad;
		private $precio_compra;
		private $precio_venta;
		private $url_img;
		private $categoria_id;
		private $date;

		public function __construct($id_producto,
					$name,
					$cantidad,
					$precio_compra,
					$precio_venta,
					$url_img,
					$categoria_id,
					$date){
			$this->id = $id_producto;
			$this->name = $name;
			$this->cantidad = $cantidad;
			$this->precio_compra = $precio_compra;
			$this->precio_venta = $precio_venta;
			$this->url_img = $url_img;
			$this->categoria_id = $categoria_id;
			$this->date = $date;
		}
		public function getId(){
			return $this->id_producto;
		}
		public function setId($id_producto){
			$this->id = $id_producto;
		}
		public function getName(){
			return $this->name;
		}
		public function setName($name){
			$this->name = $name;
		}
		public function getCantidad(){
			return $this->cantidad;
		}
		public function setCantidad($cantidad){
			$this->cantidad = $cantidad;
		}
		public function getPrecio_compra(){
			return $this->precio_compra;
		}
		public function setPrecio_compra($precio_compra){
			$this->precio_compra = $precio_compra;
		}
		public function getPrecio_venta(){
			return $this->precio_venta;
		}
		public function setPrecio_venta($precio_venta){
			$this->precio_venta = $precio_venta;
		}
		public function getUrl_img(){
			return $this->url_img;
		}
		public function setUrl_img($url_img){
			$this->url_img = $url_img;
		}
		public function getCategoria_id(){
			return $this->categoria_id;
		}
		public function setCategoria_id($categoria_id){
			$this->categoria_id = $categoria_id;
		}
		public function getDate(){
			return $this->date;
		}
		public function setDate($date){
			$this->date = $date;
		}
		public function __toString(){
			return "Id: " . $this->id_producto . 
				" Name: " . $this->name . 
				" Cantidad: " . $this->cantidad . 
				" Precio_compra: " . $this->precio_compra . 
				" Precio_venta: " . $this->precio_venta . 
				" Url_img: " . $this->url_img . 
				" Categoria_id: " . $this->categoria_id . 
				" Date: " . $this->date;
		}

		public static function obtenerProductos($conexion){
			$resultado = $conexion->ejecutarConsulta(
				'SELECT a.id_producto, a.name, a.precio_venta, a.url_img, a.cantidad
				FROM productos a 
				INNER JOIN categorias b 
				ON(a.categoria_id = b.categoria_id)'
			);

			while (($fila = $conexion->obtenerFila($resultado))){
					echo '<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">';
					//echo "<img src =".$fila['url_img']." width='260' height='200'>";
					echo '	<div class="well">';
					echo '	<img src="'.$fila["url_img"].'"width="260" height="200" class="img-responsive" >';
					echo '	<b>Nombre: </b>'.$fila["name"].' <br>';
					echo '	<b>Precio: </b>Lps '.$fila["precio_venta"].'<br> ';
					echo '	<b>Cantidad Existente: </b>'.$fila["cantidad"].'<br> ';
					//echo '<br><button type="button" style="font-size:24px" class="fa fa-trash-o" onclick="eliminarProducto('.$fila["id_producto"].')"></button>';
					//echo '<button type="button" style="font-size:24px" class="fa fa-pencil" onclick="seleccionarProducto('.$fila["id_producto"].')"</button>';
					echo '	</div>';
					echo '</div>';
/*
					$resultado = $conexion->ejecutarConsulta(
				'SELECT a.id_producto, a.name, a.cantidad, 
						a.precio_venta,a.url_img, b.categoria_id						
				FROM productos a
				INNER JOIN categoria_id b 
				ON (a.categoria_id = b.categoria_id)'
			);

					*/
			}
		}

		
		/*public static function obtenerDetalleProductos($conexion,$id_producto){
			$resultado = $conexion->ejecutarConsulta(
				sprintf(
					'SELECT a.id_producto, a.name, a.precio_venta, a.url_img, a.cantidad
						FROM productos a 
						INNER JOIN categorias b 
						ON(a.categoria_id = b.categoria_id)',
					$conexion->antiInyeccion($id_producto)
				)
			);

			$fila = $conexion->obtenerFila($resultado);
			

			/*$resultado = $conexion->ejecutarConsulta(
				sprintf(
					'SELECT categoria_id
					FROM categorias 
					WHERE id_producto = %s',
					$conexion->antiInyeccion($id_producto)
				)
			);

			$categorias = array();
			while(($filaCategoria = $conexion->obtenerFila($resultado))){
			$categorias[]=$filaCategoria;
			}

			$fila["categorias"] = $categorias;
			echo json_encode($fila);
		}*/
	}
?>