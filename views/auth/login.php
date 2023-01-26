<main class="contenedor-login">
    <div class="caja-contenido">
        <div class="caja-imagen">
            <img class="img" src="../imagenes/fondo1.jpg" alt="">
        </div>
        <div class="caja-login">
            <h1>Iniciar Sesión</h1>
        
            <?php foreach($errores as $error ): ?>
                <div class="alerta error">
                    <?php echo $error; ?>
                </div>
            <?php endforeach; ?>
        
            <form class="formulario" method="POST" action="/login" >
                <label class="label" for="usuario">Usuario</label>
                <input class="input-text" type="text" name="nombre" placeholder="Tu usuario" id="usuario"  >

                <div class="espacio"></div>

                <label class="label" for="password">Contraseña</label>
                <input class="input-text" type="password" name="password" placeholder="Tu contraseña" id="passwaord"  >
        
                <input class="btn-login" type="submit" value="Iniciar Sesión" class=" boton boton-verde">
            </form>
        </div>
    </div>
</main>