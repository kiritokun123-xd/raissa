<?php

    foreach($pedidos as $pedido) : 
    echo '
    <tr>
        <td>' .$pedido->id .'</td>
        <td>' .date_format(date_create($pedido->fecha_ini),'d-m-Y') .'</td>
        <td>' .$pedido->cliente .'</td>
        <td>' .date_format(date_create($pedido->fecha_fin),'d-m-Y') .'</td>
        <td class="td-acciones"> 
            <div class="div-acciones">
                <a href="/logistica/actualizar-pedidoTS?id=' .$pedido->id .'"  class="accion-actualizar"><i class="bx bxs-pencil"></i></a>
                <a class="verpedido" target="_blank" href="/documentos/pdfTS?id=' .$pedido->id .'">Ver</a>
            </div>
        </td>
    </tr>';
    endforeach; 

?>

<script>
    verStock('.td-info-stock','popup-stock')
ampliarArticulo('.img-articulo','.contenido-img','.popup-img')
</script>