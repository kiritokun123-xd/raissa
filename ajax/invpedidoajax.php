<?php

    foreach($pedidos as $pedido) : 
        $colorp = "";
        if($pedido->estado == 'Taller Sol'){
            $colorp = "tallsol";
        }else if($pedido->estado == 'Taller Ens'){
            $colorp = "tallens";
        }else if($pedido->estado == 'Fin Ens'){
            $colorp = "finens";
        }else if($pedido->estado == 'Fin Tie'){
            $colorp = "fintie";
        }else if($pedido->estado == 'Ent Clie'){
            $colorp = "entclie";
        }
    echo '
    <tr>
        <td>' .$pedido->id .'</td>
        <td>' .date_format(date_create($pedido->fecha_ini),'d-m-Y') .'</td>
        <td>' .$pedido->cliente .'</td>
        <td>' .$pedido->color .'</td>
        <td>' .$pedido->moto .'</td>
        <td>' .$pedido->tipo .'</td>
        <td>' .date_format(date_create($pedido->fecha_ent),'d-m-Y') .'</td>
        <td><span  class='.  $colorp . '>'. $pedido->estado .'</span></td>
        <td class="td-acciones"> 
        <div class="div-acciones">
        <a href="/logistica/actualizar-pedido?id=' .$pedido->id .'"  class="accion-actualizar"><i class="bx bxs-pencil"></i></a>
        <a class="verpedido" target="_blank" href="/documentos/pdf?id=' .$pedido->id .'">Ver</a>
        <a class="verpedidoambos" target="_blank" href="/documentos/pdfPT_OT?id=' .$pedido->id .'">Ver Ambos</a>
        </div>
        </td>
    </tr>';
    endforeach; 

?>

<script>
    verStock('.td-info-stock','popup-stock')
ampliarArticulo('.img-articulo','.contenido-img','.popup-img')
</script>