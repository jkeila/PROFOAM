<?php
   include ('../class/conexion.php');
   $conexion  = new Conexion();
   switch ($_GET["accion"]) {
   	include("../class/class-productos.php");
         Productos::obtenerProductos($conexion);         
      break;
   		break;
         case 'obtenerImg':
         include("../class/class-img.php");
         Imagenes::obtenerImg($conexion);
         break;
         echo "Algo anda mal";
         break;
   	default:
   		# code...
   		break;
   }
   
?>