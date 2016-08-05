<?php require_once('Connections/conexion.php'); 
mysql_select_db($database_conexion, $conexion);
$query_SacarListado = "SELECT * FROM producto ORDER BY fecha DESC LIMIT 1";
$SacarListado = mysql_query($query_SacarListado, $conexion) or die(mysql_error());
$row = mysql_fetch_array($SacarListado);
?>
<head>
<title>Cambios realizados con exito</title>
<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
<link rel="stylesheet" type="text/css" href="css/estilos.css"/>
<link href='http://fonts.googleapis.com/css?family=Istok+Web:400,700' rel='stylesheet' type='text/css'>
</head>

<body>
<header id="main-header"><?php include("inc/header.php"); ?></header><!-- / #main-header -->
<div id="ver_producto">
<div id="tittle_h"><center>Producto Agregado/Editado con Exito</a></center>
</div>
    
	 <?php 

		if (isset ($_SESSION['MM_Id'])){
					?>
        			<div id="footer-admin">
        			<?php
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

    </div>
</body>
</html>