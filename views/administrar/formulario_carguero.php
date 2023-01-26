<label for="new-articulo-name">Nombre:</label>
<input type="text" id="new-articulo-name" name="carguero[nombre]" placeholder="Ingrese nombre carguero" value="<?php echo s($carguero->nombre); ?>">

<label for="new-articulo-descripcion">Descripción:</label>
<textarea id="new-articulo-descripcion" name="carguero[descripcion]" ><?php echo s($carguero->descripcion); ?></textarea>
<!-- <input type="text" id="new-articulo-descripcion" name="carguero[descripcion]" placeholder="Ingrese descripción" value="<?php echo s($carguero->descripcion); ?>"> -->

<label for="new-articulo-costo">Info 1:</label>
<input type="text" id="new-articulo-costo" name="carguero[info1]" placeholder="Ingrese información 1" value="<?php echo s($carguero->info1); ?>">

<label for="new-articulo-costo">Info 2:</label>
<input type="text" id="new-articulo-costo" name="carguero[info2]" placeholder="Ingrese información 2" value="<?php echo s($carguero->info2); ?>">

<label for="new-articulo-costo">Info 3:</label>
<input type="text" id="new-articulo-costo" name="carguero[info3]" placeholder="Ingrese información 3" value="<?php echo s($carguero->info3); ?>">

<label for="new-articulo-costo">Info 4:</label>
<input type="text" id="new-articulo-costo" name="carguero[info4]" placeholder="Ingrese información 4" value="<?php echo s($carguero->info4); ?>">

<label for="new-articulo-costo">Info 5:</label>
<input type="text" id="new-articulo-costo" name="carguero[info5]" placeholder="Ingrese información 5" value="<?php echo s($carguero->info5); ?>">

<label for="new-articulo-costo">Info 6:</label>
<input type="text" id="new-articulo-costo" name="carguero[info6]" placeholder="Ingrese información 6" value="<?php echo s($carguero->info6); ?>">

<label for="new-imagen">Imagen: </label>
<input type="file" id="new-imagen" accept="image/jpeg, image/png" name="carguero[imagen]">

<?php if($carguero->imagen) : ?>
    <img src="/imagenes/<?php echo $carguero->imagen ?>" alt="" class="imagen-small">
<?php endif; ?>