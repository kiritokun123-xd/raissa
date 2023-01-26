<label for="new-usuario">Usuario:</label>
<input type="text" id="new-usuario" name="usuario[nombre]" placeholder="Ingrese usuario" value="<?php echo s($usuario->nombre); ?>" disabled>

<label for="new-password">Permisos:</label>
<?php $i = 0; foreach($usuariopermisos as $usuariopermiso){ ?>
    
    <?php $permisos = ['Administración','Ventas','Inventariado','PaginaWeb']; ?>
    <div class="checkbox">
        
        <label for=""><input class="switch" type="checkbox" name="checkbox[]" value="<?php echo s($usuariopermiso->permisoId); ?>" <?php echo ($usuariopermiso->permitido) == 'si' ?  "checked" : "" ?>><?php echo $permisos[$i]; ?></label>
    </div>
<?php $i++ ;} ?>
