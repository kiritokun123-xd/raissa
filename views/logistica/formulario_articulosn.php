<label for="new-articulo-codigo">Código:</label>
<input type="text" id="new-articulo-codigo" name="articulo[codigo]" placeholder="Ingrese codigo artículo" value="<?php echo s($articulo->codigo); ?>">

<label for="new-articulo-descripcion">Descripción:</label>
<input type="text" id="new-articulo-descripcion" name="articulo[descripcion]" placeholder="Ingrese descripción" value="<?php echo s($articulo->descripcion); ?>">

<label for="area">Área:</label>
<select id="area" name="articulo[area]">
    <option value="" >-- Seleccione --</option>
    <option <?php echo 'COSTURA' == $articulo->area ? 'selected' : ''; ?> value="COSTURA">COSTURA</option>
    <option <?php echo 'ENSAMBLAJE' == $articulo->area ? 'selected' : ''; ?> value="ENSAMBLAJE">ENSAMBLAJE</option>
    <option <?php echo 'SOLDADURA' == $articulo->area ? 'selected' : ''; ?> value="SOLDADURA">SOLDADURA</option>
    <option <?php echo 'TIENDA' == $articulo->area ? 'selected' : ''; ?> value="TIENDA">TIENDA</option>
</select>

<label for="tipo">Tipo:</label>
<select id="tipo" name="articulo[tipo]">
    <option value="" >-- Seleccione --</option>
    <option <?php echo 'ACC' == $articulo->tipo ? 'selected' : ''; ?> value="ACC">ACC</option>
    <option <?php echo 'ARO' == $articulo->tipo ? 'selected' : ''; ?> value="ARO">ARO</option>
    <option <?php echo 'ASI' == $articulo->tipo ? 'selected' : ''; ?> value="ASI">ASI</option>
    <option <?php echo 'BAS' == $articulo->tipo ? 'selected' : ''; ?> value="BAS">BAS</option>
    <option <?php echo 'CAB' == $articulo->tipo ? 'selected' : ''; ?> value="CAB">CAB</option>
    <option <?php echo 'ESP' == $articulo->tipo ? 'selected' : ''; ?> value="ESP">ESP</option>
    <option <?php echo 'HER' == $articulo->tipo ? 'selected' : ''; ?> value="HER">HER</option>
    <option <?php echo 'HIL' == $articulo->tipo ? 'selected' : ''; ?> value="HIL">HIL</option>
    <option <?php echo 'INS' == $articulo->tipo ? 'selected' : ''; ?> value="INS">INS</option>
    <option <?php echo 'JEB' == $articulo->tipo ? 'selected' : ''; ?> value="JEB">JEB</option>
    <option <?php echo 'LON' == $articulo->tipo ? 'selected' : ''; ?> value="LON">LON</option>
    <option <?php echo 'MAC' == $articulo->tipo ? 'selected' : ''; ?> value="MAC">MAC</option>
    <option <?php echo 'MAL' == $articulo->tipo ? 'selected' : ''; ?> value="MAL">MAL</option>
    <option <?php echo 'MAS' == $articulo->tipo ? 'selected' : ''; ?> value="MAS">MAS</option>
    <option <?php echo 'MIC' == $articulo->tipo ? 'selected' : ''; ?> value="MIC">MIC</option>
    <option <?php echo 'MOT' == $articulo->tipo ? 'selected' : ''; ?> value="MOT">MOT</option>
    <option <?php echo 'MT4' == $articulo->tipo ? 'selected' : ''; ?> value="MT4">MT4</option>
    <option <?php echo 'MTL' == $articulo->tipo ? 'selected' : ''; ?> value="MTL">MTL</option>
    <option <?php echo 'MTX' == $articulo->tipo ? 'selected' : ''; ?> value="MTX">MTX</option>
    <option <?php echo 'PED' == $articulo->tipo ? 'selected' : ''; ?> value="PED">PED</option>
    <option <?php echo 'PER' == $articulo->tipo ? 'selected' : ''; ?> value="PER">PER</option>
    <option <?php echo 'PLA' == $articulo->tipo ? 'selected' : ''; ?> value="PLA">PLA</option>
    <option <?php echo 'PUE' == $articulo->tipo ? 'selected' : ''; ?> value="PUE">PUE</option>
    <option <?php echo 'TAN' == $articulo->tipo ? 'selected' : ''; ?> value="TAN">TAN</option>
    <option <?php echo 'TAP' == $articulo->tipo ? 'selected' : ''; ?> value="TAP">TAP</option>
    <option <?php echo 'TUB' == $articulo->tipo ? 'selected' : ''; ?> value="TUB">TUB</option>
</select>

