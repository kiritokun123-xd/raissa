<label for="new-serie">Serie:</label>
<input type="text" id="new-serie" name="serie[numserie]" placeholder="Ingrese número de serie" value="<?php echo s($serie->numserie); ?>">

<label for="tipo">Tipo:</label>
<select id="tipo" name="serie[tipo]">
    <option value="" >-- Seleccione --</option>
    <option <?php echo 'Mototaxi' == $serie->tipo ? 'selected' : ''; ?> value="Mototaxi">Mototaxi</option>
    <option <?php echo 'Carguero' == $serie->tipo ? 'selected' : ''; ?> value="Carguero">Carguero</option>
</select>




