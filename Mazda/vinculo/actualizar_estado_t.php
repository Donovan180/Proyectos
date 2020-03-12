<?php
$conexion = mysqli_connect("localhost", "root", "", "mazda");
$id_actividad=$_POST['id_actividad'];
$estado =$_POST['estado']; 


$sql="UPDATE mecanico_actividad SET estado = '$estado'
	  WHERE id_actividad = '$id_actividad'";
	  
if (mysqli_query($conexion,$sql)) {
	header("Location: tarea_mecanico.php");
}else{
	echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);
?>