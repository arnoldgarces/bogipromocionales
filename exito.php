<?php require_once('Connections/conexion.php'); 
mysql_select_db($database_conexion, $conexion);
$query_SacarListado = "SELECT * FROM producto ORDER BY fecha DESC LIMIT 1";
$SacarListado = mysql_query($query_SacarListado, $conexion) or die(mysql_error());
$row = mysql_fetch_array($SacarListado);
?>
<head>
<title>Agregar Productos - Bogi</title>
<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
<link rel="stylesheet" type="text/css" href="css/estilos.css"/>
<link href='http://fonts.googleapis.com/css?family=Istok+Web:400,700' rel='stylesheet' type='text/css'>
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
</header>
<div id="ver_producto">
<div id="tittle_h"><center>Producto Agregado con Exito, puede verlo  Aqui: <a href="ver_producto.php?date=<?php echo $row['id']; ?>"><?php echo $row['titulo']; ?></a></center>
</div>
<div id="footer">
    BOGI - Articulos Publicitarios S.A.S 2016. Todos los derechos reservados pagina web diseñada por: Arnold Garces Si eres Administrador Ingresa <a href="<?php echo $urlweb ?>login.php">Aqui</a>
    </div>
</body>
</html>