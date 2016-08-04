<?php	require_once('Connections/conexion.php'); 
$image = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
$titulo = $_POST['titulo'];
$Id = $_SESSION['MM_Id'];
$insertSQL = "INSERT INTO novedades (nombre, imagen, autor) VALUES ('$titulo', '$image', '$Id')";

  mysql_select_db($database_conexion, $conexion);
  $Result1 = mysql_query($insertSQL, $conexion) or die(mysql_error());

  $insertGoTo = "index.php";

  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
	echo'<script>alert("Ha agregado la novedad con exito")</script>';
	header(sprintf("Location: %s", $insertGoTo));
 ?>