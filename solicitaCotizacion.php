<?php require_once('Connections/conexion.php'); 
$destinatario = "comercial@bogipromocionales.com"; 
$asunto = "He Realizado una nueva cotizacion!"; 
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
	<div id="ver_producto">
    <div id="tittle_h"><center>AGREGAR PRODUCTOS</center></div><br>
	<center>Le recomendamos agregar todos los campos, para que la informacion quede completa</center>
    <div id="cacategoria" style="float:left"><?php include("inc/categorias.php"); ?></div>
	
    <form name="frmContacto" method="post" action="sendbymail.php">
	  <table align="center">
		<tr>
			<td><label for="first_name">Nombre: *</label></td>
			<td><input type="text" name="first_name" maxlength="50" size="25"></td>
		</tr>
		<tr>
			<td valign="top"><label for="last_name">Apellido: *</label></td>
			<td><input type="text" name="last_name" maxlength="50" size="25"></td>
		</tr>
		<tr>
			<td><label for="email">Dirección de E-mail: *</label></td>
			<td><input type="text" name="email" maxlength="80" size="35"></td>
		</tr>
        <tr>
			<td><label for="telephone">Número de teléfono:</label></td>
			<td><input type="text" name="telephone" maxlength="25" size="15"></td>
		</tr>
		<tr>
			<td><label for="comments">Comentarios: *</label></td>
			<td><textarea name="comments" maxlength="500" cols="30" rows="5"></textarea></td>
		</tr>
		<tr>
		<td colspan="2" style="text-align:right"><input type="submit" value="Enviar"></td>
		</tr>
	  </table>
    </form>
    
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