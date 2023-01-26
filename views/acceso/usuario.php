<main class="main">
    <h2 class="main-titulo">Accesos</h2>

    <div class="gestion-articulo">
        <div class="gestion-titulo">
            <h3>Gestión de Usuarios</h3>
        </div>
        <div class="gestion-caja">
            <a href="/acceso/nuevo-usuario" class="nuevo-articulo" >
                <p>Nueo Usuario</p>
            </a>
            <div class="buscar-articulo">
                <label for="buscarid">Buscar por Id:</label>
                <input class="input-id" type="number" id="buscarid">
            </div>
            <div class="buscar-articulo">
                <label for="buscarid">Buscar Nombre:</label>
                <input type="text" id="buscarnombre">
            </div>
        </div>
    </div>

    <div class="contenedor-tabla">
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Usuario</th>
                    <th>Nombre</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody id="usuario-body">
                <?php foreach($usuarios as $usuario) : ?>
                <tr>
                    <td><?php echo $usuario->id ?></td>
                    <td><?php echo $usuario->nombre ?></td>
                    <td><?php echo $usuario->nick ?></td>
                    <td class="td-acciones"> 
                        <div class="div-acciones">
                            <a href="/acceso/actualizar-usuario?id=<?php echo $usuario->id; ?>" class="accion-actualizar"><i class='bx bxs-pencil'></i></a>
                            <a href="/acceso/permiso-usuario?id=<?php echo $usuario->id; ?>" class="accion-permiso"><i class='bx bx-list-check'></i></a>
                            <form  method="POST" class="" action="">
                                <input type="hidden" value="" name="id">
                                <input type="hidden" value="usuario" name="tipo">
                                <i class='bx bxs-trash-alt bx-eliminar'><input class="input-eliminar" type="submit" value="" class=""></i>
                            </form>
                        </div>
                    </td>
                </tr>
                <?php endforeach; ?>
             
            </tbody>
        </table>
    </div>

    <div class="gestion-articulo">
        <div class="gestion-caja paginador">
        <?php for($i = 1 ;$i<=$totalLink; $i++) : ?>
            <a href="/logistica/inventario-motos?pag=<?php echo $i ?>" class="paginas"><?php echo $i ?></a>
        <?php endfor; ?>
        </div>
    </div>

</main>
<div class="popup-img">
    <div class="contenido-img">
        
    </div>
</div>
<?php 
    if($resultado){
        if($resultado == 1){
            ?>
            <script>
                mensajeAlerta('!Éxito!','Usuario agregado Correctamente','success','Ok')
            </script>
            <?php
        }
        if($resultado == 2){
            ?>
            <script>
                mensajeAlerta('!Éxito!','Usuario Actualizado Correctamente','success','Ok')
            </script>
            <?php
        }
        if($resultado == 3){
            ?>
            <script>
                mensajeAlerta('!Éxito!','Permiso actualizado Correctamente','success','Ok')
            </script>
            <?php
        }
    }
?>