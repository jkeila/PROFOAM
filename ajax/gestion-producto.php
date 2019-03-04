<?php
   include ('../includes/conexion.php');
   $conexion  = new Conexion();
   switch ($_GET["accion"]) {
         case 'obtenerImg':
         include("../class/class-img.php");
         Products::obtenerImg($conexion);
         break;
         echo "Algo anda mal";
         break;
   	default:
   		# code...
   		break;
   }
   
?>
