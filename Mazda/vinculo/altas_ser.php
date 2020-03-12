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
$tipo_s=$_POST['tipo_s'];
$descrip=$_POST['descrip'];
$fecha_e=$_POST['fecha_e'];
$fecha_s=$_POST['fecha_s'];
$factura=$_POST['factura'];
$garantia=$_POST['garantia'];
$id_gerente=$_POST['id_gerente'];
$id_automovil=$_POST['id_automovil'];


$sql = "INSERT INTO servicio (tipo_servicio, descripcion, fecha_entrega, fecha_salida, factura, garantia, id_gerente, id_automovil) VALUES ('$tipo_s', '$descrip', '$fecha_e', '$fecha_s', '$factura', '$garantia', '$id_gerente', '$id_automovil')";
if (mysqli_query($conn, $sql)) {
      header("Location: servicio.php");
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>