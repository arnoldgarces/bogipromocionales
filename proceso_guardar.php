<?php	require_once('Connections/conexion.php'); 
$image = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
$titulo = $_POST['titulo'];
$contenido = $_POST['contenido'];
$Id = $_SESSION['MM_Id'];
$categoria = $_POST['categoria'];
$medidas = $_POST['medidas'];
$materiales = $_POST['materiales'];
$colores = $_POST['colores'];
$insertSQL = "INSERT INTO producto (titulo, contenido, autor, categoria, medidas, materiales, colores, foto) VALUES ('$titulo', '$contenido', '$Id', '$categoria', '$medidas','$materiales','$colores','$image')";

  mysql_select_db($database_conexion, $conexion);
  $Result1 = mysql_query($insertSQL, $conexion) or die(mysql_error());

  $insertGoTo = "exito.php";

  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
	echo'<script>alert("Ha agregado el producto con exito")</script>';
	header(sprintf("Location: %s", $insertGoTo));
 ?>