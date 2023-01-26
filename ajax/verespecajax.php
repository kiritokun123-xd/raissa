<?php
echo 
'<h3>'. $carguero->nombre .'</h3>
<div class="info-motos" >
    <div class="info-moto">
    <i class="bx bxs-check-circle"></i>
    <p>'. $carguero->info1 .'</p>
    </div>
    <div class="info-moto">
    <i class="bx bxs-check-circle"></i>
    <p>'. $carguero->info2 .'</p>
    </div>
    <div class="info-moto">
    <i class="bx bxs-check-circle"></i>
    <p>'. $carguero->info3 .'</p>
    </div>
    <div class="info-moto">
    <i class="bx bxs-check-circle"></i>
    <p>'. $carguero->info4 .'</p>
    </div>
    <div class="info-moto">
    <i class="bx bxs-check-circle"></i>
    <p>'. $carguero->info5 .'</p>
    </div>
    <div class="info-moto">
    <i class="bx bxs-check-circle"></i>
    <p>'. $carguero->info6 .'</p>
    </div>
</div>'



?>

<script>
verStock('.td-info-stock','popup-stock')
//ampliarArticulo('.img-articulo','.contenido-img','.popup-img')
</script>