<?php 
include("function.php");
$id=$_GET['id_jefe_taller'];
delete('jefe_taller','id_jefe_taller',$id);
header("location: empleados.php");
?>