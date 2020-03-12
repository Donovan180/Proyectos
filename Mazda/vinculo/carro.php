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
$num=$_POST['numero'];
$num_m=$_POST['num_m'];
$marca=$_POST['marca'];
$opcion=$_POST['lista'];
$color=$_POST['color'];
$version=$_POST['version'];
$id_cliente=$_POST['id_cliente'];
$id_servicio=$_POST['id_servicio'];

$sql = "INSERT INTO automovil (num_serie, num_motor, marca, modelo, color, version, id_cliente, id_servicio) VALUES ('$num', '$num_m', '$marca', '$opcion','$color','$version','$id_cliente','$id_servicio')";
if (mysqli_query($conn, $sql)) {
      header("Location: sesion_admin.php");
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>