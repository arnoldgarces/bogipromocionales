<?php require_once('Connections/conexion.php'); 
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
	<meta name="keywords" itemprop="keywords" content="articulos promocionales,gorras publicitarias,llaveros publicitarios,esferos promocionales,mugs publicitarios,camisetas estampadas,articulos promocionales para ferias,material pop, publicidad">
</head>

<body>
<header id="main-header"><?php include("inc/header.php"); ?></header><!-- / #main-header -->
    <div id="logo"><center><a href="<?php echo $urlweb ?>"><img src="img/BOGI.png" width="50%" height="100%"/></a></center></div>
  	<div id="leftt"><?php include("inc/buscador.php"); ?>
	<?php include("inc/categorias.php"); ?> </div> 
<div id="rigthh"><?php include("inc/rebus.php"); ?><br />
<br />
<br />
<br />
</div>
    
    <div id="footer">
    BOGI - Articulos Publicitarios S.A.S 2016. Todos los derechos reservados pagina web diseñada por: Arnold Garces Si eres Administrador Ingresa <a href="<?php echo $urlweb ?>login.php">Aqui</a>
    </div>
</body>
</html>