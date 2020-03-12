<?php
session_start();
?>
<?php
$user=$_POST['correo'];
$pass=$_POST['pass'];
$conex=mysqli_connect("localhost", "root", "", "mazda");


$sql_admin= "SELECT * FROM gerente  WHERE correo = '$user' AND pass = '$pass'";
$sql_jefe_taller= "SELECT * FROM jefe_taller  WHERE correo = '$user' AND pass = '$pass'";
$sql_mecanico= "SELECT * FROM mecanico  WHERE correo = '$user' AND pass = '$pass'";

$res=mysqli_query($conex,$sql_admin);
$res2=mysqli_query($conex,$sql_jefe_taller);
$res3=mysqli_query($conex,$sql_mecanico);
$id=mysqli_query($conex,$sql_act);

if (mysqli_num_rows($res)>0) {
	$_SESSION['loggedin'] = true;
    $_SESSION['user'] = $user;
    $_SESSION['start'] = time();
    $_SESSION['expire'] = $_SESSION['start'] + (5 * 60);
    $tipo_user=mysqli_query($conex,"SELECT tipo_user FROM gerente");
    $_SESSION['tipo_user']=$tipo_user;
	header("Location: sesion_admin.php");

}else if(mysqli_num_rows($res2)>0){
	$_SESSION['loggedin'] = true;
    $_SESSION['user'] = $user;
    $_SESSION['start'] = time();
    $_SESSION['expire'] = $_SESSION['start'] + (5 * 60);
 
	header("Location: tareas.php");

}else if(mysqli_num_rows($res3)>0){
	$_SESSION['loggedin'] = true;
    $_SESSION['user'] = $user;
    $_SESSION['start'] = time();
    $_SESSION['expire'] = $_SESSION['start'] + (5 * 60);

	header("Location: tarea_mecanico.php");

}else{
	echo "<script> alert('Datos incorrectos');";
	echo "</script>";
header("Location: ../ingresar.php");
}
mysqli_close($conex);

?>