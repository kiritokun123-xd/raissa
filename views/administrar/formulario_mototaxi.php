<label for="new-articulo-name">Nombre:</label>
<input type="text" id="new-articulo-name" name="mototaxi[nombre]" placeholder="Ingrese nombre mototaxi" value="<?php echo s($mototaxi->nombre); ?>">

<label for="new-articulo-descripcion">Descripción:</label>
<textarea id="new-articulo-descripcion" name="mototaxi[descripcion]" ><?php echo s($mototaxi->descripcion); ?></textarea>
<!-- <input type="text" id="new-articulo-descripcion" name="mototaxi[descripcion]" placeholder="Ingrese descripción" value="<?php echo s($mototaxi->descripcion); ?>"> -->

<label for="new-articulo-costo">Info 1:</label>
<input type="text" id="new-articulo-costo" name="mototaxi[info1]" placeholder="Ingrese información 1" value="<?php echo s($mototaxi->info1); ?>">

<label for="new-articulo-costo">Info 2:</label>
<input type="text" id="new-articulo-costo" name="mototaxi[info2]" placeholder="Ingrese información 2" value="<?php echo s($mototaxi->info2); ?>">

<label for="new-articulo-costo">Info 3:</label>
<input type="text" id="new-articulo-costo" name="mototaxi[info3]" placeholder="Ingrese información 3" value="<?php echo s($mototaxi->info3); ?>">

<label for="new-articulo-costo">Info 4:</label>
<input type="text" id="new-articulo-costo" name="mototaxi[info4]" placeholder="Ingrese información 4" value="<?php echo s($mototaxi->info4); ?>">

<label for="new-articulo-costo">Info 5:</label>
<input type="text" id="new-articulo-costo" name="mototaxi[info5]" placeholder="Ingrese información 5" value="<?php echo s($mototaxi->info5); ?>">

<label for="new-articulo-costo">Info 6:</label>
<input type="text" id="new-articulo-costo" name="mototaxi[info6]" placeholder="Ingrese información 6" value="<?php echo s($mototaxi->info6); ?>">

<label for="new-imagen">Imagen: </label>
<input type="file" id="new-imagen" accept="image/jpeg, image/png" name="mototaxi[imagen]">

<?php if($mototaxi->imagen) : ?>
    <img src="/imagenes/<?php echo $mototaxi->imagen ?>" alt="" class="imagen-small">
<?php endif; ?>