<?php

    foreach($motores as $motor) : 
    echo '
    <tr>
        <td>' .$motor->id .'</td>
        <td>' .$motor->nummotor .'</td>
        <td>' .$motor->tipo .'</td>
        <td ><span  class='.  $motor->estado . '>'. $motor->estado .'</span></td>
        
        <td>' .date_format(date_create($motor->fecha),'d-m-Y') .'</td>
        <td class="td-acciones"> 
            <div class="div-acciones">
                <a href="/logistica/actualizar-motor?id=' .$motor->id .'"  class="accion-actualizar"><i class="bx bxs-pencil"></i></a>
            </div>
        </td>
    </tr>';
    endforeach; 

?>

<script>
    verStock('.td-info-stock','popup-stock')
ampliarArticulo('.img-articulo','.contenido-img','.popup-img')
</script>