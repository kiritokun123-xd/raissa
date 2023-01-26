<?php
echo 
'<h3>'. $motocicleta->nombre .'</h3>
<div class="info-motos" >
    <div class="info-moto">
    <i class="bx bxs-check-circle"></i>
    <p>'. $motocicleta->info1 .'</p>
    </div>
    <div class="info-moto">
    <i class="bx bxs-check-circle"></i>
    <p>'. $motocicleta->info2 .'</p>
    </div>
    <div class="info-moto">
    <i class="bx bxs-check-circle"></i>
    <p>'. $motocicleta->info3 .'</p>
    </div>
    <div class="info-moto">
    <i class="bx bxs-check-circle"></i>
    <p>'. $motocicleta->info4 .'</p>
    </div>
    <div class="info-moto">
    <i class="bx bxs-check-circle"></i>
    <p>'. $motocicleta->info5 .'</p>
    </div>
    <div class="info-moto">
    <i class="bx bxs-check-circle"></i>
    <p>'. $motocicleta->info6 .'</p>
    </div>
</div>'



?>

<script>
verStock('.td-info-stock','popup-stock')
//ampliarArticulo('.img-articulo','.contenido-img','.popup-img')
</script>