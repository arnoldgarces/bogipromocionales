<?php require_once('Connections/conexion.php'); 
?>
<title>Agregar Novedades - Bogi</title>
<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
<link rel="stylesheet" type="text/css" href="css/estilos.css"/>
<link href='http://fonts.googleapis.com/css?family=Istok+Web:400,700' rel='stylesheet' type='text/css'>
</head>

<body>
	<header id="main-header"><?php include("inc/header.php"); ?></header><!-- / #main-header -->
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