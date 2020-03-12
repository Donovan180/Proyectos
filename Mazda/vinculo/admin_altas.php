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
$nom=$_POST['nom'];
$apellido_p=$_POST['apellido_p'];
$apellido_m=$_POST['apellido_m'];
$correo=$_POST['correo'];
$pass=$_POST['pass'];
$telefono=$_POST['telefono'];
$id_jefe_taller=$_POST['id_jefe_taller'];
$id_servicio=$_POST['id_servicio'];


$sql = "INSERT INTO gerente (nombre, apellido_p, apellido_m, correo, pass, telefono, id_jefe_taller, id_servicio) VALUES ('$nom', '$apellido_p', '$apellido_m', '$correo','$pass','$telefono','$id_jefe_taller','$id_servicio')";
if (mysqli_query($conn, $sql)) {
      header("Location: admins.php");
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>