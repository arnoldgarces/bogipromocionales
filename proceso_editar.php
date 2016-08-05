<?php	require_once('Connections/conexion.php'); 
$idprod = $_POST['idprod'];
$titulo = $_POST['titulo'];
$contenido = $_POST['contenido'];
$Id = $_SESSION['MM_Id'];
$categoria = $_POST['categoria'];
$medidas = $_POST['medidas'];
$materiales = $_POST['materiales'];
$colores = $_POST['colores'];
echo $_FILES['imagen']['tmp_name'];

if (empty($_FILES['imagen']['tmp_name'])) {
$insertSQL = "UPDATE producto SET titulo='$titulo', contenido='$contenido', autor='$Id', categoria='$categoria', medidas='$medidas', materiales='$materiales', colores='$colores' WHERE id='$idprod'";
}
else{
$image = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
$insertSQL = "UPDATE producto SET titulo='$titulo', contenido='$contenido', autor='$Id', categoria='$categoria', medidas='$medidas', materiales='$materiales', colores='$colores', foto='$image' WHERE id='$idprod'";
}
  mysql_select_db($database_conexion, $conexion);
  $Result1 = mysql_query($insertSQL, $conexion) or die(mysql_error());

  $menexi = "exito.php";
  $produc = $row_SacarproductoGet['id'];

  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
	header(sprintf("Location: %s", $menexi + $produc));
 ?>