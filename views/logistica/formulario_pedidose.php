<label for="new-cliente">Cliente:</label>
<input type="text" id="new-cliente" name="pedido[cliente]" placeholder="Ingrese nombre del Cliente" value="<?php echo s($pedido->cliente); ?>">

<label for="new-vendedor">Vendedor:</label>
<input type="text" id="new-vendedor" name="pedido[vendedor]" placeholder="Ingrese nombre del vendedor" value="<?php echo s($pedido->vendedor); ?>">

<label for="despacho">Despacho:</label>
<select id="despacho" name="pedido[despacho]">
    <option value="" >-- Seleccione --</option>
    <option <?php echo 'Tda Comas' == $pedido->despacho ? 'selected' : ''; ?> value="Tda Comas">Tda Comas</option>
    <option <?php echo 'Ensamblaje' == $pedido->despacho ? 'selected' : ''; ?> value="Ensamblaje">Ensamblaje</option>
    <option <?php echo 'Soldadura' == $pedido->despacho ? 'selected' : ''; ?> value="Soldadura">Soldadura</option>
</select>

<label for="new-destino">Destino:</label>
<input type="text" id="new-destino" name="pedido[destino]" placeholder="Ingrese destino" value="<?php echo s($pedido->destino); ?>">

<div class="asignar serie" id="contenedor-asigS">
    <label for="new-serie">Serie:</label>
    <input type="text" id="new-serie" name="pedido[serie]" readonly value="<?php echo s($pedido->serie); ?>">
    <a id="btn-asignar-s" class="btn btn-serie">Asignar</a>
</div>

<label for="new-fecha-ent">Fecha de Entrega:</label>
<input type="date" class="input-id input-fecha" id="new-fecha-ent" name="pedido[fecha_ent]" value="<?php echo s($pedido->fecha_ent); ?>">

<label for="estado" class="estadop">Estado:</label>
<select id="estado" name="pedido[estado]">
    <option <?php echo 'Taller Sol' == $pedido->estado ? 'selected' : ''; ?> value="Taller Sol">Taller Sol</option>
    <option <?php echo 'Taller Ens' == $pedido->estado ? 'selected' : ''; ?> value="Taller Ens">Taller Ens</option>
    <option <?php echo 'Fin Ens' == $pedido->estado ? 'selected' : ''; ?> value="Fin Ens">Fin Ens</option>
    <option <?php echo 'Fin Tie' == $pedido->estado ? 'selected' : ''; ?> value="Fin Tie">Fin Tie</option>
    <option <?php echo 'Ent Clie' == $pedido->estado ? 'selected' : ''; ?> value="Ent Clie">Ent Clie</option>
    
</select>

<label for="tipo">Tipo:</label>
<select id="tipo" name="pedido[tipo]">
    <option value="" >-- Seleccione --</option>
    <option <?php echo 'Redonda' == $pedido->tipo ? 'selected' : ''; ?> value="Redonda">Redonda</option>
    <option <?php echo 'Redorzada' == $pedido->tipo ? 'selected' : ''; ?> value="Redorzada">Reforzada</option>
    <option <?php echo 'Corona' == $pedido->tipo ? 'selected' : ''; ?> value="Corona">Corona</option>
    <option <?php echo 'Fuerza' == $pedido->tipo ? 'selected' : ''; ?> value="Fuerza">Fuerza</option>
    <option <?php echo 'Fuerza Gallinero' == $pedido->tipo ? 'selected' : ''; ?> value="Fuerza Gallinero">Fuerza Gallinero</option>
    <option <?php echo 'Absoluto' == $pedido->tipo ? 'selected' : ''; ?> value="Absoluto">Absoluto</option>
    <option <?php echo 'Importado' == $pedido->tipo ? 'selected' : ''; ?> value="Importado">Importado</option>
    <option <?php echo 'Nacional' == $pedido->tipo ? 'selected' : ''; ?> value="Nacional">Nacional</option>
    <option <?php echo 'No Aplica' == $pedido->tipo ? 'selected' : ''; ?> value="No Aplica">No Aplica</option>
</select>

