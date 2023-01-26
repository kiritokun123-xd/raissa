<fieldset>
    <legend>Datos Generales</legend>
    <label for="new-ord_trimoto">N°Orden Trimoto:</label>
    <input type="text" id="new-ord_trimoto" name="pedido[ord_trimoto]" placeholder="Ingrese número de orden de trimoto" value="<?php echo s($pedido->ord_trimoto); ?>">
    
    <label for="new-fecha_fin">Fecha de Entrega:</label>
    <input type="date" class="input-id input-fecha" id="new-fecha_fino" name="pedido[fecha_fin]" value="<?php echo s($pedido->fecha_fin); ?>">
    
    <label for="new-cliente">Cliente:</label>
    <input type="text" id="new-cliente" name="pedido[cliente]" placeholder="Ingrese Cliente" value="<?php echo s($pedido->cliente); ?>">
    
    <label for="new-responsable">Responsable:</label>
    <input type="text" id="new-responsable" name="pedido[responsable]" placeholder="Ingrese responsable" value="<?php echo s($pedido->responsable); ?>">
</fieldset>

<fieldset>
    <legend>Datos Trimoto</legend>
    <label for="new-mod_trimoto">Modelo de Trimoto:</label>
    <input type="text" id="new-mod_trimoto" name="pedido[mod_trimoto]" placeholder="Ingrese Modelo de Trimoto" value="<?php echo s($pedido->mod_trimoto); ?>">
    
    <label for="new-cod_trimoto">Código de Tapiz:</label>
    <input type="text" id="new-cod_trimoto" name="pedido[cod_trimoto]" placeholder="Ingrese Código de Tapiz" value="<?php echo s($pedido->cod_trimoto); ?>">
    
    <label for="new-col_trimoto">Color de Trimoto:</label>
    <input type="text" id="new-col_trimoto" name="pedido[col_trimoto]" placeholder="Ingrese Color de Trimoto" value="<?php echo s($pedido->col_trimoto); ?>">
</fieldset>

<fieldset>
    <legend>Datos Techo</legend>
    <div><label for="new-mod_techo">Modelo de Techo:</label>
    <input type="text" id="new-mod_techo" name="pedido[mod_techo]" placeholder="Ingrese Modelo de Techo" value="<?php echo s($pedido->mod_techo); ?>"></div>
    
    <div><label for="new-col_techo">Color de Techo:</label>
    <input type="text" id="new-col_techo" name="pedido[col_techo]" placeholder="Ingrese Color de Techo" value="<?php echo s($pedido->col_techo); ?>"></div>
    
    <div><label for="new-fil_techo">Filo de Techo:</label>
    <input type="text" id="new-fil_techo" name="pedido[fil_techo]" placeholder="Ingrese Filo de Techo" value="<?php echo s($pedido->fil_techo); ?>"></div>
    
    <div><label for="new-medialuna">Medialuna:</label>
    <input type="text" id="new-medialuna" name="pedido[medialuna]" placeholder="Ingrese Medialuna" value="<?php echo s($pedido->medialuna); ?>"></div>
    
    <div><label for="new-franja">Franja Techo:</label>
    <input type="text" id="new-franja" name="pedido[franja]" placeholder="Ingrese Franja" value="<?php echo s($pedido->franja); ?>"></div>
</fieldset>

