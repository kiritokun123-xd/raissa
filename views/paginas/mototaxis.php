<div class="fondo-info small-fondo">
    <div class="fondo-frase">
        <div class="frase">
            <h2 >Mira todas nuestras Mototaxis</h2>
        </div>
    </div>
    
</div>



<div class="contenedor-nosotros">
    <h2 data-aos="zoom-in-down">Mototaxis de todo tipo</h2>
    <?php foreach($mototaxis as $mototaxi) : ?>
        <div class="caja-mototaxis <?php echo ($mototaxi->id%2==0) ? 'invertir' : ''; ?>" data-aos="zoom-in-down">
            <img src="/imagenes/<?php echo $mototaxi->imagen; ?>" alt="">
            <div class="info">
                <h3><?php echo $mototaxi->nombre; ?></h3>
                <p><?php echo $mototaxi->descripcion; ?></p>
                <a class="especi" href  data-paso="<?php echo $mototaxi->id; ?>">Ver Especificaciones</a>
            </div>
        </div>
    <?php endforeach; ?>

</div>

<div class="popup-motos" id="popupespe">
    <div class="caja-popup-motos" id="info-mototaxi">
        
    </div>
</div>
