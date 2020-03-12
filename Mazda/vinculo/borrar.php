<?php 
include("function.php");
$id=$_GET['num_serie'];
delete('automovil','num_serie',$id);
header("location: sesion_admin.php");
?>