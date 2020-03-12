<?php 
include("function.php");
$id=$_GET['id_mecanico'];
delete('mecanico','id_mecanico',$id);
header("location: mecanico.php");
?>