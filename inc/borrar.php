<?php require_once('../Connections/conexion.php');
//initialize the session
if (!isset($_SESSION)) {
  session_start();
}




<a href="<?php echo $logoutAction ?>">Desconectar</a>