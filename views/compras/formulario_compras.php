<label for="new-cliente">Cliente:</label>
<input type="text" id="new-cliente" name="venta[cliente]" placeholder="Ingrese nombre del Cliente" value="<?php echo s($venta->cliente); ?>">

<label for="new-distribuidor">Distribuidor:</label>
<input type="text" id="new-distribuidor" name="venta[distribuidor]" placeholder="Ingrese distribuidor" value="<?php echo s($venta->distribuidor); ?>">

<label for="new-vendedor">Vendedor:</label>
<input type="text" id="new-vendedor" name="venta[vendedor]" placeholder="Ingrese nombre del vendedor" value="<?php echo s($venta->vendedor); ?>">

<label for="new-motor">Motor:</label>
<input type="text" id="new-motor" name="venta[motor]" placeholder="Ingrese  descripcion motor" value="<?php echo s($venta->motor); ?>">

<input hidden type="text" id="new-estado" name="venta[estado]" placeholder="Ingrese  descripcion estado" value="<?php echo s($venta->estado); ?>">

<label for="new-fecha-ent">Fecha de Entrega:</label>
<input type="date" class="input-id input-fecha" id="new-fecha-ent" name="venta[fecha_ent]" value="<?php echo s($venta->fecha_ent); ?>">

<label for="moto">Tipo de Moto:</label>
<select id="moto" name="venta[moto]">
    <option value="" >-- Seleccione --</option>
    <option <?php echo 'Mototaxi' == $venta->moto ? 'selected' : ''; ?> value="Mototaxi">Mototaxi</option>
    <option <?php echo 'Motocarga' == $venta->moto ? 'selected' : ''; ?> value="Motocarga">Motocarga</option>
    <option <?php echo 'Carguero' == $venta->moto ? 'selected' : ''; ?> value="Carguero">Carguero</option>
</select>

<label for="tipo">Tipo:</label>
<select id="tipo" name="venta[tipo]">
    <option value="" >-- Seleccione --</option>
    <option <?php echo 'Redonda' == $venta->tipo ? 'selected' : ''; ?> value="Redonda">Redonda</option>
    <option <?php echo 'Reforzada' == $venta->tipo ? 'selected' : ''; ?> value="Reforzada">Reforzada</option>
    <option <?php echo 'Corona' == $venta->tipo ? 'selected' : ''; ?> value="Corona">Corona</option>
    <option <?php echo 'Fuerza' == $venta->tipo ? 'selected' : ''; ?> value="Fuerza">Fuerza</option>
    <option <?php echo 'Fuerza Gallinero' == $venta->tipo ? 'selected' : ''; ?> value="Fuerza Gallinero">Fuerza Gallinero</option>
    <option <?php echo 'Absoluto' == $venta->tipo ? 'selected' : ''; ?> value="Absoluto">Absoluto</option>
    <option <?php echo 'Importado' == $venta->tipo ? 'selected' : ''; ?> value="Importado">Importado</option>
    <option <?php echo 'Nacional' == $venta->tipo ? 'selected' : ''; ?> value="Nacional">Nacional</option>
</select>

<label for="color">Color:</label>
<select id="color" name="venta[color]">
    <option value="" >-- Seleccione --</option>
    <option <?php echo 'Azul' == $venta->color ? 'selected' : ''; ?> value="Azul">Azul</option>
    <option <?php echo 'Negro' == $venta->color ? 'selected' : ''; ?> value="Negro">Negro</option>
    <option <?php echo 'Rojo' == $venta->color ? 'selected' : ''; ?> value="Rojo">Rojo</option>
    <option <?php echo 'Anaranjado' == $venta->color ? 'selected' : ''; ?> value="Anaranjado">Anaranjado</option>
    <option <?php echo 'Verde' == $venta->color ? 'selected' : ''; ?> value="Verde">Verde</option>
</select>

<label for="faro">Faro:</label>
<select id="faro" name="venta[faro]">
    <option value="" >-- Seleccione --</option>
    <option <?php echo 'GL' == $venta->faro ? 'selected' : ''; ?> value="GL">GL</option>
    <option <?php echo 'Harley' == $venta->faro ? 'selected' : ''; ?> value="Harley">Harley</option>
    <option <?php echo 'No Aplica' == $venta->faro ? 'selected' : ''; ?> value="No Aplica">No Aplica</option>
</select>

<label for="tacometro">Tacometro:</label>
<select id="tacometro" name="venta[tacometro]">
    <option value="" >-- Seleccione --</option>
    <option <?php echo 'GL' == $venta->tacometro ? 'selected' : ''; ?> value="GL">GL</option>
    <option <?php echo 'Mostrito' == $venta->tacometro ? 'selected' : ''; ?> value="Mostrito">Mostrito</option>
    <option <?php echo 'Harley' == $venta->tacometro ? 'selected' : ''; ?> value="Harley">Harley</option>
    <option <?php echo 'No Aplica' == $venta->tacometro ? 'selected' : ''; ?> value="No Aplica">No Aplica</option>
</select>

