<?php

    foreach($series as $serie) : 
    echo '
    <tr>
        <td>' .$serie->id .'</td>
        <td>' .$serie->numserie .'</td>
        <td>' .$serie->tipo .'</td>
        <td ><span  class='.  $serie->estado . '>'. $serie->estado .'</span></td>
        
        <td>' .date_format(date_create($serie->fecha),'d-m-Y') .'</td>
        <td class="td-acciones"> 
            <div class="div-acciones">
                <a href="/logistica/actualizar-serie?id=' .$serie->id .'"  class="accion-actualizar"><i class="bx bxs-pencil"></i></a>
            </div>
        </td>
    </tr>';
    endforeach; 

?>

<script>
    verStock('.td-info-stock','popup-stock')
ampliarArticulo('.img-articulo','.contenido-img','.popup-img')
</script>