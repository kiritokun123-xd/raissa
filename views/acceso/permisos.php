<main class="main">
    <h2 class="main-titulo">Accesos - Actualizar Permisos</h2>

    <div class="popup-newarticulo" id="popup-newarticulo">
        <div class="contenido-newarticulo">
            <div class="newarticulo-head">
                <h4>Permisos de Usuario</h4>
                <a href="/acceso/usuario" class="btn-cerrar" id="btn-cerrar">
                    <i class='bx bx-arrow-back'></i>
                </a>
            </div>
            <div class="newarticulo-info">
                <form class="formulario" method="POST" enctype="multipart/form-data">
                    <?php include __DIR__ . '/formulario_permisos.php'; ?>
                    

                    <div class="btns-form">
                        <input type="submit" value="Actualizar" class="btn-guardar" id="btn-guardar">
                        <a href="/acceso/usuario" class="btn-cancelar" id="btn-cancelar">Atras</a>
                    </div>

                    
                </form>
            </div>
        </div>
    </div>
</main>