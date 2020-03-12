<?php 
include("function.php");
$id=$_GET['id_cliente'];
delete('cliente','id_cliente',$id);
header("location: sesion_admin_clientes.php");
?>