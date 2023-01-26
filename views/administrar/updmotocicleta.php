<main class="main">
    <h2 class="main-titulo">Adminitrar Motocicleta - Actualizar Motocicleta</h2>
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
                <h4>Actualizar Motocicleta</h4>
                <a href="/administrar/motocicletas" class="btn-cerrar" id="btn-cerrar">
                    <i class='bx bx-arrow-back'></i>
                </a>
            </div>
            <div class="newarticulo-info">
                <form class="formulario" method="POST" enctype="multipart/form-data">
                    <?php include __DIR__ . '/formulario_motocicleta.php'; ?>

                    <div class="btns-form">
                        <input type="submit" value="Actualizar" class="btn-guardar" id="btn-guardar">
                        <a href="/administrar/motocicletas" class="btn-cancelar" id="btn-cancelar">Atras</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>