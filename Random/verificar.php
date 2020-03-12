<?php 
session_start();
$mandar=$_SESSION['d'];//Capturamos el número random generado desde el principio
$txt=$_POST['txt'];// Capturamos el archivo que subió el usuario donde vendrá el número random encriptado
$fp = fopen($txt, "r");//Por medio de fopen leemos lo que trae el archivo y guardamos en una variable 
if(!feof($fp)) {//Verificamos que contenga algo
	$linea = fgets($fp);//Extraemos el contenido del archivo y lo asignamos a otra variable
	$desencriptado=base64_decode($linea);//Desencriptamos en contenido extraído del archivo

if ($desencriptado==$mandar) {//Comparamos si en realidad es el mismo número random generado al principio
	header("Location: usuario.php");//Si es así iniciara su sesión
}elseif ($desencriptado!=$mandar) {//De lo contrario si el archivo no coincide con lo requerido se negara el acceso y mandara un mensaje de denegación
	echo "Archivo no validado";
}
}
	
?>