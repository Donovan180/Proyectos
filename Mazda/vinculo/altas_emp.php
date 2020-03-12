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
$tipo_us="Jefe de Taller";
$id_gerente=$_POST['id_gerente'];
$id_mecanico=$_POST['id_mecanico'];

var_dump($telefono);
$sql = "INSERT INTO jefe_taller (nombre, apellido_p, apellido_m, correo, pass, telefono, id_gerente, id_mecanico, tipo_user) VALUES ('$nombre', '$apellido_p', '$apellido_m', '$correo', '$pass', '$telefono', '$id_gerente', '$id_mecanico', '$tipo_us')";
if (mysqli_query($conn, $sql)) {
      header("Location: empleados.php");
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>