<label for="aro">Aro:</label>
<select id="aro" name="venta[aro]">
    <option value="" >-- Seleccione --</option>
    <option <?php echo 'Estrella Zapata' == $venta->aro ? 'selected' : ''; ?> value="Estrella Zapata">Estrella Zapata</option>
    <option <?php echo 'Estrella Disco' == $venta->aro ? 'selected' : ''; ?> value="Estrella Disco">Estrella Disco</option>
    <option <?php echo 'Deportivo Zapata' == $venta->aro ? 'selected' : ''; ?> value="Deportivo Zapata">Deportivo Zapata</option>
    <option <?php echo 'Deportivo Disco' == $venta->aro ? 'selected' : ''; ?> value="Deportivo Disco">Deportivo Disco</option>
    <option <?php echo 'Doble llanta' == $venta->aro ? 'selected' : ''; ?> value="Doble llanta">Doble llanta</option>
    <option <?php echo 'Llanta Balon' == $venta->aro ? 'selected' : ''; ?> value="Llanta Balon">Llanta Balon</option>
    <option <?php echo 'Kit Nacional' == $venta->aro ? 'selected' : ''; ?> value="Kit Nacional">Kit Nacional</option>
    <option <?php echo 'Perno' == $venta->aro ? 'selected' : ''; ?> value="Perno">Perno</option>
    <option <?php echo 'Venado' == $venta->aro ? 'selected' : ''; ?> value="Venado">Venado</option>
</select>

<label for="parrilla">Parrilla:</label>
<select id="parrilla" name="venta[parrilla]">
    <option value="" >-- Seleccione --</option>
    <option <?php echo 'Clásica' == $venta->parrilla ? 'selected' : ''; ?> value="Clásica">Clásica</option>
    <option <?php echo 'VZ' == $venta->parrilla ? 'selected' : ''; ?> value="VZ">VZ</option>
    <option <?php echo 'Trenzada' == $venta->parrilla ? 'selected' : ''; ?> value="Trenzada">Trenzada</option>
    <option <?php echo 'Cajón' == $venta->parrilla ? 'selected' : ''; ?> value="Cajón">Cajón</option>
    <option <?php echo 'Titán' == $venta->parrilla ? 'selected' : ''; ?> value="Titán">Titán</option>
    <option <?php echo 'No Aplica' == $venta->parrilla ? 'selected' : ''; ?> value="No Aplica">No Aplica</option>
</select>

<label for="techo">Techo:</label>
<select id="techo" name="venta[techo]">
    <option value="" >-- Seleccione --</option>
    <option <?php echo 'Estándar' == $venta->techo ? 'selected' : ''; ?> value="Estándar">Estándar</option>
    <option <?php echo 'Cola 1' == $venta->techo ? 'selected' : ''; ?> value="Cola 1">Cola 1</option>
    <option <?php echo 'Cola 2' == $venta->techo ? 'selected' : ''; ?> value="Cola 2">Cola 2</option>
    <option <?php echo 'No Aplica' == $venta->techo ? 'selected' : ''; ?> value="No Aplica">No Aplica</option>
</select>

<label for="trapecio">Trapecio:</label>
<select id="trapecio" name="venta[trapecio]">
    <option value="" >-- Seleccione --</option>
    <option <?php echo 'Cuadrado' == $venta->trapecio ? 'selected' : ''; ?> value="Cuadrado">Cuadrado</option>
    <option <?php echo 'Redondo' == $venta->trapecio ? 'selected' : ''; ?> value="Redondo">Redondo</option>
    <option <?php echo 'No Aplica' == $venta->trapecio ? 'selected' : ''; ?> value="No Aplica">No Aplica</option>
</select>

<label for="asiento">Asiento:</label>
<select id="asiento" name="venta[asiento]">
    <option value="" >-- Seleccione --</option>
    <option <?php echo 'Anatómico' == $venta->asiento ? 'selected' : ''; ?> value="Anatómico">Anatómico</option>
    <option <?php echo 'Deportivo' == $venta->asiento ? 'selected' : ''; ?> value="Deportivo">Deportivo</option>
    <option <?php echo 'Liso' == $venta->asiento ? 'selected' : ''; ?> value="Liso">Liso</option>
    <option <?php echo 'Torito' == $venta->asiento ? 'selected' : ''; ?> value="Torito">Torito</option>
    <option <?php echo 'No Aplica' == $venta->asiento ? 'selected' : ''; ?> value="No Aplica">No Aplica</option>
</select>

<label for="mica">Mica:</label>
<select id="mica" name="venta[mica]">
    <option value="" >-- Seleccione --</option>
    <option <?php echo 'Transparente' == $venta->mica ? 'selected' : ''; ?> value="Transparente">Transparente</option>
    <option <?php echo 'Polarizado' == $venta->mica ? 'selected' : ''; ?> value="Polarizado">Polarizado</option>
    <option <?php echo 'No Aplica' == $venta->mica ? 'selected' : ''; ?> value="No Aplica">No Aplica</option>
</select>

<label for="mascara">Máscara:</label>
<select id="mascara" name="venta[mascara]">
    <option value="" >-- Seleccione --</option>
    <option <?php echo 'Aero' == $venta->mascara ? 'selected' : ''; ?> value="Aero">Aero</option>
    <option <?php echo 'Doble Mica' == $venta->mascara ? 'selected' : ''; ?> value="Doble Mica">Doble Mica</option>
    <option <?php echo 'Corta' == $venta->mascara ? 'selected' : ''; ?> value="Corta">Corta</option>
    <option <?php echo 'No Aplica' == $venta->mascara ? 'selected' : ''; ?> value="No Aplica">No Aplica</option>
</select>

<label for="equipamiento">Equipamiento:</label>
<textarea id="equipamiento" name="venta[equipamiento]"><?php echo s($venta->equipamiento); ?></textarea>

<label for="adicional">Tapiz:</label>
<textarea id="adicional" name="venta[adicional]"><?php echo s($venta->adicional); ?></textarea>

<label for="observacion">Observaciones:</label>
<textarea id="observacion" name="venta[observacion]"><?php echo s($venta->observacion); ?></textarea>






