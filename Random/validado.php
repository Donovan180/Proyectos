
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
	body{
background: url(6.jpg) no-repeat center center fixed;
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;
}
h6{

	font-family: verdana;
	color: white;
	font-size: 60px;

}
.arch{
	font-family: verdana;
	color: white;
	font-size: 19px;
	border-radius: 3px 3px 3px 3px;
}
.boton{
	font-family: verdana;
	color: white;
	font-size: 19px;
	border-radius: 2x 2px 2px 2px;
}

</style>
<body>
	<center>
<?php 

echo "<h6>Subir archivo de validación</h6>";
session_start();
$mandar=$_SESSION['d'];
?>
	<form method="post" action="verificar.php">
		<input type="file" name="txt" class="arch">
		<a href="verificar.php"><input type="submit" name="botonSubir" class="boton" value="Verificar"></a>
	</form>
</center>
<?php 

?>
</body>
</html>