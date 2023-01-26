
    <label for="new-ord_trimoto">N.Orden Trimoto:</label>
    <input type="text" id="new-ord_trimoto" name="pedido[ord_trimoto]" placeholder="Ingrese número de orden de trimoto" value="<?php echo s($pedido->ord_trimoto); ?>">
    
    <label for="new-fecha_fin">Fecha de Entrega:</label>
    <input type="date" class="input-id input-fecha" id="new-fecha_fino" name="pedido[fecha_fin]" value="<?php echo s($pedido->fecha_fin); ?>">
    
    <label for="new-responsable">responsable:</label>
    <input type="text" id="new-responsable" name="pedido[responsable]" placeholder="Ingrese responsable" value="<?php echo s($pedido->responsable); ?>">
    
    <label for="new-cliente">Cliente:</label>
    <input type="text" id="new-cliente" name="pedido[cliente]" placeholder="Ingrese Cliente" value="<?php echo s($pedido->cliente); ?>">
    

    <label for="new-mod_trimoto">Modelo de Trimoto:</label>
    <input type="text" id="new-mod_trimoto" name="pedido[mod_trimoto]" placeholder="Ingrese Modelo de Trimoto" value="<?php echo s($pedido->mod_trimoto); ?>">
    
    <label for="new-cod_trimoto">Código de Tapiz:</label>
    <input type="text" id="new-cod_trimoto" name="pedido[cod_trimoto]" placeholder="Ingrese Código de Tapiz" value="<?php echo s($pedido->cod_trimoto); ?>">
    
    <label for="new-col_trimoto">Color de Trimoto:</label>
    <input type="text" id="new-col_trimoto" name="pedido[col_trimoto]" placeholder="Ingrese Color de Trimoto" value="<?php echo s($pedido->col_trimoto); ?>">
    
    <label for="new-mod_techo">Modelo de Techo:</label>
    <input type="text" id="new-mod_techo" name="pedido[mod_techo]" placeholder="Ingrese Modeo de Techo" value="<?php echo s($pedido->mod_techo); ?>">
    
    <label for="new-techo">Techo:</label>
    <input type="text" id="new-techo" name="pedido[techo]" placeholder="Ingrese Techo" value="<?php echo s($pedido->techo); ?>">
    
    <label for="new-fil_techo">Filo de Techo:</label>
    <input type="text" id="new-fil_techo" name="pedido[fil_techo]" placeholder="Ingrese Filo de Techo" value="<?php echo s($pedido->fil_techo); ?>">
    
    <label for="new-med_luna">Media Luna:</label>
    <input type="text" id="new-med_luna" name="pedido[med_luna]" placeholder="Ingrese Media Luna" value="<?php echo s($pedido->med_luna); ?>">
    
    <label for="new-franja">Franja:</label>
    <input type="text" id="new-franja" name="pedido[franja]" placeholder="Ingrese Franja" value="<?php echo s($pedido->franja); ?>">

    <label for="new-imagen">Imagen Cobertor: </label>
    <input type="file" id="new-imagen" accept="image/jpeg, image/png" name="pedido[ima_cobertor]">

    <label for="new-imagen">Imagen Trimoto: </label>
    <input type="file" id="new-imagen" accept="image/jpeg, image/png" name="pedido[ima_trimoto]">

    <label for="observacion">Observaciones:</label>
    <textarea id="observacion" name="pedido[observacion]"><?php echo s($pedido->observacion); ?></textarea>




