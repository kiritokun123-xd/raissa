<main class="main">
    <h2 class="main-titulo">Administrar Cargueros</h2>

    <div class="gestion-articulo">
        <div class="gestion-titulo">
            <h3>Gestionar Cargueros</h3>
        </div>
        <div class="gestion-caja">
            <a href="/administrar/nuevo-carguero" class="nuevo-articulo" >
                <p>Nuevo Carguero</p>
            </a>
        </div>
    </div>

    <div class="contenedor-tabla">
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Imagen</th>
                    <th>Nombre</th>
                    <th class="th-descripcion">Descripción</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody id="invarticulo-body">
                <?php foreach($cargueros as $carguero) : ?>
                <tr>
                    <td><?php echo $carguero->id; ?></td>
                    <td class="td-img" >
                        <img class="img-articulo"  src="/imagenes/<?php echo $carguero->imagen; ?>" alt="<?php echo $carguero->nombre; ?>">
                    </td>
                    <td><?php echo $carguero->nombre; ?></td>
                    <td class="td-descripcion"><?php echo $carguero->descripcion; ?></td>
                    <td class="td-acciones"> 
                        <div class="div-acciones">
                            <a href="/administrar/actualizar-carguero?id=<?php echo $carguero->id; ?>" class="accion-actualizar"><i class='bx bxs-pencil'></i></a>
                            <form  method="POST" class="" action="">
                                <input type="hidden" value="" name="id">
                                <input type="hidden" value="propiedad" name="tipo">
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
            <a href="/logistica/inventario-cargueros?pag=<?php echo $i ?>" class="paginas"><?php echo $i ?></a>
        <?php endfor; ?>
        </div>
    </div>


</main>
<div class="popup-img">
    <div class="contenido-img">
        
    </div>
</div>

<div class="popup-stock" id="popup-stock">
    <div class="contenido-stock" id="contenido-stock">
        
    </div>
</div>

<?php 
    if($resultado){
        if($resultado == 1){
            ?>
            <script>
                mensajeAlerta('!Éxito!','Carguero agregado Correctamente','success','Ok')
            </script>
            <?php
        }
        if($resultado == 2){
            ?>
            <script>
                mensajeAlerta('!Éxito!','Carguero Actualizado Correctamente','success','Ok')
            </script>
            <?php
        }
    }
?>

