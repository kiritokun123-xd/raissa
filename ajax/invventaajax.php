<?php

    foreach($ventas as $venta) : 
        $colorp = "";
        if($venta->estado == 'Sin Enviar'){
            $colorp = "tallsol";
        }else{
            $colorp = "entclie";
        }
    echo '
    <tr>
        <td>' .$venta->id .'</td>
        <td>' .date_format(date_create($venta->fecha_ini),'d-m-Y') .'</td>
        <td>' .$venta->cliente .'</td>
        <td>' .$venta->color .'</td>
        <td>' .$venta->moto .'</td>
        <td>' .$venta->tipo .'</td>
        <td>' .date_format(date_create($venta->fecha_ent),'d-m-Y') .'</td>
        <td><span  class='.  $colorp . '>'. $venta->estado .'</span></td>
        <td class="td-acciones"> 
            <div class="div-acciones">' ;
                if($venta->estado != "Enviado"){
                    echo '<a href="/actualizar-venta?id='. $venta->id .'"  class="accion-actualizar"><i class="bx bxs-pencil"></i></a>';
                }
                echo 
                '<div id="popupventa'. $venta->id .'" class="pop-up-enviar" data-paso="'. $venta->id .'">
                    <div class="contenido-enviar">
                        <div class="titulo">
                            <i class="bx bx-question-mark" ></i>
                            <h3>¿Está seguro(a) de enviar Venta N°'. $venta->id .'?</h3>
                            <h4>Una vez enviado no se podrá volver a editar.</h4>
                        </div>
                        <div class="botones-enviar">
                            <div class="btn-enviar">
                                <form  method="POST" class="" action="">
                                    <input type="hidden" value="'. $venta->id .'" name="id">
                                    <input type="hidden" value="'. $venta->estado .'" name="estado">
                            
                                    <input class="input-enviar" type="submit" value="Enviar" class="">                               

                                </form>
                            </div>
                            <div class="btn-cancelar-venta">
                                <a id="btncancelar'. $venta->id .'" class="btn-cancelar-envio">Cancelar</a>
                            </div>
                        </div>
                    </div>
                </div>';

                echo '<a class="btn-confirmar-venta" data-paso="'. $venta->id .'">
                        <i class="bx bxs-send btn-enviar-venta"></i>
                    </a>';

                echo '<a class="verpedido" target="_blank" href="/documentos/pdfventa?id=' . $venta->id .'">Ver</a>';
                

            '</div>
        </td>
    </tr>';
    endforeach; 

?>

<script>
    verStock('.td-info-stock','popup-stock')
ampliarArticulo('.img-articulo','.contenido-img','.popup-img')
</script>