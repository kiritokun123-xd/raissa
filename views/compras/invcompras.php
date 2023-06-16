<main class="main">
    <h2 class="main-titulo">Compras</h2>

    <div class="gestion-articulo">
        <div class="gestion-titulo">
            <h3>Gestionar Compras</h3>
        </div>
        <div class="gestion-caja">
            <a href="/nueva-compra" class="nuevo-articulo" >
                <p>Nueva Compra</p>
            </a>       
        </div>
    </div>

    <div class="contenedor-tabla">
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Descripción</th>
                    <th>Fecha</th>                                       
                    <th>Acciones</th>                                       
                </tr>
            </thead>
            <tbody id="invpedido-body">
                <?php foreach($compras as $compra) : ?>
                <tr>
                    <td><?php echo $compra->id ?></td>
                    <td><?php echo $compra->descripcion ?></td>
                    <td><?php echo date_format(date_create($compra->fecha),'d-m-Y')?></td>
                    <td class="td-acciones"> 
                        <div class="div-acciones">
                            
                            <a class="verpedido" target="_blank" href="/documentos/pdfcompra?id=<?php echo $compra->id;?>">Ver</a>                     
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
            <a href="/logistica/pedido?pag=<?php echo $i ?>" class="paginas"><?php echo $i ?></a>
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
                mensajeAlerta('!Éxito!','Compra agregada Correctamente','success','Ok')
            </script>
            <?php
        }
        if($resultado == 2){
            ?>
            <script>
                mensajeAlerta('!Éxito!','Venta Actualizada Correctamente','success','Ok')
            </script>
            <?php
        }
        if($resultado == 3){
            ?>
            <script>
                mensajeAlerta('!Éxito!','Venta Enviada Correctamente','success','Ok')
            </script>
            <?php
        }
        if($resultado == 4){
            ?>
            <script>
                mensajeAlerta('!Error!','Venta ya enviada','error','Ok')
            </script>
            <?php
        }
    }
?>

