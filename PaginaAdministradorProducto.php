<?php 

	//$iconos=array();
	//$archivo = fopen("data/iconos.csv","r");
	//while(!feof($archivo)){
	//	$iconos[] = fgets($archivo);
	//}
	//fclose($archivo);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Pagina Administrador</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<script src="vendor/jquery/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
	<div class="alert alert-success" role="alert">
		<!-- Imprimir en esta seccion las verificaciones.-->
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6">
				<!--- INICIO DEL FORMULARIO -->
				<form action="PaginaAdministradorProducto.php" method="GET">
					<input type="hidden" name="" id="txt-id_producto" class="form-control">
					<table class = "table table-striped table-hover">						
						<!--<tr>
							<td>Nombre del producto:</td>
							<td>
								<input type="text" name="" id="txt-name" class="form-control">
							</td>
						</tr>-->
						<tr>
							<td>Cantidad:</td>
							<td>
								<input type="text" name="" id="txt-cantidad" class="form-control">
							</td>
						</tr><!--
						<tr>
							<td>Precio Compra:</td>
							<td>
								<input type="text" name="" id="txt-precio_compra" class="form-control">
							</td>
						</tr>
						<tr>
							<td>Precio de Venta:</td>
							<td>
								<input type="text" name="" id="txt-precio_venta" class="form-control">
							</td>
						</tr>
						<tr>
							<td>Imagen:</td>
							<td>
								<select name="" id="slc-url-img" class="form-control">
									<?php 
										for($i=0; $i<sizeof($iconos); $i++)
											echo '<option value="'.$iconos[$i].'">'.$iconos[$i].'</option>'
									?>
								</select>
							</td>
						</tr>
						<tr>
							<td>Categoria:</td>
							<td>
								<div id="div-categorias">
									
								</div>
							</td>
						</tr>
						<tr>
							<td>Fecha:</td>
							<td>
								<input type="date" name="" id="txt-fecha-publicacion" class="form-control">
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<input id="btn-guardar" type="button" name="btn-guardar" 
								value="Guardar" class="btn btn-primary">
								<input id="btn-actualizar" type="button" name="btn-actualizar" 
								value="Actualizar" class="btn btn-success" style="display: none;">
								<input type="button" id="btn-limpiar" name="btn-limpiar" 
								value="Limpiar" class="btn btn-warning">
							</td>
						</tr>-->
					</table>
				</form>
				<!--- FIN DEL FORMULARIO -->
				<div id="div-resultado-insert"></div>
				<?php 
				   //include ('../class/class-conexion.php');
				   //include ('../class/class-productos.php');
				  // $conexion = new Conexion();
				   //$sql = "CALL sp_mostrar_datos";
				   //echo $sql;

				 ?>
			</div>
			<!--Listado de las productos-->
			<div class="col-lg-6">
				<div class="row" id="div-imagenes"></div>
			</div>
		</div>
	</div>
	<br><br>
	<hr>
	
	<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="js/imagenes.js"></script>
</body>
</html>