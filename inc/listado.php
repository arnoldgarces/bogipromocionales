<?php
$maxRows_SacarListado = 10;
$pageNum_SacarListado = 0;
if (isset($_GET['pageNum_SacarListado'])) {
  $pageNum_SacarListado = $_GET['pageNum_SacarListado'];
}
$startRow_SacarListado = $pageNum_SacarListado * $maxRows_SacarListado;

mysql_select_db($database_conexion, $conexion);
$query_SacarListado = "SELECT * FROM producto ORDER BY fecha";
$query_limit_SacarListado = sprintf("%s LIMIT %d, %d", $query_SacarListado, $startRow_SacarListado, $maxRows_SacarListado);
$SacarListado = mysql_query($query_limit_SacarListado, $conexion) or die(mysql_error());
$row_SacarListado = mysql_fetch_assoc($SacarListado);

if (isset($_GET['totalRows_SacarListado'])) {
  $totalRows_SacarListado = $_GET['totalRows_SacarListado'];
} else {
  $all_SacarListado = mysql_query($query_SacarListado);
  $totalRows_SacarListado = mysql_num_rows($all_SacarListado);
}
$totalPages_SacarListado = ceil($totalRows_SacarListado/$maxRows_SacarListado)-1;

?>
<?php do { ?>
  <a id="vistaprepro" href="ver_producto.php?date=<?php echo $row_SacarListado['id']; ?>">
  <div id="fotopr"><center><img height="150px" width="150px" src="data:image/jpg;base64,<?php echo base64_encode($row_SacarListado['foto']); ?>"</center></div>
    <div id="tittle_h"><center><?php echo $row_SacarListado['titulo']; ?></center></div>
    <div id="post_info">precio</div>
</a>
  
  <?php } while ($row_SacarListado = mysql_fetch_assoc($SacarListado)); 
mysql_free_result($SacarListado);
?>