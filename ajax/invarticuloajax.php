<?php

foreach($articulos as $articulo) : 
    echo 
    '<tr>
        <td class="td-img" >
            <img class="img-articulo"  src="/imagenes/' . $articulo->imagen . '" alt="">
        </td>
        <td>'. $articulo->id .'</td>
        <td>'. $articulo->nombre .'</td>
        <td class="td-descripcion">'. $articulo->descripcion .'</td>
        <td>S/ '. $articulo->costo .'</td>
        <td>S/ '. $articulo->venta .'</td>
        <td class="td-stock">
            <div class="td-info-stock" data-paso="'. $articulo->id .'">
                <a href="" >Ver Stock</a>
            </div>
        </td>
        <td class="td-acciones"> 
            <div class="div-acciones">
                <a href="/logistica/actualizar-articulo?id='. $articulo->id .'" class="accion-actualizar"><i class="bx bxs-pencil"></i></a>
                <form  method="POST" class="" action="">
                    <input type="hidden" value="" name="id">
                    <input type="hidden" value="propiedad" name="tipo">
                    <i class="bx bxs-trash-alt bx-eliminar"><input class="input-eliminar" type="submit" value="" class=""></i>
                </form>
            </div>
        </td>
    </tr>';
endforeach;

?>

<script>
verStock('.td-info-stock','popup-stock')
ampliarArticulo('.img-articulo','.contenido-img','.popup-img')
stockArticuloAjax()
</script>