<fieldset>
    <legend>Datos Cobertor</legend>
    <div><label for="new-col_cob_post">Color cobertor posterior:</label>
    <input type="text" id="new-col_cob_post" name="pedido[col_cob_post]" placeholder="Ingrese color cobertor posterior" value="<?php echo s($pedido->col_cob_post); ?>"></div>
    <div><label for="new-mod_ven_post">Modelo de Ventana posterior</label>
    <input type="text" id="new-mod_ven_post" name="pedido[mod_ven_post]" placeholder="Modelo de Ventana posterior" value="<?php echo s($pedido->mod_ven_post); ?>"></div>
    <div><label for="new-fil_ventana">Filo de ventana:</label>
    <input type="text" id="new-fil_ventana" name="pedido[fil_ventana]" placeholder="Ingrese Filo de ventana" value="<?php echo s($pedido->fil_ventana); ?>"></div>
    <div><label for="new-aletas">Aletas:</label>
    <input type="text" id="new-aletas" name="pedido[aletas]" placeholder="Ingrese Aletas" value="<?php echo s($pedido->aletas); ?>"></div>
    <div><label for="new-col_cob_late">Color Cobertor Lateral:</label>
    <input type="text" id="new-col_cob_late" name="pedido[col_cob_late]" placeholder="Ingrese Color Cobertor Lateral" value="<?php echo s($pedido->col_cob_late); ?>"></div>
    <div><label for="new-dib_lat">Diubjo Ventana Lateral:</label>
    <input type="text" id="new-dib_lat" name="pedido[dib_lat]" placeholder="Ingrese Diubjo Ventana Lateral" value="<?php echo s($pedido->dib_lat); ?>"></div>
</fieldset>

<fieldset>
    <legend>Datos Puerta Posterior</legend>
    <div><label for="new-col_puer_post">Color Puerta Posterior:</label>
    <input type="text" id="new-col_puer_post" name="pedido[col_puer_post]" placeholder="Ingrese Color Puerta Posterior" value="<?php echo s($pedido->col_puer_post); ?>"></div>
    
    <div><label for="new-dib_puer_post">Dibujo puerta posterior:</label>
    <input type="text" id="new-dib_puer_post" name="pedido[dib_puer_post]" placeholder="Ingrese Dibujo puerta posterior" value="<?php echo s($pedido->dib_puer_post); ?>"></div>
    
    <div><label for="new-col_dib_puer_post">Color de dibujo puerta posterior:</label>
    <input type="text" id="new-col_dib_puer_post" name="pedido[col_dib_puer_post]" placeholder="Ingrese Color de dibujo puerta posterior" value="<?php echo s($pedido->col_dib_puer_post); ?>"></div>
    
    <div><label for="new-mod_ven_puer_post">Modelo ventana puerta posterior:</label>
    <input type="text" id="new-mod_ven_puer_post" name="pedido[mod_ven_puer_post]" placeholder="Ingrese Modelo ventana puerta posterior" value="<?php echo s($pedido->mod_ven_puer_post); ?>"></div>
    
    <div><label for="new-fil_ven_puer_post">Filo Ventana Puerta posterior:</label>
    <input type="text" id="new-fil_ven_puer_post" name="pedido[fil_ven_puer_post]" placeholder="Ingrese Filo Ventana Puerta posterior" value="<?php echo s($pedido->fil_ven_puer_post); ?>"></div>
</fieldset>

<fieldset>
    <legend>Datos Puerta Delantera</legend>
    <div><label for="new-col_puer_del">Color Puerta Delantera</label>
    <input type="text" id="new-col_puer_del" name="pedido[col_puer_del]" placeholder="Ingrese Color puerta delantera" value="<?php echo s($pedido->col_puer_del); ?>"></div>
    
    <div><label for="new-dib_puer_del">Dibujo Puerta Delantera:</label>
    <input type="text" id="new-dib_puer_del" name="pedido[dib_puer_del]" placeholder="Ingrese Dibujo Puerta Delantera" value="<?php echo s($pedido->dib_puer_del); ?>"></div>
    
    <div><label for="new-vent_puer_del">Ventana Puerta Delantera:</label>
    <input type="text" id="new-vent_puer_del" name="pedido[vent_puer_del]" placeholder="Ingrese Ventana Puerta Delantera" value="<?php echo s($pedido->vent_puer_del); ?>"></div>
    
    <div><label for="new-fil_ven_puer_del">Filo Ventana Puerta Delantera:</label>
    <input type="text" id="new-fil_ven_puer_del" name="pedido[fil_ven_puer_del]" placeholder="Ingrese Filo Ventana Puerta Delantera" value="<?php echo s($pedido->fil_ven_puer_del); ?>"></div>
