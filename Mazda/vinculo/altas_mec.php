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
$nombre=$_POST['nombre'];
$apellido_p=$_POST['apellido_p'];
$apellido_m=$_POST['apellido_m'];
$correo=$_POST['correo'];
$pass=$_POST['pass'];
$telefono=$_POST['telefono'];
$id_jefe_taller=$_POST['id_jefe_taller'];
$id_cliente=$_POST['id_cliente'];


$sql = "INSERT INTO mecanico (nombre, apellido_p, apellido_m, correo, pass, telefono, id_jefe_taller, id_cliente) VALUES ('$nombre', '$apellido_p', '$apellido_m', '$correo', '$pass', '$telefono', '$id_jefe_taller', '$id_cliente')";
if (mysqli_query($conn, $sql)) {
      header("Location: mecanico.php");
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>