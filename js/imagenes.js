//JELSYN 3-04-19 10pm 
$(document).ready(function(){
  $.ajax({
    url:"ajax/gestion-producto.php?accion=obtenerImgProducto",
    data:"",
    method:"POST",
    success:function(respuesta){
      //alert(respuesta);
      $("#div-imagenes").html(respuesta);
    },
    error:function(e){
      alert("Error "+e);
    }
  });
});