<?php
$conexion = mysqli_connect("localhost", "root", "", "mazda");
$id_mecanico=$_POST['id_mecanico'];
$nom =$_POST['nom']; 
$apellido_p = $_POST['apellido_p'];
$apellido_m = $_POST['apellido_m'];
$correo= $_POST['correo'];
$pass= $_POST['pass'];
$telefono= $_POST['telefono'];
$id_jefe_taller= $_POST['id_jefe_taller'];
$id_cliente= $_POST['id_cliente'];

$sql="UPDATE mecanico SET nombre = '$nom', apellido_p = '$apellido_p', apellido_m = '$apellido_m', correo = '$correo', pass = '$pass',
 telefono = '$telefono', id_jefe_taller = '$id_jefe_taller', id_cliente = '$id_cliente'
	  WHERE id_mecanico = '$id_mecanico'";
	  
if (mysqli_query($conexion,$sql)) {
	header("Location: mecanico.php");
}else{
	echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);
?>