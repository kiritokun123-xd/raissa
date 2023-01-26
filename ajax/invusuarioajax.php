<?php

    foreach($usuarios as $usuario) : 
    echo '
    <tr>
        <td>'. $usuario->id .'</td>
        <td>'. $usuario->nombre .'</td>
        <td class="td-acciones"> 
            <div class="div-acciones">
                <a href="/acceso/actualizar-usuario?id='. $usuario->id .'" class="accion-actualizar"><i class="bx bxs-pencil"></i></a>
                <a href="/acceso/permiso-usuario?id='. $usuario->id .'" class="accion-permiso"><i class="bx bx-list-check"></i></a>
                <form  method="POST" class="" action="">
                    <input type="hidden" value="" name="id">
                    <input type="hidden" value="usuario" name="tipo">
                    <i class="bx bxs-trash-alt bx-eliminar"><input class="input-eliminar" type="submit" value="" class=""></i>
                </form>
            </div>
        </td>
    </tr>';

    endforeach; 

?>
