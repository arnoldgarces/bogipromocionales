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
<header id="main-header">
<a id="Whatsapp-header" href="#">
    <span class="site-name">Bienvenido: <br /><?php  echo $_SESSION['MM_Username']?></span>
    </a>
	<nav>
		<ul>
			<li><a href="<?php echo $urlweb ?>agregarnovedades.php">Agregar Novedades</a></li>
			<li><a href="<?php echo $urlweb ?>agregar.php">Agregar Productos</a></li>
      		<li><a title="Productos" href="<?php echo $urlweb ?>productos.php?date=0">Editar Productos</a></li>
       	    <li><a title="Cotizaciones" href="#">Eliminar Productos</a></li>
			<li><a title="Acerca de nosotros" href="<?php echo $urlweb ?>/logout.php">Salir</a></li>
		</ul>
	</nav><!-- / nav -->


</header><!-- / #main-header -->
    <div id="logo"><center><a href="<?php echo $urlweb ?>"><img src="img/BOGI.png" width="50%" height="100%"/></a></center></div>
	<div id="rigthh"></div>
    
    <div id="footer">
    BOGI - Articulos Publicitarios S.A.S 2016. Todos los derechos reservados pagina web diseñada por: Arnold Garces Si eres Administrador Ingresa <a href="<?php echo $urlweb ?>login.php">Aqui</a>
    </div>
</body>
</html>