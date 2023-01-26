<?php
echo 
'<h3>'. $mototaxi->nombre .'</h3>
<div class="info-motos" >
    <div class="info-moto">
    <i class="bx bxs-check-circle"></i>
    <p>'. $mototaxi->info1 .'</p>
    </div>
    <div class="info-moto">
    <i class="bx bxs-check-circle"></i>
    <p>'. $mototaxi->info2 .'</p>
    </div>
    <div class="info-moto">
    <i class="bx bxs-check-circle"></i>
    <p>'. $mototaxi->info3 .'</p>
    </div>
    <div class="info-moto">
    <i class="bx bxs-check-circle"></i>
    <p>'. $mototaxi->info4 .'</p>
    </div>
    <div class="info-moto">
    <i class="bx bxs-check-circle"></i>
    <p>'. $mototaxi->info5 .'</p>
    </div>
    <div class="info-moto">
    <i class="bx bxs-check-circle"></i>
    <p>'. $mototaxi->info6 .'</p>
    </div>
</div>'



?>

<script>
verStock('.td-info-stock','popup-stock')
//ampliarArticulo('.img-articulo','.contenido-img','.popup-img')
</script>