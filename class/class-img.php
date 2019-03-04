<?php

	class products{

		private $id;
		private $name;
		private $quantity;
		private $buy_price;
		private $sale_price;
		private $url_img ;
		private $categorie_id;
		//private $media_id;
		private $date ;

		public function __construct($id,
					$name,
					$quantity,
					$buy_price,
					$sale_price,
					$url_img ,
					$categorie_id,
					//$media_id,
					$date ){
			$this->id = $id;
			$this->name = $name;
			$this->quantity = $quantity;
			$this->buy_price = $buy_price;
			$this->sale_price = $sale_price;
			$this->url_img  = $url_img ;
			$this->categorie_id = $categorie_id;
			//$this->media_id = $media_id;
			$this->date  = $date ;
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
		public function getQuantity(){
			return $this->quantity;
		}
		public function setQuantity($quantity){
			$this->quantity = $quantity;
		}
		public function getBuy_price(){
			return $this->buy_price;
		}
		public function setBuy_price($buy_price){
			$this->buy_price = $buy_price;
		}
		public function getSale_price(){
			return $this->sale_price;
		}
		public function setSale_price($sale_price){
			$this->sale_price = $sale_price;
		}
		public function getUrl_img (){
			return $this->url_img ;
		}
		public function setUrl_img ($url_img ){
			$this->url_img  = $url_img ;
		}
		public function getCategorie_id(){
			return $this->categorie_id;
		}
		public function setCategorie_id($categorie_id){
			$this->categorie_id = $categorie_id;
		}
		/*public function getMedia_id(){
			return $this->media_id;
		}
		public function setMedia_id($media_id){
			$this->media_id = $media_id;
		}*/
		public function getDate (){
			return $this->date ;
		}
		public function setDate ($date ){
			$this->date  = $date ;
		}
		public function __toString(){
			return "Id: " . $this->id . 
				" Name: " . $this->name . 
				" Quantity: " . $this->quantity . 
				" Buy_price: " . $this->buy_price . 
				" Sale_price: " . $this->sale_price . 
				" Url_img : " . $this->url_img  . 
				" Categorie_id: " . $this->categorie_id . 
				//" Media_id: " . $this->media_id . 
				" Date : " . $this->date ;
		}

		/*public static function obtenerImg($conexion){
			$resultado = $conexion->ejecutarConsulta('SELECT id, name, quantity, buy_price, sale_price, url_img, categorie_id, media_id, date FROM products');
			
			while(($fila=$conexion->obtenerFila($resultado))){
							echo "<img src =".$fila['url_img']." width='260' height='200'>";
			}
		}*/


		public static function obtenerImg($MySqli_DB){
			$resultado = $MySqli_DB->ejecutarConsulta(
				'SELECT a.id, a.name, a.quantity, a.buy_price, 
						a.sale_price,a.url_img, b.categorie_id
				FROM products a
				INNER JOIN categories b 
				ON (a.categorie_id = b.categorie_id)'
			);

			while (($fila = $MySqli_DB->obtenerFila($resultado))){
					echo '<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">';
					echo '	<div class="well">';
					echo '		<img src="'.$fila["url_img"].'" class="img-responsive">';
					echo '		<b>'.$fila["name"].'</b>';
					echo $fila["buy_price"] . '<br>';
					echo '		Precio: <b>'.$fila["buy_price"].'</b><br>';
					echo '<br><button type="button" onclick="eliminarAplicacion('.$fila["id"].')" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>';
					echo '<button type="button" onclick="modificarAplicacion('.$fila["id"].')" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>';
					echo '	</div>';
					echo '</div>';
			}
		}

	}
?>