<?php
//JELSYN 3-04-19 10pm
	class Productos{

		private $id;
		private $name;
		private $cantidad;
		private $precio_venta;
		private $url_img;
		private $categoria_id;
		private $date;

		public function __construct($id,
					$name,
					$cantidad,
					$precio_venta,
					$url_img,
					$categoria_id,
					$date){
			$this->id = $id;
			$this->name = $name;
			$this->cantidad = $cantidad;
			$this->precio_venta = $precio_venta;
			$this->url_img = $url_img;
			$this->categoria_id = $categoria_id;
			$this->date = $date;
		}
		public function getId(){
			return $this->id;
		}
		public function setId($id){
			$this->id = $id;
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
			return "Id: " . $this->id . 
				" Name: " . $this->name . 
				" Cantidad: " . $this->cantidad . 
				" Precio_venta: " . $this->precio_venta . 
				" Url_img: " . $this->url_img . 
				" Categoria_id: " . $this->categoria_id . 
				" Date: " . $this->date;
		}

		public static function obtenerProductos($conexion){
			$resultado = $conexion->ejecutarConsulta(
				'SELECT a.id, a.name, a.precio_venta, a.url_img, a.cantidad
				FROM productos a 
				INNER JOIN categorias b 
				ON(a.categoria_id = b.categoria_id)'
			);

			while (($fila = $conexion->obtenerFila($resultado))){
					echo '<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">';
					//echo "<img src =".$fila['url_img']." width='260' height='200'>";
					echo '	<div class="well">';
					echo '	<img src="'.$fila["url_img"].'"width="260" height="200" class="img-responsive" >';
					echo '	Nombre: <b>'.$fila["name"].'</b> <br>';
					echo '	Precio: Lps '.$fila["precio_venta"].'<br> ';
					echo '	Cantidad Existente: '.$fila["cantidad"].'<br> ';
					echo '<br><button type="button" style="font-size:24px" class="fa fa-trash-o" onclick="eliminarAplicacion('.$fila["id"].')"></button>';
					echo '<button type="button" style="font-size:24px" class="fa fa-pencil" onclick="seleccionarAplicacion('.$fila["id"].')"</button>';
					echo '	</div>';
					echo '</div>';
/*
					$resultado = $conexion->ejecutarConsulta(
				'SELECT a.id, a.name, a.cantidad, 
						a.precio_venta,a.url_img, b.categoria_id						
				FROM productos a
				INNER JOIN categoria_id b 
				ON (a.categoria_id = b.categoria_id)'
			);

					*/
			}
		}
	}
?>