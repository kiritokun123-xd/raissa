<main class="main">
    <h2 class="main-titulo">Serie - Nueva Serie</h2>
    <?php
        foreach($errores as $error){ ?>
            <div class="alerta error">
            <?php echo $error ?>
            </div>
            <?php
        }
    ?>

    <div class="popup-newarticulo" id="popup-newarticulo">
        <div class="contenido-newarticulo">
            <div class="newarticulo-head">
                <h4>Nueva Serie</h4>
                <a href="/logistica/serie" class="btn-cerrar" id="btn-cerrar">
                    <i class='bx bx-arrow-back'></i>
                </a>
            </div>
            <div class="newarticulo-info">
                <form class="formulario" method="POST" action="" >

                    <?php include __DIR__ . '/formulario_series.php'; ?> 
                    

                    <div class="btns-form">
                        <input type="submit" value="Agregar" class="btn-guardar" id="btn-guardar">
                        <a href="/logistica/serie" class="btn-cancelar" id="btn-cancelar">Atras</a>
                    </div>

                    
                </form>
            </div>
        </div>
    </div>
</main>