<main class="main">
    <h2 class="main-titulo">Idicador Rotación de Mercancia - Nuevo</h2>
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
                <h4>Nuevos Datos</h4>
                <a href="/indicador/rot-mercancia" class="btn-cerrar" id="btn-cerrar">
                    <i class='bx bx-arrow-back'></i>
                </a>
            </div>
            <div class="newarticulo-info">
                <form class="formulario" method="POST" action="" >

                    <?php include __DIR__ . '/formulario1.php'; ?> 
                    

                    <div class="btns-form">
                        <input type="submit" value="Agregar" class="btn-guardar" id="btn-guardar">
                        <a href="/indicador/rot-mercancia" class="btn-cancelar" id="btn-cancelar">Atras</a>
                    </div>

                    
                </form>
            </div>
        </div>
    </div>
</main>