<?php require_once('Connections/conexion.php');
	$idproducto= $_GET['date'];
	
	$updateSQL = sprintf("UPDATE producto SET visitas = visitas +1 WHERE id=%s",
						 GetSQLValueString($idproducto, "int"));
	
	mysql_select_db($database_conexion, $conexion);
	$Result1 = mysql_query($updateSQL, $conexion) or die(mysql_error());
	
	mysql_select_db($database_conexion, $conexion);
	$query_SacarproductoGet = "SELECT * FROM producto WHERE id='$idproducto'";
	$SacarproductoGet = mysql_query($query_SacarproductoGet, $conexion) or die(mysql_error());
	$row_SacarproductoGet = mysql_fetch_assoc($SacarproductoGet);
	$totalRows_SacarproductoGet = mysql_num_rows($SacarproductoGet);
	mysql_free_result($SacarproductoGet);
    ?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Bogi - Articulos Publicitarios.</title>
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
	<link rel="stylesheet" type="text/css" href="css/estilos.css"/>
	<link href='http://fonts.googleapis.com/css?family=Istok+Web:400,700' rel='stylesheet' type='text/css'>
	<meta name="description" itemprop="description" content="Articulos promocionales: llaveros, mugs, gorras, esferos, camisetas y mucho más!">
	<meta name="keywords" itemprop="keywords" content="articulos promocionales,gorras publicitarias,llaveros publicitarios,esferos promocionales,mugs publicitarios,camisetas 	    estampadas,articulos promocionales para ferias,material pop">
</head>

<body>
<header id="main-header"><?php include("inc/header.php"); ?></header><!-- / #main-header -->
	<div id="ver_producto">
    <div id="cacategoria" style="float:left"><?php include("inc/categorias.php"); ?></div>
	<div id="fotospro"><img width="250%" src="data:image/jpg;base64,<?php echo base64_encode($row_SacarproductoGet['foto']); ?>" ></div>
    <div id="infopro><center><div id="tittle_h" style="border-bottom:1px dashed #ccc"><?php echo $row_SacarproductoGet['titulo']; ?></div></center>
    <div id="contenido"><?php echo $row_SacarproductoGet['contenido']; ?></div><br />

 	      <span class="in_txt">Subcategoria: <?php echo $row_SacarproductoGet['categoria']; ?></span>
          <span class="in_txt">Visitas: <?php echo $row_SacarproductoGet['visitas']; ?></span>
      </div>
    </div>
<div id="footer">
    BOGI - Articulos Publicitarios S.A.S 2016. Todos los derechos reservados pagina web diseñada por: Arnold Garces Si eres Administrador Ingresa <a href="<?php echo $urlweb ?>login.php">Aqui</a>
    </div>
    </body>
    </html>