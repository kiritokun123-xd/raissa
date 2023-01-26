<div class="fondo-info small-fondo">
    <div class="fondo-frase">
        <div class="frase">
            <h2 >Mira todos nuestros Cargueros</h2>
        </div>
    </div>
    
</div>



<div class="contenedor-nosotros">
    <h2 data-aos="zoom-in-down">Cargueros de todo tipo</h2>
    <?php foreach($cargueros as $carguero) : ?>
        <div class="caja-mototaxis <?php echo ($carguero->id%2==0) ? 'invertir' : ''; ?>" data-aos="zoom-in-down">
            <img src="/imagenes/<?php echo $carguero->imagen; ?>" alt="">
            <div class="info">
                <h3><?php echo $carguero->nombre; ?></h3>
                <p><?php echo $carguero->descripcion; ?></p>
                <a class="especi" href  data-paso="<?php echo $carguero->id; ?>">Ver Especificaciones</a>
            </div>
        </div>
    <?php endforeach; ?>

</div>

<div class="popup-motos" id="popupespe">
    <div class="caja-popup-motos" id="info-carguero">
        
    </div>
</div>
