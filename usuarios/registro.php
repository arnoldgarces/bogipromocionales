<?php require_once('../Connections/conexion.php'); 

if (isset ($_SESSION['MM_Id'])){
	header("Location: " . $urlweb );
	}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  	$validarexistencia=sprintf("SELECT nombre, correo FROM usuarios WHERE nombre=%s OR correo=%s ",
    GetSQLValueString($_POST['nombre'], "text"),
	GetSQLValueString($_POST['correo'], "text")); 
   

  $insertSQL = sprintf("INSERT INTO usuarios (nombre, password, correo, pais, sexo, rango ) VALUES (%s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['nombre'], "text"),
                       GetSQLValueString($_POST['password'], "text"),
                       GetSQLValueString($_POST['correo'], "text"),
                       GetSQLValueString($_POST['pais'], "text"),
                       GetSQLValueString($_POST['sexo'], "text"),
					   GetSQLValueString(1, "int"));

  mysql_select_db($database_conexion, $conexion);
  $validar = mysql_query($validarexistencia, $conexion) or die(mysql_error());
  $registroFoundUser = mysql_num_rows($validar);
  if ($registroFoundUser) {
  	echo "El usuario o el correo ya existen.";
  }
  else{
	 
	 $Result1 = mysql_query($insertSQL, $conexion) or die(mysql_error());
  $insertGoTo = "index.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
  	echo "Registro realizado con exito.";
	}
}
?>
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
      <form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1">
        <table align="center">
          <tr valign="baseline">
            <td nowrap="nowrap" align="right">Nombre:</td>
            <td><input type="text" name="nombre" value="" size="32" /></td>
          </tr>
          <tr valign="baseline">
            <td nowrap="nowrap" align="right">Password:</td>
            <td><input type="text" name="password" value="" size="32" /></td>
          </tr>
          <tr valign="baseline">
            <td nowrap="nowrap" align="right">Correo:</td>
            <td><input name="correo" type="text" id="correo" size="32" /></td>
          </tr>
          <tr valign="baseline">
            <td nowrap="nowrap" align="right">Pais:</td>
            <td><label>
              <select name="pais" id="pais">
                <option selected>Argentina</option>
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
            </label></td>
          </tr>
          <tr valign="baseline">
            <td nowrap="nowrap" align="right">Sexo:</td>
            <td><label>
              <select name="sexo" id="sexo">
                <option>Hombre</option>
                <option>Mujer</option>
              </select>
            </label></td>
          </tr>
          <tr valign="baseline">
            <td nowrap="nowrap" align="right">&nbsp;</td>
            <td><input type="submit" value="Insertar registro" /></td>
          </tr>
        </table>
        <input type="hidden" name="MM_insert" value="form1" />
      </form>
      <p>&nbsp;</p>
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