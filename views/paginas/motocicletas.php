<div class="fondo-info small-fondo">
    <div class="fondo-frase">
        <div class="frase">
            <h2 >Mira todas nuestras Motocicletas</h2>
        </div>
    </div>
    
</div>



<div class="contenedor-nosotros">
    <h2 data-aos="zoom-in-down">Motocicletas de todo tipo</h2>
    <?php foreach($motocicletas as $motocicleta) : ?>
        <div class="caja-mototaxis <?php echo ($motocicleta->id%2==0) ? 'invertir' : ''; ?>" data-aos="zoom-in-down">
            <img src="/imagenes/<?php echo $motocicleta->imagen; ?>" alt="">
            <div class="info">
                <h3><?php echo $motocicleta->nombre; ?></h3>
                <p><?php echo $motocicleta->descripcion; ?></p>
                <a class="especi" href  data-paso="<?php echo $motocicleta->id; ?>">Ver Especificaciones</a>
            </div>
        </div>
    <?php endforeach; ?>

</div>

<div class="popup-motos" id="popupespe">
    <div class="caja-popup-motos" id="info-motocicleta">
        
    </div>
</div>
