<?php 
include("function.php");
$id=$_GET['id_actividad'];
delete('mecanico_actividad','id_actividad',$id);
header("location: tareas.php");
?>