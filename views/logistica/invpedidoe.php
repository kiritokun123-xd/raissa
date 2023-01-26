<main class="main">
    <h2 class="main-titulo">Pedidos Estructuras</h2>

    <div class="gestion-articulo">
        <div class="gestion-titulo">
            <h3>Gestionar Pedidos</h3>
        </div>
        <div class="gestion-caja">
            <a href="/logistica/nuevo-pedidoE" class="nuevo-articulo" >
                <p>Nuevo Pedido</p>
            </a>
            <div class="buscar-articulo">
                <label for="buscarcle">Buscar por Cliente:</label>
                <input class="input-id" type="text" id="buscarcle">
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
                    <th>Despacho</th>
                    <th>Destino</th>
                    <th>Fecha entrega</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                    
                </tr>
            </thead>
            <tbody id="invpedido-body">
                <?php foreach($pedidos as $pedido) : ?>
                <tr>
                    <td><?php echo $pedido->id ?></td>
                    <td><?php echo date_format(date_create($pedido->fecha_ini),'d-m-Y')?></td>
                    <td><?php echo $pedido->cliente ?></td>
                    <td><?php echo $pedido->despacho ?></td>
                    <td><?php echo $pedido->destino ?></td>
                    <td><?php echo date_format(date_create($pedido->fecha_ent),'d-m-Y') ?></td>
                    <td ><span  class="<?php  
                        if($pedido->estado == 'Taller Sol'){
                            echo "tallsol";
                        }else if($pedido->estado == 'Taller Ens'){
                            echo "tallens";
                        }else if($pedido->estado == 'Fin Ens'){
                            echo "finens";
                        }else if($pedido->estado == 'Fin Tie'){
                            echo "fintie";
                        }else if($pedido->estado == 'Ent Clie'){
                            echo "entclie";
                        }
                    ?>"><?php echo $pedido->estado ?></span></td>
                    <td class="td-acciones"> 
                        <div class="div-acciones">
                            <a href="/logistica/actualizar-pedidoE?id=<?php echo $pedido->id; ?>" class="accion-actualizar"><i class='bx bxs-pencil'></i></a>
                            <a class="verpedido" target="_blank" href="/documentos/pdf2?id=<?php echo $pedido->id;?>">Ver</a>
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
            <a href="/logistica/pedidoE?pag=<?php echo $i ?>" class="paginas"><?php echo $i ?></a>
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
    }
?>

