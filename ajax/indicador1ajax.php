
<?php

    foreach($indicadores as $indicadore) : 
    echo '
    <tr>
        <td>' .$indicadore->id .'</td>
        <td>' .date_format(date_create($indicadore->fecha),'d-m-Y') .'</td>
        <td>' .$indicadore->ven_acumulada .'</td>
        <td>' .$indicadore->inv_inicial .'</td>
        <td>' .$indicadore->inv_entrante .'</td>
        <td>' .$indicadore->inv_final .'</td>
        <td>' .$indicadore->inv_prom .'</td>
        <td>' .$indicadore->rot_mercancia .'</td>
        <td class="td-acciones"> 
            <div class="div-acciones">
                <a href="/indicador/actualizar-indicador?id=' .$indicadore->id .'"  class="accion-actualizar"><i class="bx bxs-pencil"></i></a>
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
</script>