<?php
$catproducto= $_GET['date'];
mysql_select_db($database_conexion, $conexion);
$query_SacarListado = "SELECT * FROM producto WHERE categoria='$catproducto' ORDER BY fecha";
$SacarListado = mysql_query($query_SacarListado, $conexion) or die(mysql_error());
?>
<?php while ($row = mysql_fetch_array($SacarListado)) { ?>

  <a id="vistaprepro" href="ver_producto.php?date=<?php echo $row['id']; ?>">
  <div id="fotopr"><center><img height="180px" width="180px" src="data:image/jpg;base64,<?php echo base64_encode($row['foto']); ?>"</center></div>
    <div id="tittle_h"><center><?php echo $row['titulo']; ?></center></div>
    <div id="post_info">
    	<strong>Materiales: </strong><?php echo $row['materiales']; ?><br />

		<strong>Colores: </strong><?php echo $row['colores']; ?>
    </div>

</a>
 
  <?php } 
?>