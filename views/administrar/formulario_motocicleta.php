<label for="new-articulo-name">Nombre:</label>
<input type="text" id="new-articulo-name" name="motocicleta[nombre]" placeholder="Ingrese nombre motocicleta" value="<?php echo s($motocicleta->nombre); ?>">

<label for="new-articulo-descripcion">Descripción:</label>
<textarea id="new-articulo-descripcion" name="motocicleta[descripcion]" ><?php echo s($motocicleta->descripcion); ?></textarea>
<!-- <input type="text" id="new-articulo-descripcion" name="motocicleta[descripcion]" placeholder="Ingrese descripción" value="<?php echo s($motocicleta->descripcion); ?>"> -->

<label for="new-articulo-costo">Info 1:</label>
<input type="text" id="new-articulo-costo" name="motocicleta[info1]" placeholder="Ingrese información 1" value="<?php echo s($motocicleta->info1); ?>">

<label for="new-articulo-costo">Info 2:</label>
<input type="text" id="new-articulo-costo" name="motocicleta[info2]" placeholder="Ingrese información 2" value="<?php echo s($motocicleta->info2); ?>">

<label for="new-articulo-costo">Info 3:</label>
<input type="text" id="new-articulo-costo" name="motocicleta[info3]" placeholder="Ingrese información 3" value="<?php echo s($motocicleta->info3); ?>">

<label for="new-articulo-costo">Info 4:</label>
<input type="text" id="new-articulo-costo" name="motocicleta[info4]" placeholder="Ingrese información 4" value="<?php echo s($motocicleta->info4); ?>">

<label for="new-articulo-costo">Info 5:</label>
<input type="text" id="new-articulo-costo" name="motocicleta[info5]" placeholder="Ingrese información 5" value="<?php echo s($motocicleta->info5); ?>">

<label for="new-articulo-costo">Info 6:</label>
<input type="text" id="new-articulo-costo" name="motocicleta[info6]" placeholder="Ingrese información 6" value="<?php echo s($motocicleta->info6); ?>">

<label for="new-imagen">Imagen: </label>
<input type="file" id="new-imagen" accept="image/jpeg, image/png" name="motocicleta[imagen]">

<?php if($motocicleta->imagen) : ?>
    <img src="/imagenes/<?php echo $motocicleta->imagen ?>" alt="" class="imagen-small">
<?php endif; ?>