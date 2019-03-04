$(document).ready(function(){
  $.ajax({
    url:"ajax/gestion-producto.php?accion=obtenerImg",
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
//CARGAR IMAGENES