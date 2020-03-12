<?php
$conexion = mysqli_connect("localhost", "root", "", "mazda");
$id_jefe_taller=$_POST['id_jefe_taller'];
$nom =$_POST['nom']; 
$apellido_p = $_POST['apellido_p'];
$apellido_m = $_POST['apellido_m'];
$correo= $_POST['correo'];
$pass= $_POST['pass'];
$telefono= $_POST['telefono'];
$id_gerente= $_POST['id_gerente'];
$id_mecanico= $_POST['id_mecanico'];

var_dump($telefono);

$sql="UPDATE jefe_taller SET nombre = '$nom', apellido_p = '$apellido_p', apellido_m = '$apellido_m', correo = '$correo', pass = '$pass',
 telefono = '$telefono', id_gerente = '$id_gerente', id_mecanico = '$id_mecanico'
	  WHERE id_jefe_taller = '$id_jefe_taller'";
	  
if (mysqli_query($conexion,$sql)) {
	header("Location: empleados.php");
}else{
	echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);
?>