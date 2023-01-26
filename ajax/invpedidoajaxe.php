<?php

    foreach($pedidos as $pedido) : 
    echo '
    <tr>
        <td>' .$pedido->id .'</td>
        <td>' .date_format(date_create($pedido->fecha_ini),'d-m-Y') .'</td>
        <td>' .$pedido->cliente .'</td>
        <td>' .$pedido->tipo .'</td>
        <td>' .$pedido->color .'</td>
        <td>' .date_format(date_create($pedido->fecha_ent),'d-m-Y') .'</td>
        <td class="td-acciones"> 
            <div class="div-acciones">
                <a href="/logistica/actualizar-pedidoE?id=' .$pedido->id .'"  class="accion-actualizar"><i class="bx bxs-pencil"></i></a>
                <a class="verpedido" target="_blank" href="/documentos/pdf2?id=' .$pedido->id .'">Ver</a>
            </div>
        </td>
    </tr>';
    endforeach; 

?>

<script>
    verStock('.td-info-stock','popup-stock')
ampliarArticulo('.img-articulo','.contenido-img','.popup-img')
</script>