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
                    <th>Id</th>
                    <th>Artículo</th>
                    <th class="th-descripcion">Descripción</th>
                    <th>Costo</th>
                    <th>Venta</th>
                    <th>Stock</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody id="invarticulo-body">
                <?php foreach($articulos as $articulo) : ?>
                <tr>
                    <td><?php echo $articulo->id; ?></td>
                    <td><?php echo $articulo->nombre; ?></td>
                    <td class="td-descripcion"><?php echo $articulo->descripcion; ?></td>
                    <td>S/ <?php echo $articulo->costo; ?></td>
                    <td>S/ <?php echo $articulo->venta; ?></td>
                    <td class="td-stock" >
                        <div class="td-info-stock"  data-paso="<?php echo $articulo->id; ?>">
                            <a href="" >Ver Stock</a>
                        </div>
                    </td>
                    <td class="td-acciones"> 
                        <div class="div-acciones">
                            <a href="/logistica/actualizar-articulo?id=<?php echo $articulo->id; ?>" class="accion-actualizar"><i class='bx bxs-pencil'></i></a>
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

