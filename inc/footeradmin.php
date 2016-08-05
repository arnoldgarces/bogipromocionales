<a id="Whatsapp-header" href="#">
    <li><span class="site-name">Bienvenido: <br /><?php  echo $_SESSION['MM_Username']?></span></li>
    </a>
	<nav>
		<ul>
            <li><a href="<?php echo $urlweb ?>agregarnovedades.php">Agregar Novedades</a></li>
			<li><a href="<?php echo $urlweb ?>agregar.php">Agregar Productos</a></li>
			<li><a title="Acerca de nosotros" href="<?php echo $urlweb ?>/logout.php">Salir</a></li>
		</ul>
	</nav><!-- / nav -->