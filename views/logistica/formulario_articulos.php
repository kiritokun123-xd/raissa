<label for="new-articulo-name">Nombre:</label>
<input type="text" id="new-articulo-name" name="articulo[nombre]" placeholder="Ingrese nombre artículo" value="<?php echo s($articulo->nombre); ?>">

<label for="new-articulo-descripcion">Descripción:</label>
<input type="text" id="new-articulo-descripcion" name="articulo[descripcion]" placeholder="Ingrese descripción" value="<?php echo s($articulo->descripcion); ?>">

<label for="new-articulo-costo">Costo:</label>
<input type="number" step="0.01" id="new-articulo-costo" name="articulo[costo]" placeholder="Ingrese precio costo" value="<?php echo s($articulo->costo); ?>">

<label for="new-articulo-venta">Venta:</label>
<input type="number" step="0.01" id="new-articulo-venta" name="articulo[venta]" placeholder="Ingrese precio venta" value="<?php echo s($articulo->venta); ?>">

<label for="new-imagen">Imagen: </label>
<input type="file" id="new-imagen" accept="image/jpeg, image/png" name="articulo[imagen]">

<?php if($articulo->imagen) : ?>
    <img src="/imagenes/<?php echo $articulo->imagen ?>" alt="" class="imagen-small">
<?php endif; ?>