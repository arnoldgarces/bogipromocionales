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
<title>Editar Productos - Bogi</title>
<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
<link rel="stylesheet" type="text/css" href="css/estilos.css"/>
<link href='http://fonts.googleapis.com/css?family=Istok+Web:400,700' rel='stylesheet' type='text/css'>
</head>

<body>
<header id="main-header"><?php include("inc/header.php"); ?></header><!-- / #main-header --></header><!-- / #main-header -->
	<div id="ver_producto">
    <div id="tittle_h"><center>EDITAR PRODUCTO</center></div><br>
	<center>Le recomendamos agregar todos los campos, para que la informacion quede completa</center>
    <div id="cacategoria" style="float:left"><?php include("inc/categorias.php"); ?></div>
	  <form action="proceso_editar.php" method="post" name="form1" id="form1" enctype="multipart/form-data">
        <table align="center">
          <tr valign="baseline">
            <td width="60" align="right" nowrap="nowrap">Nombre del Producto:</td>
            <td width="531"><input type="text" name="titulo" value="<?php echo $row_SacarproductoGet['titulo']; ?>" size="50" /></td>
          </tr>
          <tr valign="baseline">
            <td height="124" align="right" valign="top" nowrap="nowrap">Descripcion del producto:</td>
            <td><textarea name="contenido" cols="50" rows="20"><?php echo $row_SacarproductoGet['contenido']; ?></textarea></td>
          </tr>
          <tr valign="baseline">
            <td nowrap="nowrap" align="right">Subcategoria:</td>
            <td><select name="categoria">
              <option value="<?php echo $row_SacarproductoGet['categoria']; ?>" selected><?php echo $row_SacarproductoGet['categoria']; ?></option>
              <option value="101">Boligrafo Con resaltador</option>
              <option value="102">Ecologicos</option>
              <option value="103">Estuches Boligrafos</option>
              <option value="104">Lapices</option>
              <option value="105">Metalicos</option>
              <option value="106">Metalicos con stylus</option>
              <option value="107">Plasticos</option>
              <option value="108">Plasticos con Stylus</option>
              <option value="109">Clip Metalico</option>
              <option value="110">Portaminas</option>
              <option value="111">Resaltadores</option>
              <option value="201">Botilitos Deportivos</option>
              <option value="202">Botilitos Metalicos</option>
              <option value="203">Botilitos Plastico</option>
              <option value="204">Botilitos Policarbonato</option>
              <option value="205">Mug Ceramica</option>
              <option value="206">Mug Metalico</option>
              <option value="207">Mug Plastico</option>
              <option value="208">Mug Sublimacion</option>
              <option value="209">Termos</option>
              <option value="210">Vasos y Copas</option>
              <option value="211">Mugs y Botilitos (Produccion Nacional)</option>              
              <option value="301">Golf</option>
              <option value="302">Impermeables y Ponchos</option>
              <option value="303">Lujos</option>
              <option value="304">Mini 21 Pulgadas</option>
              <option value="305">Normales 23 a 30 Pulgadas</option>
              <option value="401">Articulos de escritorio</option>
              <option value="402">Ecologicos</option>
              <option value="403">Libretas</option>
              <option value="404">Memo-stick</option>
              <option value="405">Mouse-Pad</option>
              <option value="406">PortaDocumentos y portafolios</option>
              <option value="407">Portalapices</option>
              <option value="408">Stickies y sets</option>
              <option value="409">Tarjeteros</option>
              <option value="410">Oficina (Produccion Nacional)</option>
              <option value="501">Adaptadores</option>
              <option value="502">Articulos Smartphone</option>
              <option value="503">Tablet y computador</option>
              <option value="504">Audifonos</option>
              <option value="505">Cargadores y pilas recargables</option>
              <option value="506">Organizadores de cables</option>
              <option value="507">Recreacion y aventura</option>
              <option value="508">Selfie Sticks</option>
              <option value="509">Parlantes</option>
              <option value="510">USB memorias</option>
              <option value="511">Tecnologia (Produccion Nacional)</option>
              <option value="601">Articulos de Cocina</option>
              <option value="602">Articulos Hogar</option>
              <option value="603">Articulos para vinos</option>
              <option value="604">Bar</option>
              <option value="605">Cobijas</option>
              <option value="606">Contenedores y portacomidas</option>
              <option value="607">Destapadores</option>
              <option value="608">Fondue</option>
              <option value="609">Setde BBQ</option>
              <option value="610">Set de Quesos</option>
              <option value="611">Hogar (Produccion Nacional)</option>
              <option value="801">Algodon</option>
              <option value="802">Cambrel</option>
              <option value="803">Canguros</option>
              <option value="804">Ejecutivos</option>
              <option value="805">Maletines Deportivos</option>
              <option value="806">Morrales</option>
              <option value="807">Neveras</option>
              <option value="808">Organizador Viajes</option>
              <option value="809">Portapasaporte</option>
              <option value="810">Tulas Deportivas</option>
              <option value="811">Yute</option>              
              <option value="811">Maletines Y Bolsos (Produccion Nacional)</option>
              <option value="901">Cuidado Personal</option>
              <option value="902">Antibacteriales</option>
              <option value="903">Manicure</option>
              <option value="904">Masajeadores</option>
              <option value="905">Pastilleros</option>
              <option value="906">Protectores Solares</option>
              <option value="981">Antiestres</option>
              <option value="982">Alcancias</option>
              <option value="983">Billeteras</option>
              <option value="984">Kits Escolares</option>
              <option value="985">Estuches y Monederos</option>
              <option value="986">Festejo</option>
              <option value="987">Gafas</option>
              <option value="988">Manillas</option>
              <option value="989">Portaretratos</option>
              <option value="990">Ventiladores y abanicos</option>
              <option value="991">Viaje</option>              
              <option value="992">Variedades (Produccion Nacional)</option>              
<option value="999">Relojes Y Calculadoras</option>                                          
              
                          </select></td>
                    </tr>
                    <tr>
                     <td width="60" align="right" nowrap="nowrap">Medidas:</td>
            <td width="531"><input type="text" name="medidas" value="<?php echo $row_SacarproductoGet['medidas']; ?>" size="50" /></td>
            </tr>
               <tr>
                     <td width="60" align="right" nowrap="nowrap">Materiales:</td>
            <td width="531"><input type="text" name="materiales" value="<?php echo $row_SacarproductoGet['materiales']; ?>" size="50" /></td>
            </tr>
                <tr>
                     <td width="60" align="right" nowrap="nowrap">Colores:</td>
            <td width="531"><input type="text" name="colores" value="<?php echo $row_SacarproductoGet['colores']; ?>" size="50" /></td>
            </tr>
		            <tr bgcolor="skyblue">
            <td bgcolor="skyblue"><strong>Foto:</strong></td><td><input type="file" name="imagen" ></td>
            </tr>
            <tr bgcolor="skyblue">
            </tr>
          <tr valign="baseline">
            <td><input type="text" name="idprod" value="<?php echo $row_SacarproductoGet['id']; ?>" hidden ></td>
            <td><input type="submit" value="Editar Producto" /></td>
          </tr>
        </table>
        <input type="hidden" name="MM_insert" value="form1" />
      </form>
      </div>
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