<label for="new-cliente">Cliente:</label>
<input type="text" id="new-cliente" name="pedido[cliente]" placeholder="Ingrese nombre del Cliente" value="<?php echo s($ventaold->cliente); ?>">

<label for="new-distribuidor">Distribuidor:</label>
<input type="text" id="new-distribuidor" name="pedido[distribuidor]" placeholder="Ingrese distribuidor" value="<?php echo s($ventaold->distribuidor); ?>">

<label for="new-vendedor">Vendedor:</label>
<input type="text" id="new-vendedor" name="pedido[vendedor]" placeholder="Ingrese nombre del vendedor" value="<?php echo s($ventaold->vendedor); ?>">

<label for="new-motor">Motor:</label>
<input type="text" id="new-motor" name="pedido[motor]" placeholder="Ingrese  descripcion motor" value="<?php echo s($ventaold->motor); ?>">

<input hidden type="text" id="new-estado" name="pedido[estado]" placeholder="Ingrese  descripcion estado" value="Taller Sol">

<label for="new-fecha-ent">Fecha de Entrega:</label>
<input type="date" class="input-id input-fecha" id="new-fecha-ent" name="pedido[fecha_ent]" value="<?php echo s($ventaold->fecha_ent); ?>">

<label for="moto">Tipo de Moto:</label>
<select id="moto" name="pedido[moto]">
    <option value="" >-- Seleccione --</option>
    <option <?php echo 'Mototaxi' == $ventaold->moto ? 'selected' : ''; ?> value="Mototaxi">Mototaxi</option>
    <option <?php echo 'Motocarga' == $ventaold->moto ? 'selected' : ''; ?> value="Motocarga">Motocarga</option>
    <option <?php echo 'Carguero' == $ventaold->moto ? 'selected' : ''; ?> value="Carguero">Carguero</option>
</select>

<label for="tipo">Tipo:</label>
<select id="tipo" name="pedido[tipo]">
    <option value="" >-- Seleccione --</option>
    <option <?php echo 'Redonda' == $ventaold->tipo ? 'selected' : ''; ?> value="Redonda">Redonda</option>
    <option <?php echo 'Reforzada' == $ventaold->tipo ? 'selected' : ''; ?> value="Reforzada">Reforzada</option>
    <option <?php echo 'Corona' == $ventaold->tipo ? 'selected' : ''; ?> value="Corona">Corona</option>
    <option <?php echo 'Fuerza' == $ventaold->tipo ? 'selected' : ''; ?> value="Fuerza">Fuerza</option>
    <option <?php echo 'Fuerza Gallinero' == $ventaold->tipo ? 'selected' : ''; ?> value="Fuerza Gallinero">Fuerza Gallinero</option>
    <option <?php echo 'Absoluto' == $ventaold->tipo ? 'selected' : ''; ?> value="Absoluto">Absoluto</option>
    <option <?php echo 'Importado' == $ventaold->tipo ? 'selected' : ''; ?> value="Importado">Importado</option>
    <option <?php echo 'Nacional' == $ventaold->tipo ? 'selected' : ''; ?> value="Nacional">Nacional</option>
</select>

<label for="color">Color:</label>
<select id="color" name="pedido[color]">
    <option value="" >-- Seleccione --</option>
    <option <?php echo 'Azul' == $ventaold->color ? 'selected' : ''; ?> value="Azul">Azul</option>
    <option <?php echo 'Negro' == $ventaold->color ? 'selected' : ''; ?> value="Negro">Negro</option>
    <option <?php echo 'Rojo' == $ventaold->color ? 'selected' : ''; ?> value="Rojo">Rojo</option>
    <option <?php echo 'Anaranjado' == $ventaold->color ? 'selected' : ''; ?> value="Anaranjado">Anaranjado</option>
    <option <?php echo 'Verde' == $ventaold->color ? 'selected' : ''; ?> value="Verde">Verde</option>
</select>

<label for="faro">Faro:</label>
<select id="faro" name="pedido[faro]">
    <option value="" >-- Seleccione --</option>
    <option <?php echo 'GL' == $ventaold->faro ? 'selected' : ''; ?> value="GL">GL</option>
    <option <?php echo 'Harley' == $ventaold->faro ? 'selected' : ''; ?> value="Harley">Harley</option>
    <option <?php echo 'No Aplica' == $ventaold->faro ? 'selected' : ''; ?> value="No Aplica">No Aplica</option>
</select>

<label for="tacometro">Tacometro:</label>
<select id="tacometro" name="pedido[tacometro]">
    <option value="" >-- Seleccione --</option>
    <option <?php echo 'GL' == $ventaold->tacometro ? 'selected' : ''; ?> value="GL">GL</option>
    <option <?php echo 'Mostrito' == $ventaold->tacometro ? 'selected' : ''; ?> value="Mostrito">Mostrito</option>
    <option <?php echo 'Harley' == $ventaold->tacometro ? 'selected' : ''; ?> value="Harley">Harley</option>
    <option <?php echo 'No Aplica' == $ventaold->tacometro ? 'selected' : ''; ?> value="No Aplica">No Aplica</option>
</select>

