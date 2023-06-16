<main class="main">
    <h2 class="main-titulo">Pedidos Tapiz Simple</h2>

    <div class="gestion-articulo">
        <div class="gestion-titulo">
            <h3>Gestionar Pedidos</h3>
        </div>
        <div class="gestion-caja">
            <a href="/logistica/nuevo-pedidoTS" class="nuevo-articulo" >
                <p>Nuevo Pedido</p>
            </a>
            <div class="buscar-articulo">
                <label for="buscarcltap">Buscar por Cliente:</label>
                <input class="input-id" type="text" id="buscarcltap">
            </div>
        </div>
    </div>

    <div class="contenedor-tabla">
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Fecha Ini</th>
                    <th>Cliente</th>
                    <th>Fecha entrega</th>
                    <th>Acciones</th>
                    
                </tr>
            </thead>
            <tbody id="invpedido-body">
                <?php foreach($pedidos as $pedido) : ?>
                <tr>
                    <td><?php echo $pedido->id ?></td>
                    <td><?php echo date_format(date_create($pedido->fecha_ini),'d-m-Y')?></td>
                    <td><?php echo $pedido->cliente ?></td>
                    <td><?php echo date_format(date_create($pedido->fecha_fin),'d-m-Y') ?></td>
                    <td class="td-acciones"> 
                        <div class="div-acciones">
                            <a href="/logistica/actualizar-pedidoTS?id=<?php echo $pedido->id; ?>" class="accion-actualizar"><i class='bx bxs-pencil'></i></a>
                            <a class="verpedido" target="_blank" href="/documentos/pdfTS?id=<?php echo $pedido->id;?>">Ver</a>
                            <a class="verpedidoambos" target="_blank" href="/documentos/pdfOT_PT?id=<?php echo $pedido->id;?>">Ver Ambos</a>
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
            <a href="/logistica/pedidoT?pag=<?php echo $i ?>" class="paginas"><?php echo $i ?></a>
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
                mensajeAlerta('!Éxito!','Pedido agregado Correctamente','success','Ok')
            </script>
            <?php
        }
        if($resultado == 2){
            ?>
            <script>
                mensajeAlerta('!Éxito!','Pedido Actualizado Correctamente','success','Ok')
            </script>
            <?php
        }
        if($resultado == 3){
            ?>
            <script>
                mensajeAlerta('!Error!','Número de Orden de Trimoto no existe','error','Ok')
            </script>
            <?php
        }
        if($resultado == 4){
            ?>
            <script>
                mensajeAlerta('!Error!','No existe Orden Trimoto','error','Ok')
            </script>
            <?php
        }
    }
?>

