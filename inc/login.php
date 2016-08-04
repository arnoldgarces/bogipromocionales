<div id="flotante" style="display:none"><div id="section_l">
            <div id="imagencerrar"><a onclick="javascript:cerrar()" style="cursor:pointer"><img src="<?php echo $urlweb; ?>img/close_pop.png" width="32" height="32"></a></div>
      <form action="<?php echo $urlweb; ?>inc/arrancar.php" method="POST" name="formLogin">
      <table width="323" border="0" align="center">
  <tr>
    <td width="81" align="right">Usuario</td>
    <td width="226"><label>
      <input name="nombre" type="text" id="nombre" size="30" />
    </label></td>
  </tr>
  <tr>
    <td align="right">Password</td>
    <td><label>
      <input name="password" type="text" id="password" size="30" />
    </label></td>
  </tr>
  <tr>
    <td height="33">&nbsp;</td>
    <td align="right"><label>
      <input type="submit" name="button2" id="button2" value="Iniciar sesion" />
    </label></td>
  </tr>
</table>
      </form>
</div></div>
