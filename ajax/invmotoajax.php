<?php

    foreach($motos as $moto) : 
    echo '
    <tr>
        <td class="td-img" >
            <img class="img-articulo"  src="/imagenes/'. $moto->imagen .'" alt="">
        </td>
        <td>'. $moto->id .'</td>
        <td>'. $moto->nombre .'</td>
        <td>'. $moto->vim .'</td>
        <td>'. $moto->motor .'</td>
        <td>'. $moto->dua .'</td>
        <td>'. $moto->color .'</td>
        <td>'. $moto->peso .'KG</td>
        <td class="td-acciones"> 
            <div class="div-acciones">
                <a href="/logistica/actualizar-moto?id='. $moto->id .'" class="accion-actualizar"><i class="bx bxs-pencil"></i></a>
                <form  method="POST" class="" action="">
                    <input type="hidden" value="" name="id">
                    <input type="hidden" value="moto" name="tipo">
                    <i class="bx bxs-trash-alt bx-eliminar"><input class="input-eliminar" type="submit" value="" class=""></i>
                </form>
            </div>
        </td>
        <td>'. $moto->estado .'</td>
    </tr>';
    endforeach; 

?>

<script>
verStock('.td-info-stock','popup-stock')
ampliarArticulo('.img-articulo','.contenido-img','.popup-img')
</script>