<label for="tipo_na">Tipo Na:</label>
<select id="tipo_na" name="articulo[tipo_na]">
    <option value="" >-- Seleccione --</option>
    <option <?php echo 'ACCESORIOS' == $articulo->tipo_na ? 'selected' : ''; ?> value="ACCESORIOS">ACCESORIOS</option>
    <option <?php echo 'AROS' == $articulo->tipo_na ? 'selected' : ''; ?> value="AROS">AROS</option>
    <option <?php echo 'ASIENTOS' == $articulo->tipo_na ? 'selected' : ''; ?> value="ASIENTOS">ASIENTOS</option>
    <option <?php echo 'BASES' == $articulo->tipo_na ? 'selected' : ''; ?> value="BAS">BAS</option>
    <option <?php echo 'CABLES' == $articulo->tipo_na ? 'selected' : ''; ?> value="CAB">CAB</option>
    <option <?php echo 'ESPUMA' == $articulo->tipo_na ? 'selected' : ''; ?> value="ESPUMA">ESPUMA</option>
    <option <?php echo 'HERRAMIENTAS' == $articulo->tipo_na ? 'selected' : ''; ?> value="HERRAMIENTAS">HERRAMIENTAS</option>
    <option <?php echo 'HILO' == $articulo->tipo_na ? 'selected' : ''; ?> value="HILO">HILO</option>
    <option <?php echo 'INSUMOS' == $articulo->tipo_na ? 'selected' : ''; ?> value="INSUMOS">INSUMOS</option>
    <option <?php echo 'JEBES' == $articulo->tipo_na ? 'selected' : ''; ?> value="JEBES">JEBES</option>
    <option <?php echo 'LONA' == $articulo->tipo_na ? 'selected' : ''; ?> value="LONA">LONA</option>
    <option <?php echo 'MACHINA' == $articulo->tipo_na ? 'selected' : ''; ?> value="MACHINA">MACHINA</option>
    <option <?php echo 'MALLA' == $articulo->tipo_na ? 'selected' : ''; ?> value="MALLA">MALLA</option>
    <option <?php echo 'MASCARA' == $articulo->tipo_na ? 'selected' : ''; ?> value="MASCARA">MASCARA</option>
    <option <?php echo 'MICAS' == $articulo->tipo_na ? 'selected' : ''; ?> value="MICAS">MICAS</option>
    <option <?php echo 'MOTOR' == $articulo->tipo_na ? 'selected' : ''; ?> value="MOTOR">MOTOR</option>
    <option <?php echo 'CUATRIMOTOS' == $articulo->tipo_na ? 'selected' : ''; ?> value="CUATRIMOTOS">CUATRIMOTOS</option>
    <option <?php echo 'MOTO LINEAL' == $articulo->tipo_na ? 'selected' : ''; ?> value="MOTO LINEAL">MOTO LINEAL</option>
    <option <?php echo 'MOTOTAXI' == $articulo->tipo_na ? 'selected' : ''; ?> value="MOTOTAXI">MOTOTAXI</option>
    <option <?php echo 'PEDAL' == $articulo->tipo_na ? 'selected' : ''; ?> value="PEDAL">PEDAL</option>
    <option <?php echo 'PERNERIA' == $articulo->tipo_na ? 'selected' : ''; ?> value="PERNERIA">PERNERIA</option>
    <option <?php echo 'PLANCHAS' == $articulo->tipo_na ? 'selected' : ''; ?> value="PLANCHAS">PLANCHAS</option>
    <option <?php echo 'PUERTAS' == $articulo->tipo_na ? 'selected' : ''; ?> value="PUERTAS">PUERTAS</option>
    <option <?php echo 'TANQUES' == $articulo->tipo_na ? 'selected' : ''; ?> value="TANQUES">TANQUES</option>
    <option <?php echo 'TAPAS' == $articulo->tipo_na ? 'selected' : ''; ?> value="TAPAS">TAPAS</option>
    <option <?php echo 'TUBOS' == $articulo->tipo_na ? 'selected' : ''; ?> value="TUBOS">TUBOS</option>
</select>

<label for="um">UM:</label>
<select id="um" name="articulo[um]">
    <option value="" >-- Seleccione --</option>
    <option <?php echo 'BOLSAS' == $articulo->um ? 'selected' : ''; ?> value="BOLSAS">BOLSAS</option>
    <option <?php echo 'BOTELLAS' == $articulo->um ? 'selected' : ''; ?> value="BOTELLAS">BOTELLAS</option>
    <option <?php echo 'CAJAS' == $articulo->um ? 'selected' : ''; ?> value="CAJAS">CAJAS</option>
    <option <?php echo 'CM' == $articulo->um ? 'selected' : ''; ?> value="CM">CM</option>
    <option <?php echo 'JUEGO' == $articulo->um ? 'selected' : ''; ?> value="JUEGO">JUEGO</option>
    <option <?php echo 'LATA' == $articulo->um ? 'selected' : ''; ?> value="LATA">LATA</option>
    <option <?php echo 'METROS' == $articulo->um ? 'selected' : ''; ?> value="METROS">METROS</option>
    <option <?php echo 'PAQUETES' == $articulo->um ? 'selected' : ''; ?> value="PAQUETES">PAQUETES</option>
    <option <?php echo 'PARES' == $articulo->um ? 'selected' : ''; ?> value="PARES">PARES</option>
    <option <?php echo 'PLANCHAS' == $articulo->um ? 'selected' : ''; ?> value="PLANCHAS">PLANCHAS</option>
    <option <?php echo 'ROLLOS' == $articulo->um ? 'selected' : ''; ?> value="ROLLOS">ROLLOS</option>
    <option <?php echo 'UNIDADES' == $articulo->um ? 'selected' : ''; ?> value="UNIDADES">UNIDADES</option>
</select>

<label for="new-articulo-cantidad">Cantidad:</label>
<input type="number" step="0.01" id="new-articulo-cantidad" name="articulo[cantidad]" placeholder="Ingrese cantidad" value="<?php echo s($articulo->cantidad); ?>">

<label for="new-articulo-costo">Costo:</label>
<input type="number" step="0.01" id="new-articulo-costo" name="articulo[costo]" placeholder="Ingrese precio costo" value="<?php echo s($articulo->costo); ?>">
