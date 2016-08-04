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
	<div id="ver_producto">
    <div id="tittle_h"><center>SOLICITA TU COTIZACION</center></div><br>
	<center>Le recomendamos agregar todos los campos, para que la informacion quede completa</center>
    <div id="cacategoria" style="float:left"><?php include("inc/categorias.php"); ?></div>
	  <form action="proceso_guardar.php" method="post" name="form1" id="form1" enctype="multipart/form-data">
        <table align="center">
          <tr valign="baseline">
            <td width="60" align="right" nowrap="nowrap">Nombre:</td>
            <td width="531"><input type="text" name="titulo" value="" size="30" /></td>
          </tr>
          <tr valign="baseline">
            <td width="60" align="right" nowrap="nowrap">Direcion de correo electronico:</td>
            <td width="531"><input type="text" name="titulo" value="" size="30" /></td>
          </tr>
          <tr valign="baseline">
            <td height="124" align="right" valign="top" nowrap="nowrap">Dejanos tu mensaje:</td>
            <td><textarea name="contenido" cols="35" rows="20"></textarea></td>
          </tr>
          <tr valign="baseline">
            <td nowrap="nowrap" align="right">Categoria:</td>
            <td><select name="categoria">
              <option value="101">Bolsos</option>
              <option value="102">Canguros</option>
              <option value="103">Cosmetiqueras</option>
              <option value="104">Estuches varios</option>
              <option value="105">Maletines deportivos</option>
              <option value="106">Maletines ejecutivos</option>
              <option value="107">Manos Libres</option>
              <option value="108">Morrales</option>
              <option value="109">Neveras</option>
              <option value="110">Organizadores de viaje</option>
              <option value="201">Clips</option>
              <option value="202">Escritorio</option>
              <option value="203">Libretas</option>
              <option value="204">Mouse Pad</option>
              <option value="205">Porta Boligrafos</option>
              <option value="206">Porta Carnet</option>
              <option value="207">Porta Celular</option>
              <option value="208">Portafolios</option>
              <option value="209">Resaltadores</option>
              <option value="210">Stickies</option>
              <option value="301">Abanicos</option>
              <option value="302">Abrigos y capas</option>
              <option value="303">Alcancias</option>
              <option value="304">Antiestres</option>
              <option value="305">Apoya cabeza y cobijas</option>
              <option value="306">Billeteras y monederos</option>
              <option value="307">Cartucheras</option>
              <option value="308">Destapadores</option>
              <option value="309">Gafas y estuches</option>
              <option value="310">Llaveros</option>
              <option value="311">Portaretratos</option>
              <option value="312">Protector para auto</option>
              <option value="313">Set de colores</option>
              <option value="314">Silla plegable</option>
              <option value="315">Viaje</option>
                          </select></td>
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