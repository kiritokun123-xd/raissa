<label for="new-usuario">Usuario:</label>
<input type="text" id="new-usuario" name="usuario[nombre]" placeholder="Ingrese usuario" value="<?php echo s($usuario->nombre); ?>">

<label for="new-nombre">Nombre:</label>
<input type="text" id="new-nombre" name="usuario[nick]" placeholder="Ingrese usuario" value="<?php echo s($usuario->nick); ?>">

<label for="new-password">Contraseña:</label>
<input type="text" id="new-password" name="usuario[password]" placeholder="Ingrese contraseña" >

<label for="new-passwordC">Confirmar Contraseña:</label>
<input type="text" id="new-passwordC" name="usuario[passwordC]" placeholder="Ingrese contraseña nuevamente" >
