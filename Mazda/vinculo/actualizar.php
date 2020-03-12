<?php
$conexion = mysqli_connect("localhost", "root", "", "mazda");
$id_automovil=$_POST['id_automovil'];
$num=$_POST['numero'];
$num_m=$_POST['num_m'];
$marca=$_POST['marca'];
$opcion=$_POST['lista'];
$color=$_POST['color'];
$version=$_POST['version'];
$id_cliente=$_POST['id_cliente'];
$id_servicio=$_POST['id_servicio'];


$sql="UPDATE automovil SET num_serie = '$num', num_motor = '$num_m', marca = '$marca', modelo = '$opcion', color = '$color', version = '$version', id_cliente = '$id_cliente', id_servicio = '$id_servicio'
      WHERE id_automovil = '$id_automovil'";
if (mysqli_query($conexion,$sql)) {
	header("Location: sesion_admin.php");
}else{
	echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);
?>