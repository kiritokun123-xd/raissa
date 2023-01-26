<label for="new-articulo-modelo">Nº Placa:</label>
<input type="text" id="new-articulo-modelo" name="placa[nombre]" placeholder="Ingrese Nº Placa" value="<?php echo s($placa->nombre); ?>">

<label for="new-articulo-descripcion">Propietario:</label>
<input type="text" id="new-articulo-descripcion" name="placa[propietario]" placeholder="Ingrese Propietario" value="<?php echo s($placa->propietario); ?>">

<label for="new-articulo-vim">Vim:</label>
<input type="text" id="new-articulo-vim" name="placa[vim]" placeholder="Ingrese Nº Vim" value="<?php echo s($placa->vim); ?>">

<label for="new-articulo-motor">Motor:</label>
<input type="text" id="new-articulo-motor" name="placa[motor]" placeholder="Ingrese serie motor" value="<?php echo s($placa->motor); ?>">

<label for="new-articulo-dua">Título:</label>
<input type="text" id="new-articulo-dua" name="placa[titulo]" placeholder="Ingrese Nº Título" value="<?php echo s($placa->titulo); ?>">

<label for="new-articulo-color">Verificación:</label>
<input type="number" id="new-articulo-color" name="placa[verificacion]" placeholder="Ingrese Nº Verificación" value="<?php echo s($placa->verificacion); ?>">

<label for="new-articulo-peso">Estado:</label>
<input type="text" id="new-articulo-peso" name="placa[estado]" placeholder="Ingrese Estado" value="<?php echo s($placa->estado); ?>">

