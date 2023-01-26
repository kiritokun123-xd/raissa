<main class="main">
    <h2 class="main-titulo">Inventario Soldadura</h2>

    <div class="gestion-articulo">
        <div class="gestion-titulo">
            <h3>Gestionar Artículos</h3>
        </div>
        <div class="gestion-caja">
            <div class="buscar-articulo">
                <label for="buscarid">Buscar por Id:</label>
                <input class="input-id" type="number" id="buscarid">
            </div>
            <div class="buscar-articulo">
                <label for="buscararticulo">Buscar Artículo:</label>
                <input type="text" id="buscararticulo">
            </div>
        </div>
    </div>

    <div class="contenedor-tabla">
        <table class="table">
            <thead>
                <tr>
                    <th>Imagen</th>
                    <th>Id</th>
                    <th>Artículo</th>
                    <th class="th-descripcion">Descripción</th>
                    <th>Costo</th>
                    <th>Venta</th>
                    <th>Stock</th>
                    <th>Editar</th>
                </tr>
            </thead>
            <tbody id="invsoldadura-body">
                <?php foreach($articulos as $articulo) : ?>
                <tr>
                    <td class="td-img" >
                        <img class="img-articulo"  src="/imagenes/<?php echo $articulo->imagen; ?>" alt="<?php echo $articulo->nombre; ?>">
                    </td>
                    <td><?php echo $articulo->id; ?></td>
                    <td><?php echo $articulo->nombre; ?></td>
                    <td class="td-descripcion"><?php echo $articulo->descripcion; ?></td>
                    <td>S/ <?php echo $articulo->costo; ?></td>
                    <td>S/ <?php echo $articulo->venta; ?></td>
                    <td><?php echo $articulo->stock; ?></td>
                    <td class="td-acciones"> 
                        <div class="div-acciones td-stock">
                            <a href="/soldadura/actualizar-stock?id=<?php echo $articulo->id; ?>" class="accion-actualizar"><i class="bx bxs-pencil"></i></a>
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
            <a href="/soldadura/inventario?pag=<?php echo $i ?>" class="paginas"><?php echo $i ?></a>
        <?php endfor; ?>
        </div>
    </div>

</main>
<div class="popup-img">
    <div class="contenido-img">
        
    </div>
</div>

<div class="popup-stock" id="popup-stock">
    <div class="contenido-stock" id="cont-stock">
        
    </div>
</div>

<?php 
    if($resultado){
        if($resultado == 2){
            ?>
            <script>
                mensajeAlerta('!Éxito!','Stock Actualizado Correctamente','success','Ok')
            </script>
            <?php
        }
    }
?>