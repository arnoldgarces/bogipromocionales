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
    	<div id="infopro">
        	<table align="center">
    	    <tr valign="baseline">
        	<br /><center><div id="tittle_h" style="border-bottom:1px dashed #ccc"><?php echo $row_SacarproductoGet['titulo']; ?></div></center>
	        </tr>
    	    <tr><td><br /><div id="contenido"><strong>Descripcion: </strong></td><td><?php echo $row_SacarproductoGet['contenido']; ?> </div></td></tr>
	        <tr><td><span class="in_txt"><strong>Subcategoria: </strong></td><td><?php echo $row_SacarproductoGet['categoria']; ?></span></td></tr>
   	        <tr><td><span class="in_txt"><strong>Medidas: </strong></td><td><?php echo $row_SacarproductoGet['medidas']; ?></span></td></tr>
  	        <tr><td><span class="in_txt"><strong>Materiales:</strong></td><td><?php echo $row_SacarproductoGet['materiales']; ?></span></td></tr>
	        <tr><td><span class="in_txt"><strong>Colores: </strong></td><td><?php echo $row_SacarproductoGet['colores']; ?></span></td></tr>
            <tr><td><span class="in_txt"><strong>Visitas: </strong></td><td><?php echo $row_SacarproductoGet['visitas']; ?></span></td></tr>
            <?php 
				if (isset ($_SESSION['MM_Id'])){
			 ?>
             <tr><td><a href="editarproductos.php?date=<?php echo $row_SacarproductoGet['id']; ?>">EDITAR ESTE PRODUCTO</a></td></tr>
             <?php
	}		
			?>
             </table><br />
	    </div>
     </div>
    </div>
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

    </div>
</body>
    </html>