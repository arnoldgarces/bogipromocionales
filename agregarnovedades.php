<?php require_once('Connections/conexion.php'); 
?>
<title>Agregar Novedades - Bogi</title>
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


</header><!-- / #main-header -->
	<div id="ver_producto">
    <div id="tittle_h"><center>AGREGAR NOVEDAD</center></div><br>
	<center>Le recomendamos agregar todos los campos, para que la informacion quede completa</center>
    <div id="cacategoria" style="float:left"><?php include("inc/categorias.php"); ?></div>
	  <form action="proceso_guardar_novedad.php" method="post" name="form1" id="form1" enctype="multipart/form-data">
        <table align="center">
          <tr valign="baseline">
            <td width="60" align="right" nowrap="nowrap">Nombre de la novedad:</td>
            <td width="531"><input type="text" name="titulo" value="" size="50" /></td>
          </tr>
          <tr bgcolor="skyblue">
            <td bgcolor="skyblue"><strong>Foto:</strong></td><td><input type="file" name="imagen" ></td>
            </tr>
            <tr bgcolor="skyblue">
            </tr>
          <tr valign="baseline">
            <td nowrap="nowrap" align="right">&nbsp;</td>
            <td><input type="submit" value="Agregar" /></td>
          </tr>
        </table>
        <input type="hidden" name="MM_insert" value="form1" />
      </form>
      </div>
    </div>
 <div id="footer">
    BOGI - Articulos Publicitarios S.A.S 2016. Todos los derechos reservados pagina web diseñada por: Arnold Garces Si eres Administrador Ingresa <a href="<?php echo $urlweb ?>login.php">Aqui</a>
    </div>
</body>
</html>