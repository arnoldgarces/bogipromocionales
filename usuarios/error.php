<?php require_once('../Connections/conexion.php'); 
	if (isset ($_SESSION['MM_Id'])){
	header("Location: " . $urlweb );
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Portablesmax - Comunidad de Downloaders.</title>
<link rel="shortcut icon" type="image/x-icon" href="../img/favicon.ico">
<link rel="stylesheet" type="text/css" href="../css/estilos.css"/>
<link href='http://fonts.googleapis.com/css?family=Istok+Web:400,700' rel='stylesheet' type='text/css'>
</head>

<body>
<div id="principal">
  <div id="head">
    <div id="logo">
      <h1><a href="<?php echo $urlweb ?>"><img src="../img/logo.png" width="342" height="70"/></a></h1>
    </div>
    <div id="add468"><img src="../img/add468.png" width="468" height="60" /></div>
  </div>
    <?php include("../inc/menu.php"); ?>
  <div id="leftt">
<div id="section_l">
    Error de Acceso, <a href="<?php echo $urlweb ?>">volver a intentarlo</a></div>

  </div>
  <div id="rigthh">
  <?php include("../inc/buscador.php"); ?>
  <?php include("../inc/categorias.php"); ?>
  <?php include("../inc/comentarios.php"); ?>
  <?php include("../inc/tags.php"); ?>
  </div>
</div><div id="footer"><div id="txt_fo"><a href="#">Pagina1</a> <a href="#">Pagina2</a> <a href="#">Pagina3</a> <a href="#">Pagina4</a></div>
</div>
</body>
</html>