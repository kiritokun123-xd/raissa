<main class="main">
    <h2 class="main-titulo">Inventario Artículos</h2>

    <div class="gestion-articulo">
        <div class="gestion-titulo">
            <h3>Gestionar Artículos</h3>
        </div>
        <div class="gestion-caja">
            <a href="/logistica/nuevo-articulo" class="nuevo-articulo" >
                <p>Nuevo Artículo</p>
            </a>
            <a href="/excel/articulos" class="excel-articulo" >
                <p>Exportar Excel</p>
            </a>
            <div class="buscar-articulo">
                <label for="buscarid">Buscar por Código:</label>
                <input class="input-id" type="text" id="buscarid">
            </div>
            <div class="buscar-articulo">
                <label for="buscararticulo">Buscar por Descripción:</label>
                <input type="text" id="buscararticulo">
            </div>
        </div>
    </div>

    <div class="contenedor-tabla">
        <table class="table">
            <thead>
                <tr>
                    <th>codigo</th>
                    <th>descripcion</th>
                    <th>area</th>
                    <th>tipo</th>
                    <th>um</th>
                    <th>cantidad</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody id="invarticulo-body">
                <?php foreach($articulos as $articulo) : ?>
                <tr>
                    <td><?php echo $articulo->codigo; ?></td>
                    <td class="td-descripcion"><?php echo $articulo->descripcion; ?></td>
                    <td><?php echo $articulo->area; ?></td>
                    <td><?php echo $articulo->tipo; ?></td>
                    <td><?php echo $articulo->um; ?></td>
                    <td><?php echo $articulo->cantidad; ?></td>              
                    <td class="td-acciones"> 
                        <div class="div-acciones articulos">
                            <a href="/logistica/actualizar-articulo?id=<?php echo $articulo->id; ?>" class="accion-actualizar"><i class='bx bxs-pencil'></i></a>
                            <form  method="POST" class="form-articulos" action="">
                                <input type="number" class="cantidad" step="0.01" id="" name="cantidad" placeholder="" value="">
                                <input type="hidden" value="<?php echo $articulo->id; ?>" name="id">
                                <input type="hidden" value="<?php echo $articulo->cantidad; ?>" name="cantidadActual">
                                <input type="submit" class="boton1"value="Agregar" name="boton">
                                <input type="submit" class="boton2"value="Quitar" name="boton">
                                <!--<i class='bx bxs-trash-alt bx-eliminar'><input class="input-eliminar" type="submit" value="" class=""></i>-->
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
            <a href="/logistica/inventario-articulos?pag=<?php echo $i ?>" class="paginas"><?php echo $i ?></a>
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
                mensajeAlerta('!Éxito!','Se agregó <?php echo $cantidadModificada ?>','success','Ok')
            </script>
            <?php
        }
        if($resultado == 2){
            ?>
            <script>
                mensajeAlerta('!Éxito!','Se actualizó el artículo','success','Ok')
            </script>
            <?php
        }
        if($resultado == 3){
            ?>
            <script>
                mensajeAlerta('!Éxito!','Se quitó <?php echo $cantidadModificada ?>','success','Ok')
            </script>
            <?php
        }
    }
?>

