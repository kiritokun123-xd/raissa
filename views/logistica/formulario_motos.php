<label for="new-articulo-modelo">Modelo:</label>
<input type="text" id="new-articulo-modelo" name="moto[nombre]" placeholder="Ingrese modelo moto" value="<?php echo s($moto->nombre); ?>">

<label for="new-articulo-vim">Vim:</label>
<input type="text" id="new-articulo-vim" name="moto[vim]" placeholder="Ingrese Nº Vim" value="<?php echo s($moto->vim); ?>">

<label for="new-articulo-motor">Motor:</label>
<input type="text" id="new-articulo-motor" name="moto[motor]" placeholder="Ingrese serie motor" value="<?php echo s($moto->motor); ?>">

<label for="articulo-dua">Dua:</label>
<input type="text" id="articulo-dua" name="moto[dua]" placeholder="Ingrese dua" value="<?php echo s($moto->dua); ?>">

<label for="new-articulo-color">Color:</label>
<input type="text" id="new-articulo-color" name="moto[color]" placeholder="Ingrese color" value="<?php echo s($moto->color); ?>">

<label for="articulo-peso">Peso:</label>
<input type="number" step="0.01" id="articulo-peso" name="moto[peso]" placeholder="Ingrese peso" value="<?php echo s($moto->peso); ?>">

<label for="new-articulo-estado">Estado:</label>
<input type="text" id="new-articulo-estado" name="moto[estado]" placeholder="Ingrese estado" value="<?php echo s($moto->estado); ?>">

<label for="new-imagen">Imagen: </label>
<input type="file" id="new-imagen" name="moto[imagen]" accept="image/jpeg, image/png" >

<?php if($moto->imagen) : ?>
    <img src="/imagenes/<?php echo $moto->imagen ?>" alt="" class="imagen-small">
<?php endif; ?>