<label for="aro">Aro:</label>
<select id="aro" name="pedido[aro]">
    <option value="" >-- Seleccione --</option>
    <option <?php echo 'Estrella Zapata' == $ventaold->aro ? 'selected' : ''; ?> value="Estrella Zapata">Estrella Zapata</option>
    <option <?php echo 'Estrella Disco' == $ventaold->aro ? 'selected' : ''; ?> value="Estrella Disco">Estrella Disco</option>
    <option <?php echo 'Deportivo Zapata' == $ventaold->aro ? 'selected' : ''; ?> value="Deportivo Zapata">Deportivo Zapata</option>
    <option <?php echo 'Deportivo Disco' == $ventaold->aro ? 'selected' : ''; ?> value="Deportivo Disco">Deportivo Disco</option>
    <option <?php echo 'Doble llanta' == $ventaold->aro ? 'selected' : ''; ?> value="Doble llanta">Doble llanta</option>
    <option <?php echo 'Llanta Balon' == $ventaold->aro ? 'selected' : ''; ?> value="Llanta Balon">Llanta Balon</option>
    <option <?php echo 'Kit Nacional' == $ventaold->aro ? 'selected' : ''; ?> value="Kit Nacional">Kit Nacional</option>
    <option <?php echo 'Perno' == $ventaold->aro ? 'selected' : ''; ?> value="Perno">Perno</option>
    <option <?php echo 'Venado' == $ventaold->aro ? 'selected' : ''; ?> value="Venado">Venado</option>
</select>

<label for="parrilla">Parrilla:</label>
<select id="parrilla" name="pedido[parrilla]">
    <option value="" >-- Seleccione --</option>
    <option <?php echo 'Clásica' == $ventaold->parrilla ? 'selected' : ''; ?> value="Clásica">Clásica</option>
    <option <?php echo 'VZ' == $ventaold->parrilla ? 'selected' : ''; ?> value="VZ">VZ</option>
    <option <?php echo 'Trenzada' == $ventaold->parrilla ? 'selected' : ''; ?> value="Trenzada">Trenzada</option>
    <option <?php echo 'Cajón' == $ventaold->parrilla ? 'selected' : ''; ?> value="Cajón">Cajón</option>
    <option <?php echo 'Titán' == $ventaold->parrilla ? 'selected' : ''; ?> value="Titán">Titán</option>
    <option <?php echo 'No Aplica' == $ventaold->parrilla ? 'selected' : ''; ?> value="No Aplica">No Aplica</option>
</select>

<label for="techo">Techo:</label>
<select id="techo" name="pedido[techo]">
    <option value="" >-- Seleccione --</option>
    <option <?php echo 'Estándar' == $ventaold->techo ? 'selected' : ''; ?> value="Estándar">Estándar</option>
    <option <?php echo 'Cola 1' == $ventaold->techo ? 'selected' : ''; ?> value="Cola 1">Cola 1</option>
    <option <?php echo 'Cola 2' == $ventaold->techo ? 'selected' : ''; ?> value="Cola 2">Cola 2</option>
    <option <?php echo 'No Aplica' == $ventaold->techo ? 'selected' : ''; ?> value="No Aplica">No Aplica</option>
</select>

<label for="trapecio">Trapecio:</label>
<select id="trapecio" name="pedido[trapecio]">
    <option value="" >-- Seleccione --</option>
    <option <?php echo 'Cuadrado' == $ventaold->trapecio ? 'selected' : ''; ?> value="Cuadrado">Cuadrado</option>
    <option <?php echo 'Redondo' == $ventaold->trapecio ? 'selected' : ''; ?> value="Redondo">Redondo</option>
    <option <?php echo 'No Aplica' == $ventaold->trapecio ? 'selected' : ''; ?> value="No Aplica">No Aplica</option>
</select>

<label for="asiento">Asiento:</label>
<select id="asiento" name="pedido[asiento]">
    <option value="" >-- Seleccione --</option>
    <option <?php echo 'Anatómico' == $ventaold->asiento ? 'selected' : ''; ?> value="Anatómico">Anatómico</option>
    <option <?php echo 'Deportivo' == $ventaold->asiento ? 'selected' : ''; ?> value="Deportivo">Deportivo</option>
    <option <?php echo 'Liso' == $ventaold->asiento ? 'selected' : ''; ?> value="Liso">Liso</option>
    <option <?php echo 'Torito' == $ventaold->asiento ? 'selected' : ''; ?> value="Torito">Torito</option>
    <option <?php echo 'No Aplica' == $ventaold->asiento ? 'selected' : ''; ?> value="No Aplica">No Aplica</option>
</select>

<label for="mica">Mica:</label>
<select id="mica" name="pedido[mica]">
    <option value="" >-- Seleccione --</option>
    <option <?php echo 'Transparente' == $ventaold->mica ? 'selected' : ''; ?> value="Transparente">Transparente</option>
    <option <?php echo 'Polarizado' == $ventaold->mica ? 'selected' : ''; ?> value="Polarizado">Polarizado</option>
    <option <?php echo 'No Aplica' == $ventaold->mica ? 'selected' : ''; ?> value="No Aplica">No Aplica</option>
</select>

<label for="mascara">Máscara:</label>
<select id="mascara" name="pedido[mascara]">
    <option value="" >-- Seleccione --</option>
    <option <?php echo 'Aero' == $ventaold->mascara ? 'selected' : ''; ?> value="Aero">Aero</option>
    <option <?php echo 'Doble Mica' == $ventaold->mascara ? 'selected' : ''; ?> value="Doble Mica">Doble Mica</option>
    <option <?php echo 'Corta' == $ventaold->mascara ? 'selected' : ''; ?> value="Corta">Corta</option>
    <option <?php echo 'No Aplica' == $ventaold->mascara ? 'selected' : ''; ?> value="No Aplica">No Aplica</option>
</select>

<label for="equipamiento">Equipamiento:</label>
<textarea id="equipamiento" name="pedido[equipamiento]"><?php echo s($ventaold->equipamiento); ?></textarea>

<label for="adicional">Tapiz:</label>
<textarea id="adicional" name="pedido[adicional]"><?php echo s($ventaold->adicional); ?></textarea>

<label for="observacion">Observaciones:</label>
<textarea id="observacion" name="pedido[observacion]"><?php echo s($ventaold->observacion); ?></textarea>