<label for="color">Color:</label>
<select id="color" name="pedido[color]">
    <option value="" >-- Seleccione --</option>
    <option <?php echo 'Azul' == $pedido->color ? 'selected' : ''; ?> value="Azul">Azul</option>
    <option <?php echo 'Negro' == $pedido->color ? 'selected' : ''; ?> value="Negro">Negro</option>
    <option <?php echo 'Rojo' == $pedido->color ? 'selected' : ''; ?> value="Rojo">Rojo</option>
    <option <?php echo 'Anaranjado' == $pedido->color ? 'selected' : ''; ?> value="Anaranjado">Anaranjado</option>
    <option <?php echo 'Verde' == $pedido->color ? 'selected' : ''; ?> value="Verde">Verde</option>
    <option <?php echo 'No Aplica' == $pedido->color ? 'selected' : ''; ?> value="No Aplica">No Aplica</option>
</select>

<label for="parrilla">Parrilla:</label>
<select id="parrilla" name="pedido[parrilla]">
    <option value="" >-- Seleccione --</option>
    <option <?php echo 'Clásica' == $pedido->parrilla ? 'selected' : ''; ?> value="Clásica">Clásica</option>
    <option <?php echo 'VZ' == $pedido->parrilla ? 'selected' : ''; ?> value="VZ">VZ</option>
    <option <?php echo 'Trenzada' == $pedido->parrilla ? 'selected' : ''; ?> value="Trenzada">Trenzada</option>
    <option <?php echo 'Cajón' == $pedido->parrilla ? 'selected' : ''; ?> value="Cajón">Cajón</option>
    <option <?php echo 'No Aplica' == $pedido->parrilla ? 'selected' : ''; ?> value="No Aplica">No Aplica</option>
</select>

<label for="techo">Techo:</label>
<select id="techo" name="pedido[techo]">
    <option value="" >-- Seleccione --</option>
    <option <?php echo 'Estándar' == $pedido->techo ? 'selected' : ''; ?> value="Estándar">Estándar</option>
    <option <?php echo 'Cola 1' == $pedido->techo ? 'selected' : ''; ?> value="Cola 1">Cola 1</option>
    <option <?php echo 'Cola 2' == $pedido->techo ? 'selected' : ''; ?> value="Cola 2">Cola 2</option>
    <option <?php echo 'No Aplica' == $pedido->techo ? 'selected' : ''; ?> value="No Aplica">No Aplica</option>
</select>

<label for="asiento">Asiento:</label>
<select id="asiento" name="pedido[asiento]">
    <option value="" >-- Seleccione --</option>
    <option <?php echo 'Anatómico' == $pedido->asiento ? 'selected' : ''; ?> value="Anatómico">Anatómico</option>
    <option <?php echo 'Deportivo' == $pedido->asiento ? 'selected' : ''; ?> value="Deportivo">Deportivo</option>
    <option <?php echo 'Liso' == $pedido->asiento ? 'selected' : ''; ?> value="Liso">Liso</option>
    <option <?php echo 'Torito' == $pedido->asiento ? 'selected' : ''; ?> value="Torito">Torito</option>
    <option <?php echo 'No Aplica' == $pedido->asiento ? 'selected' : ''; ?> value="No Aplica">No Aplica</option>
</select>

<label for="mica">Mica:</label>
<select id="mica" name="pedido[mica]">
    <option value="" >-- Seleccione --</option>
    <option <?php echo 'Transparente' == $pedido->mica ? 'selected' : ''; ?> value="Transparente">Transparente</option>
    <option <?php echo 'Polarizado' == $pedido->mica ? 'selected' : ''; ?> value="Polarizado">Polarizado</option>
    <option <?php echo 'No Aplica' == $pedido->mica ? 'selected' : ''; ?> value="No Aplica">No Aplica</option>
</select>

<label for="mascara">Máscara:</label>
<select id="mascara" name="pedido[mascara]">
    <option value="" >-- Seleccione --</option>
    <option <?php echo 'Aero' == $pedido->mascara ? 'selected' : ''; ?> value="Aero">Aero</option>
    <option <?php echo 'Doble Mica' == $pedido->mascara ? 'selected' : ''; ?> value="Doble Mica">Doble Mica</option>
    <option <?php echo 'No Aplica' == $pedido->mascara ? 'selected' : ''; ?> value="No Aplica">No Aplica</option>
</select>

<label for="equipamiento">Equipamiento:</label>
<textarea id="equipamiento" name="pedido[equipamiento]"><?php echo s($pedido->equipamiento); ?></textarea>

<label for="adicional">Tapiz:</label>
<textarea id="adicional" name="pedido[adicional]"><?php echo s($pedido->adicional); ?></textarea>