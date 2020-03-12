<?php
 session_start();//Mandar a llamar a session para poder enviar la variable a  otras páginas del documento
 $d=rand(100000,1000000);//Generar un número aleatorio y guardarlo en una variable 
 $_SESSION['d']=$d;//Indicar por medio de la variable session que variable mandaremos y asignar el valor del número generado con random
$guardame = fopen('acc.bat','a+');//Indicar en que formato guardaremos el número random generado
$encriptado = base64_encode($d);//Después encriptar el random generado en base64 y guardarlo en una variable
fwrite($guardame,$encriptado);//Por medio de fwrite se guardara el archivo encriptado
fclose($guardame);//Se cerrara la escritura del archivo
header("Location: validado.php");//Llamamos a la siguientes página
                       
// Los archivos .bat los genera dentro de la misma carpeta de random
?>