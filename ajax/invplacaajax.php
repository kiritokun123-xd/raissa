<?php

    foreach($placas as $placa) : 
    echo '
    <tr>
        <td>' .$placa->id .'</td>
        <td>' .$placa->nombre .'</td>
        <td>' .$placa->propietario .'</td>
        <td>' .$placa->vim .'</td>
        <td>' .$placa->motor .'</td>
        <td>' .$placa->titulo .'</td>
        <td>' .$placa->verificacion .'</td>
        <td class="td-acciones"> 
            <div class="div-acciones">
                <a href="/logistica/actualizar-placa?id=' .$placa->id .'"  class="accion-actualizar"><i class="bx bxs-pencil"></i></a>
                <form  method="POST" class="" action="">
                    <input type="hidden" value="" name="id">
                    <input type="hidden" value="propiedad" name="tipo">
                    <i class="bx bxs-trash-alt bx-eliminar"><input class="input-eliminar" type="submit" value="" class=""></i>
                </form>
            </div>
        </td>
        <td>' .$placa->estado .'</td>
    </tr>';
    endforeach; 

?>

<script>
    verStock('.td-info-stock','popup-stock')
ampliarArticulo('.img-articulo','.contenido-img','.popup-img')
</script>