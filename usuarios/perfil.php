<?php require_once('../Connections/conexion.php'); 

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form2")) {
  $updateSQL = sprintf("UPDATE usuarios SET password=%s, correo=%s, pais=%s, sexo=%s WHERE id=%s",
                       GetSQLValueString($_POST['password2'], "text"),
                       GetSQLValueString($_POST['correo'], "text"),
                       GetSQLValueString($_POST['pais'], "text"),
                       GetSQLValueString($_POST['sexo'], "text"),
                       GetSQLValueString($_POST['id'], "int"));

  mysql_select_db($database_conexion, $conexion);
  $Result1 = mysql_query($updateSQL, $conexion) or die(mysql_error());

  $updateGoTo = "$urlweb";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

?>
<?php require_once('../Connections/conexion.php'); 

	$usuariosel= $_GET['date']; //Recibimos el usuario seleccionado.
	if(isset($_SESSION['MM_Id'])){
	$usuarioonl= nombre($_SESSION['MM_Id']); //Recibimos el usuario seleccionado.
	}
	else{
		$usuarioonl = "";
	}
	
	mysql_select_db($database_conexion, $conexion);
	$query_SacarUsuarioGet = "SELECT * FROM usuarios WHERE nombre='$usuariosel'";
	$SacarUsuarioGet = mysql_query($query_SacarUsuarioGet, $conexion) or die(mysql_error());
	$row_SacarUsuarioGet = mysql_fetch_assoc($SacarUsuarioGet);
	$totalRows_SacarUsuarioGet = mysql_num_rows($SacarUsuarioGet);
	mysql_free_result($SacarUsuarioGet);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Portablesmax - Comunidad de Downloaders.</title>
<link rel="shortcut icon" type="image/x-icon" href="../img/favicon.ico">
<link rel="stylesheet" type="text/css" href="../css/estilos.css"/>
<link href='http://fonts.googleapis.com/css?family=Istok+Web:400,700' rel='stylesheet' type='text/css'>
</head>

<body>
<div id="principal">
  <div id="head">
    <div id="logo">
      <h1><a href="<?php echo $urlweb ?>"><img src="../img/logo.png" width="342" height="70"/></a></h1>
    </div>
    <div id="add468"><img src="../img/add468.png" width="468" height="60" /></div>
  </div>
    <?php include("../inc/menu.php"); ?>
  <div id="leftt">
    <div id="section_l">  

  <?php if($usuarioonl!=$usuariosel){ ?> 


      <form id="form1" name="form1" method="post" action="">
        <table width="600" border="0">
          <tr>
            <td colspan="2" align="center"><h1>Estas viendo el perfil de: <?php echo $row_SacarUsuarioGet['nombre']; ?></h1></td>
          </tr>
          <tr>
            <td width="207" rowspan="6" align="center"><label>
              <input type="image" name="perfil" id="perfil" src="../img/favicon.png" height="128" width="128"/>
              <br />
              Foto Perfil
            </label></td>
            <td width="377">&nbsp;</td>
          </tr>
          <tr>
            <td><strong>Nombre Usuario: <?php echo $row_SacarUsuarioGet['nombre']; ?></strong></td>
          </tr>
          <tr>
            <td><strong>Pais: <?php echo $row_SacarUsuarioGet['pais']; ?></strong></td>
          </tr>
          <tr>
            <td><strong>Sexo: <?php echo $row_SacarUsuarioGet['sexo']; ?></strong></td>
          </tr>
          <tr>
            <td><strong>Rango: <?php echo $row_SacarUsuarioGet['rango']; ?></strong></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2">&nbsp;</td>
          </tr>
        </table>
      </form>
      
      <?php }
	else {


		
		?>
	  <form id="form2" name="form2" method="post" action="<?php echo $editFormAction; ?>">

        <table width="600" border="0">
          <tr>
            <td colspan="2" align="center"><h1>Estas en tu perfil <?php echo $row_SacarUsuarioGet['nombre']; ?></h1></td>
          </tr>
          <tr>
            <td width="207" rowspan="6" align="center"><label>
              <input type="image" name="perfil" id="perfil" src="../img/favicon.png" height="128" width="128"/>
              <br />
              Foto Perfil <a href="">[Cambiar Imagen]</a>
            </label></td>
            <td width="377"><strong>Contrase&ntilde;a:
              <label>
                <input type="text" name="password2" id="password2" value="<?php echo $row_SacarUsuarioGet['password']; ?>"/>
              </label>
            </strong></td>
          </tr>
          <tr>
            <td><strong>Correo:
              <label>
                <input name="correo" type="text" id="correo" value="<?php echo $row_SacarUsuarioGet['correo']; ?>" /></label></strong></td>
          </tr>
          <tr>
            <td><strong>Pais:
              <label>
                <select name="pais" id="pais">
                <option selected><?php echo $row_SacarUsuarioGet['pais']; ?></option>
                <option>Argentina</option>
                <option>Bolivia</option>
                <option>Brasil</option>
                <option>Colombia</option>
                <option>Chile</option>
                <option>Ecuador</option>
                <option>Paraguay</option>
                <option>Peru</option>
                <option>Uruguay</option>
                <option>Venezuela</option>
                </select>
              </label>
</strong></td>
          </tr>
          <tr>
            <td><strong>Sexo:
              <label>
                <select name="sexo" id="sexo">
                <option>Hombre</option>
                <option>Mujer</option>
                </select>
              </label>
			</strong></td>
          </tr>
          <tr>
            <td><strong>Rango: <?php echo $row_SacarUsuarioGet['rango']; ?></strong></td>
          </tr>
          <tr>
            <td><label>
              <input type="submit" name="guardar" id="guardar" value="Guardar Cambios" />
            </label></td>
          </tr>
          <tr>
            <td colspan="2">&nbsp;</td>
          </tr>
        </table>
        <input type="hidden" name="MM_update" value="form2" />
        <input type="hidden" name="id" value="<?php echo $row_SacarUsuarioGet['id']; ?>" />
      </form>
      
<?php } ?>
    </div>
  </div>
  <div id="rigthh">
  <?php include("../inc/buscador.php"); ?>
  <?php include("../inc/categorias.php"); ?>
  <?php include("../inc/comentarios.php"); ?>
  <?php include("../inc/tags.php"); ?>
  </div>
</div><div id="footer"><div id="txt_fo"><a href="#">Pagina1</a> <a href="#">Pagina2</a> <a href="#">Pagina3</a> <a href="#">Pagina4</a></div>
</div>
<?php include("../inc/login.php"); ?>
</body>
</html>