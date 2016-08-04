<?php
mysql_select_db($database_conexion, $conexion);
$query_SacarListado = "SELECT * FROM novedades ORDER BY fecha DESC LIMIT 2";
$SacarListado = mysql_query($query_SacarListado, $conexion) or die(mysql_error());
?>


<div id="novedades">
<center>A continuacion encontrara la ultima novedad en los productos que ofrecemos, si esta buscando algo en especifico, por favor, utilice el formulario de abajo, o si no en la opcion de Buscar...</center>
<br>
<?php while ($row = mysql_fetch_array($SacarListado)) { ?>
  <div id="fotopr"><center><img height="800px" width="800px" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>"</center></div>
</a>
 
  <?php } 
?>
</div>