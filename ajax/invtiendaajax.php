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
        <td>'. $articulo->stock .'</td>
        <td class="td-acciones"> 
            <div class="div-acciones td-stock">
                <a href="/tienda/actualizar-stock?id='. $articulo->id .'" class="accion-actualizar"><i class="bx bxs-pencil"></i></a>
            </div>
        </td>
    </tr>';
endforeach;

?>

<script>
verStock('.td-info-stock','popup-stock')
ampliarArticulo('.img-articulo','.contenido-img','.popup-img')
</script>