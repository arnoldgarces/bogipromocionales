<?php require_once('Connections/conexion.php'); 
	if (isset ($_SESSION['MM_Id'])){
	header("Location: administracion.php" );
	}
?>
<html>
	<head>
	</head>
	<body>
    
    <style>
		body{
		background-color:#333;
		background-image: url('img/BOGI.png'); 
		background-repeat: no-repeat; 
		background-size: 100%;
		background-attachment:fixed;
		}
		#Formulario{
		margin:auto;
		height:20%;
		width:20%;
		margin-top:40px;
		-webkit-border-radius: 10px;
		border:1px #FFF solid;
		padding:50px;
		text-align:center;
		text-shadow:#000;
 		cursor: pointer;
		z-index: 999;
		position: relative;
		padding: 10px 30px 10px 10px;
		outline: none;
		background: #F7F7F7;
		border: 1px solid #CCC;
		color: #666;
		text-shadow: 1px 1px 1px #FFF;
		}
		div {
		  margin: .4em 0;
		  padding: .2em;
		}
	
	</style>
    <div id="Formulario">
      <form action="arrancar.php" method="POST" name="formLogin">
      <fieldset>
		  <legend>Ingreso de administradores</legend>
			<div><label>Usuario:</label>
		    	<input name="nombre" type="text" id="nombre" size="10" /></label><br>
            </div>
            <div>
			<label>Password</label><input name="password" type="password" id="password" size="10" /></label><br>
            </div>
            <input type="submit" name="button2" id="button2" value="Iniciar sesion" /></label>
      </fieldset>
      </form>
      </div>

    
    
    </body>

</html>