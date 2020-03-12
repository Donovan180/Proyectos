<?php
$servername = "localhost";
$database = "mazda";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully";
$nombre=$_POST['nombre_jefe'];
$apellido_p_j=$_POST['apellido_p_jefe'];
$nombre_mec=$_POST['nombre_mec'];
$apellido_p_m=$_POST['apellido_p_m'];
$tarea=$_POST['tareas'];
$estado="Pendiente";
$fechaActual = date('Y-m-d');

$sql = "INSERT INTO mecanico_actividad (nombre_jefe, apellido_jefe, tarea, nombre_mec, apellido_mec, estado, fecha) VALUES ('$nombre', '$apellido_p_j', '$tarea', '$nombre_mec', '$apellido_p_m', '$estado', '$fechaActual')";
if (mysqli_query($conn, $sql)) {
      header("Location: tareas.php");
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>