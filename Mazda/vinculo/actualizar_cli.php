<?php
$conexion = mysqli_connect("localhost", "root", "", "mazda");
$id_cliente=$_POST['id_cliente'];
$nom =$_POST['nom']; 
$apellido_p = $_POST['apellido_p'];
$apellido_m= $_POST['apellido_m'];
$correo= $_POST['correo'];
$telefono = $_POST['telefono'];
$edad= $_POST['edad'];
$direccion= $_POST['direccion'];
$garantia= $_POST['garantia'];
$id_mecanico= $_POST['id_mecanico'];
$id_automovil= $_POST['id_automovil'];


$sql="UPDATE cliente SET nombre = '$nom', apellido_p = '$apellido_p', apellido_m = '$apellido_m', correo = '$correo', telefono = '$telefono', 
edad = '$edad', direccion = '$direccion', garantia = '$garantia', id_mecanico = '$id_mecanico', id_automovil = '$id_automovil'
      WHERE id_cliente = '$id_cliente'";
if (mysqli_query($conexion,$sql)) {
	header("Location: sesion_admin_clientes.php");
}else{
	echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);
?>