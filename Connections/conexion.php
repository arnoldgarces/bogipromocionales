<?php
if(!isset($_SESSION)){
	session_start();
}

$environment = "production.php";

include ($environment);

$conexion = mysql_pconnect($hostname_conexion, $username_conexion, $password_conexion) or trigger_error(mysql_error(),E_USER_ERROR); 
?>

<?php if (is_file("inc/funciones.php")){
	
include ("inc/funciones.php");
}
else{
	include("../inc/funciones.php");
}
?>