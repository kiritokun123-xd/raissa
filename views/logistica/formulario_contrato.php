<label for="new-cliente">Cliente:</label>
<input type="text" id="new-cliente" name="contrato[cliente]" placeholder="Ingrese nombre del Cliente" value="<?php echo s($contrato->cliente); ?>">

<label for="new-cliente">Celular:</label>
<input type="number" id="new-celular" name="contrato[celular]" placeholder="Ingrese número de celular" value="<?php echo s($contrato->celular); ?>">

<label for="new-vendedor">Vendedor:</label>
<input type="text" id="new-vendedor" name="contrato[vendedor]" placeholder="Ingrese Nº vendedor" value="<?php echo s($contrato->vendedor); ?>">

<label for="new-serie">Serie:</label>
<input type="text" id="new-serie" name="contrato[serie]" placeholder="Ingrese Nº serie" value="<?php echo s($contrato->serie); ?>">

<label for="new-num_contrato">Número de contrato:</label>
<input type="text" id="new-num_contrato" name="contrato[num_contrato]" placeholder="Ingrese Nº num_contrato" value="<?php echo s($contrato->num_contrato); ?>">

<label for="estado">Estado:</label>
<select id="estado" name="contrato[estado]">
    <option value="" >-- Seleccione --</option>
    <option <?php echo 'Debe' == $contrato->estado ? 'selected' : ''; ?> value="Debe">Debe</option>
    <option <?php echo 'No Debe' == $contrato->estado ? 'selected' : ''; ?> value="No Debe">No Debe</option>
</select>

<label for="observacion">Observación:</label>
<textarea id="observacion" name="contrato[observacion]"><?php echo s($contrato->observacion); ?></textarea>



