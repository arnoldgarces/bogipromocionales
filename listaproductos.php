<?php require_once('Connections/conexion.php'); 
mysql_select_db($database_conexion, $conexion);
$query_SacarListado = "SELECT * FROM producto ORDER BY fecha DESC LIMIT 20";
$SacarListado = mysql_query($query_SacarListado, $conexion) or die(mysql_error());
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
<div id="rigthh">
<?php while ($row = mysql_fetch_array($SacarListado)) { ?>

  <a id="vistaprepro" href="ver_producto.php?date=<?php echo $row['id']; ?>">
  <div id="fotopr"><center><img height="150px" width="150px" src="data:image/jpg;base64,<?php echo base64_encode($row['foto']); ?>"</center></div>
    <div id="tittle_h"><center><?php echo $row['titulo']; ?></center></div>
    <div id="post_info">
    	<strong>Materiales: </strong><?php echo $row['materiales']; ?><br />

		<strong>Colores: </strong><?php echo $row['colores']; ?>
    </div>
</a>
 
  <?php } 
?>
<br />
<br />
<br />
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

    </div></body>
</html>