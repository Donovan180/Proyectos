<?php 
include("funcion_admin.php");
$id=$_GET['id_gerente'];
delete('gerente','id_gerente',$id);
header("location: admins.php");
?>