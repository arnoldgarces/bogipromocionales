<?php require_once('Connections/conexion.php'); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Acerca de Bogi - Articulos Publicitarios.</title>
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
	<link rel="stylesheet" type="text/css" href="css/estilos.css"/>
	<link href='http://fonts.googleapis.com/css?family=Istok+Web:400,700' rel='stylesheet' type='text/css'>
	<meta name="description" itemprop="description" content="Articulos promocionales: llaveros, mugs, gorras, esferos, camisetas y mucho más!">
	<meta name="keywords" itemprop="keywords" content="articulos promocionales,gorras publicitarias,llaveros publicitarios,esferos promocionales,mugs publicitarios,camisetas estampadas,articulos promocionales para ferias,material pop, publicidad">
</head>

<body>
<header id="main-header"><?php include("inc/header.php"); ?></header><!-- / #main-header -->
    <div id="logo"><center><a href="<?php echo $urlweb ?>"><img src="img/BOGI.png" width="50%" height="100%"/></a></center></div>
	<div id="misionyvision">
	<div id="tittle_h"><center><h1>MISION</h1></div><br />

    BOGI ARTICULOS PUBLICITARIOS S.A.S somos una compañía enfocada en la comercialización de artículos publicitarios y/o promocionales, dirigida a todas aquellas personas emprendedoras y empresas que quieren dar a conocer y/o reforzar su marca. Para esto BOGI ARTICULOS PUBLICITARIOS S.A.S contamos con los mejores aliados del sector publicitario, comprometidos en brindar una excelente atención de nuestro personal y calidad tanto en sus productos, como en sus procesos de marca hacia nuestros clientes<br />
<br />
<br />
<br />
	<div id="tittle_h"><center><h1>VISION</h1></center></div><br />
    BOGI ARTICULOS PUBLICITARIOS S.A.S queremos consolidarnos como una compañía líder en el sector de los artículos promocionales. Hacia el año 2022 expandiendo su alcance a las principales ciudades del país y aumentando el número de empresas aliadas.
   </div>
    
   
	 <?php 
		?>
        <div id="footer-admin">
        <?php
		if (isset ($_SESSION['MM_Id'])){
			 		include("inc/footeradmin.php");
             }
			 else
			 {
				 	 		?>
        <div id="footer">
        <?php
				include("inc/footer.php");
			 }
			?>

    </div><br />
<br />
</body>
</html>