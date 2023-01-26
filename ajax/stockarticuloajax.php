<?php
echo 
'<div class="stock-img">
    <img id="img-articulo" src="/imagenes/' . $articulo->imagen . '" alt="">
</div>
<div class="stock-info">
    <div class="stock-articulo">
        <h4>'. $articulo->nombre .'</h4>
    </div>
    <div class="stock-almacen">
        <div class="stock-cant">
            <label for="stock-cant">Tienda</label>
            <input id="stock-cant" type="text" value="';
            if(($articuloalmacen[0]->almacenId == 1)){
                echo $articuloalmacen[0]->stock;
            }else if(($articuloalmacen[1]->almacenId == 1)){
                echo $articuloalmacen[1]->stock;
            }else if(($articuloalmacen[2]->almacenId == 1)){
                echo $articuloalmacen[2]->stock;
            }
        echo '">
        </div>
        <div class="stock-cant">
            <label for="stock-cant">Ensamblaje</label>
            <input id="stock-cant" type="text" value="';
            if(($articuloalmacen[1]->almacenId == 2)){
                echo $articuloalmacen[1]->stock;
            }else if(($articuloalmacen[0]->almacenId == 2)){
                echo $articuloalmacen[0]->stock;
            }else if(($articuloalmacen[2]->almacenId == 2)){
                echo $articuloalmacen[2]->stock;
            }
            echo '">
        </div>
        <div class="stock-cant">
            <label for="stock-cant">Soldadura</label>
            <input id="stock-cant" type="text" value="'; 
            if(($articuloalmacen[2]->almacenId == 3)){
                echo $articuloalmacen[2]->stock;
            }else if(($articuloalmacen[0]->almacenId == 3)){
                echo $articuloalmacen[0]->stock;
            }else if(($articuloalmacen[1]->almacenId == 3)){
                echo $articuloalmacen[1]->stock;
            }
            echo '">
        </div>
    </div>
</div>'



?>

<script>
verStock('.td-info-stock','popup-stock')
//ampliarArticulo('.img-articulo','.contenido-img','.popup-img')
</script>