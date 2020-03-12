<?php
$conexion = mysqli_connect("localhost", "root", "", "mazda");
$id_servicio=$_POST['id_servicio'];
$tipo_s =$_POST['tipo_s']; 
$descrip = $_POST['descrip'];
$fecha_e = $_POST['fecha_e'];
$fecha_s= $_POST['fecha_s'];
$factura= $_POST['factura'];
$garantia= $_POST['garantia'];
$id_gerente= $_POST['id_gerente'];
$id_automovil= $_POST['id_automovil'];

$sql="UPDATE servicio SET tipo_servicio = '$tipo_s', descripcion = '$descrip', fecha_entrega = '$fecha_e', fecha_salida = '$fecha_s', factura = '$factura',
 garantia = '$garantia', id_gerente = '$id_gerente', id_automovil = '$id_automovil'
	  WHERE id_servicio = '$id_servicio'";
	  
if (mysqli_query($conexion,$sql)) {
	header("Location: servicio.php");
}else{
	echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);
?>