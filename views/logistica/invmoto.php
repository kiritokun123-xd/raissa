<main class="main">
    <h2 class="main-titulo">Inventario Motos</h2>

    <div class="gestion-articulo">
        <div class="gestion-titulo">
            <h3>Gestionar Artículos</h3>
        </div>
        <div class="gestion-caja">
            <a href="/logistica/nueva-moto" class="nuevo-articulo" >
                <p>Nueva Moto</p>
            </a>
            <div class="buscar-articulo">
                <label for="buscarid">Buscar por Id:</label>
                <input class="input-id" type="number" id="buscarid">
            </div>
            <div class="buscar-articulo">
                <label for="buscarvim">Buscar Vim:</label>
                <input type="text" id="buscarvim">
            </div>
        </div>
    </div>

    <div class="contenedor-tabla">
        <table class="table">
            <thead>
                <tr>
                    <th>Imagen</th>
                    <th>Id</th>
                    <th>Modelo</th>
                    <th>Vim</th>
                    <th>Nº Motor</th>
                    <th>Dua</th>
                    <th>Color</th>
                    <th>Peso</th>
                    <th>Acciones</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody id="invmoto-body">
                <?php foreach($motos as $moto) : ?>
                <tr>
                    <td class="td-img" >
                        <img class="img-articulo"  src="/imagenes/<?php echo $moto->imagen; ?>" alt="">
                    </td>
                    <td><?php echo $moto->id ?></td>
                    <td><?php echo $moto->nombre ?></td>
                    <td><?php echo $moto->vim ?></td>
                    <td><?php echo $moto->motor ?></td>
                    <td><?php echo $moto->dua ?></td>
                    <td><?php echo $moto->color ?></td>
                    <td><?php echo $moto->peso ?>KG</td>
                    <td class="td-acciones"> 
                        <div class="div-acciones">
                            <a href="/logistica/actualizar-moto?id=<?php echo $moto->id; ?>" class="accion-actualizar"><i class='bx bxs-pencil'></i></a>
                            <form  method="POST" class="" action="">
                                <input type="hidden" value="" name="id">
                                <input type="hidden" value="moto" name="tipo">
                                <i class='bx bxs-trash-alt bx-eliminar'><input class="input-eliminar" type="submit" value="" class=""></i>
                            </form>
                        </div>
                    </td>
                    <td><?php echo $moto->estado ?></td>
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
                mensajeAlerta('!Éxito!','Artículo agregado Correctamente','success','Ok')
            </script>
            <?php
        }
        if($resultado == 2){
            ?>
            <script>
                mensajeAlerta('!Éxito!','Artículo Actualizado Correctamente','success','Ok')
            </script>
            <?php
        }
    }
?>

