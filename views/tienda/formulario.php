<label for="new-articulo-name">Nombre:</label>
<input type="text" id="new-articulo-name"  placeholder="Ingrese nombre artículo" value="<?php echo s($articulo->nombre); ?>" disabled>

<label for="new-articulo-descripcion">Descripción:</label>
<input type="text" id="new-articulo-descripcion"  placeholder="Ingrese descripción" value="<?php echo s($articulo->descripcion); ?>" disabled>



<label for="new-articulo-venta">Stock:</label>
<input type="number" id="new-articulo-venta" name="articulo[stock]" placeholder="Ingrese precio venta" value="<?php echo s($articulo->stock); ?>">

