<?php require_once('Connections/conexion.php');
	 	if (isset ($_SESSION['MM_Id'])){
	}else
	{
		header("Location: " . $urlweb );		
	}
?>

	<title>Bogi - Administracion.</title>
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
	<link rel="stylesheet" type="text/css" href="css/estilos.css"/>
	<link href='http://fonts.googleapis.com/css?family=Istok+Web:400,700' rel='stylesheet' type='text/css'>
	<meta name="description" itemprop="description" content="Articulos promocionales: llaveros, mugs, gorras, esferos, camisetas y mucho más!">
	<meta name="keywords" itemprop="keywords" content="articulos promocionales,gorras publicitarias,llaveros publicitarios,esferos promocionales,mugs publicitarios,camisetas estampadas,articulos promocionales para ferias,material pop, publicidad">
</head>

<body>
	<header id="main-header"><?php include("inc/header.php"); ?></header><!-- / #main-header -->
    <div id="logo"><center><a href="<?php echo $urlweb ?>"><img src="img/BOGI.png" width="50%" height="100%"/></a></center></div>
	<div id="rigthh"></div>
    
   
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