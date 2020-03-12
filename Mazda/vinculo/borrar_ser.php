<?php 
include("function_ser.php");
$id=$_GET['id_servicio'];
delete('servicio','id_servicio',$id);
header("location: servicio.php");
?>