</fieldset>

<fieldset>
    <legend>Datos Máscara</legend>
    <div><label for="new-mod_mascara">Modelo de Mascara:</label>
    <input type="text" id="new-mod_mascara" name="pedido[mod_mascara]" placeholder="Ingrese Modelo de Mascara" value="<?php echo s($pedido->mod_mascara); ?>"></div>
    
    <div><label for="new-col_mascara">Color de Mascara:</label>
    <input type="text" id="new-col_mascara" name="pedido[col_mascara]" placeholder="Ingrese Color de Mascara" value="<?php echo s($pedido->col_mascara); ?>"></div>
    
    <div><label for="new-col_fil_mascara">Color de Filo de Mascara:</label>
    <input type="text" id="new-col_fil_mascara" name="pedido[col_fil_mascara]" placeholder="Ingrese Color de Filo de Mascara" value="<?php echo s($pedido->col_fil_mascara); ?>"></div>
    
    <div><label for="new-dib_mascara">Dibujo de Mascara:</label>
    <input type="text" id="new-dib_mascara" name="pedido[dib_mascara]" placeholder="Ingrese Dibujo de Mascara" value="<?php echo s($pedido->dib_mascara); ?>"></div>
    
    <div><label for="new-col_dib_mascara">Color Dibujo de Mascara:</label>
    <input type="text" id="new-col_dib_mascara" name="pedido[col_dib_mascara]" placeholder="Ingrese Color Dibujo de Mascara" value="<?php echo s($pedido->col_dib_mascara); ?>"></div>
    
    <div><label for="new-bol_mascara">Bolsillo en Mascara:</label>
    <input type="text" id="new-bol_mascara" name="pedido[bol_mascara]" placeholder="Ingrese Bolsillo en Mascara" value="<?php echo s($pedido->bol_mascara); ?>"></div>
</fieldset>

<fieldset>
    <legend>Datos Individual</legend>
    <div><label for="new-tam_individual">Tamaño Individual</label>
    <input type="text" id="new-tam_individual" name="pedido[tam_individual]" placeholder="Ingrese Tamaño Individual" value="<?php echo s($pedido->tam_individual); ?>"></div>
    
    <div><label for="new-col_individual">Color de Individual:</label>
    <input type="text" id="new-col_individual" name="pedido[col_individual]" placeholder="Ingrese Color de Individual value="<?php echo s($pedido->col_individual); ?>"></div>
    
    <div><label for="new-mod_ven_individual">Modelo Ventana Individual:</label>
    <input type="text" id="new-mod_ven_individual" name="pedido[mod_ven_individual]" placeholder="Ingrese Modelo Ventana Individual" value="<?php echo s($pedido->mod_ven_individual); ?>"></div>
    
    <div><label for="new-fil_ven_individual">Filo Ventana Individual:</label>
    <input type="text" id="new-fil_ven_individual" name="pedido[fil_ven_individual]" placeholder="Ingrese Filo Ventana Individua" value="<?php echo s($pedido->fil_ven_individual); ?>"></div>
    
    <div><label for="new-hue_individual">Hueco en Individual:</label>
    <input type="text" id="new-hue_individual" name="pedido[hue_individual]" placeholder="Ingrese Hueco en Individual value="<?php echo s($pedido->hue_individual); ?>"></div>
    
    <div><label for="new-bol_individual">Bolsillo en Individual:</label>
    <input type="text" id="new-bol_individual" name="pedido[bol_individual]" placeholder="Bolsillo en Individual" value="<?php echo s($pedido->bol_individual); ?>"></div>
</fieldset>

<label for="observacion">Observaciones:</label>
<textarea id="observacion" name="pedido[observacion]"><?php echo s($pedido->observacion); ?></textarea>




