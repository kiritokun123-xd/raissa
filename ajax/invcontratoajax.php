<?php

foreach($contratos as $contrato) : 
    $color = '';
    if($contrato->estado == 'Debe'){
        $color = 'debe';
    }else{
        $color = 'no-debe';
    }
    echo '
    <tr>
        <td>' .date_format(date_create($contrato->fecha),'d-m-Y') .'</td>
        <td>' .$contrato->cliente .'</td>
        <td>' .$contrato->celular .'</td>
        <td>' .$contrato->vendedor .'</td>
        <td>' .$contrato->serie .'</td>
        <td>' .$contrato->observacion .'</td>
        <td ><span  class= '. $color .'>'. $contrato->estado .'</span></td>
        <td class="td-acciones"> 
            <div class="div-acciones">
                <a href="/logistica/actualizar-contrato?id=' .$contrato->id .'"  class="accion-actualizar"><i class="bx bxs-pencil"></i></a>
            </div>
        </td>
    </tr>';
    endforeach; 

?>

<script>
    verStock('.td-info-stock','popup-stock')
ampliarArticulo('.img-articulo','.contenido-img','.popup-img')
</script>