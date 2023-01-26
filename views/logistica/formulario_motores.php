<label for="new-serie">Motor:</label>
<input type="text" id="new-motor" name="motor[nummotor]" placeholder="Ingrese número de motor" value="<?php echo s($motor->nummotor); ?>">

<label for="tipo">Marca:</label>
<select id="tipo" name="motor[tipo]">
    <option value="" >-- Seleccione --</option>
    <option <?php echo 'Ronco' == $motor->tipo ? 'selected' : ''; ?> value="Ronco">Ronco</option>
    <option <?php echo 'Lifan' == $motor->tipo ? 'selected' : ''; ?> value="Lifan">Lifan</option>
    <option <?php echo 'Sumo' == $motor->tipo ? 'selected' : ''; ?> value="Sumo">Sumo</option>
    <option <?php echo 'GDM' == $motor->tipo ? 'selected' : ''; ?> value="GDM">GDM</option>
    <option <?php echo 'Yangzu' == $motor->tipo ? 'selected' : ''; ?> value="Yangzu">Yangzu</option>
    <option <?php echo 'Raissa' == $motor->tipo ? 'selected' : ''; ?> value="Raissa">Raissa</option>
    <option <?php echo 'RTM' == $motor->tipo ? 'selected' : ''; ?> value="RTM">RTM</option>
    <option <?php echo 'Premier' == $motor->tipo ? 'selected' : ''; ?> value="Premier">Premier</option>
</select>




