<?php
$conexion = mysqli_connect("localhost", "root", "", "mazda");
$id_actividad=$_POST['id_actividad'];
$nom_jefe =$_POST['nom_jefe']; 
$apellido_jefe = $_POST['apellido_jefe'];
$nom_mec = $_POST['nom_mec'];
$apellido_mec= $_POST['apellido_mec'];
$tareas= $_POST['tareas'];

$sql="UPDATE mecanico_actividad SET nombre_jefe = '$nom_jefe', apellido_jefe = '$apellido_jefe', tarea = '$tareas', nombre_mec = '$nom_mec', apellido_mec = '$apellido_mec'
	  WHERE id_actividad = '$id_actividad'";
	  
if (mysqli_query($conexion,$sql)) {
	header("Location: tareas.php");
}else{
	echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);
?>