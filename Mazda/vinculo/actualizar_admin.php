<?php
$conexion = mysqli_connect("localhost", "root", "", "mazda");
$id_gerente=$_POST['id_gerente'];
$nom =$_POST['nom']; 
$apellido_p = $_POST['apellido_p'];
$apellido_m = $_POST['apellido_m'];
$correo= $_POST['correo'];
$pass= $_POST['pass'];
$telefono= $_POST['telefono'];
$id_jefe_taller= $_POST['id_jefe_taller'];
$id_servicio= $_POST['id_servicio'];

$sql="UPDATE gerente SET nombre = '$nom', apellido_p = '$apellido_p', apellido_m = '$apellido_m', correo = '$correo', pass = '$pass', telefono = '$telefono', id_jefe_taller = '$id_jefe_taller', id_servicio = '$id_servicio'
      WHERE id_gerente = '$id_gerente'";
if (mysqli_query($conexion,$sql)) {
	header("Location: admins.php");
}else{
	echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);
?>