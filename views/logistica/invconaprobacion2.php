<main class="main">
    <h2 class="main-titulo">Aprobaciones Realizadas</h2>

    <div class="gestion-articulo">
        <div class="gestion-titulo">
            <h3>Gestionar Aprobaciones</h3>
        </div>
        <div class="gestion-caja botones">
            <a href="/logistica/sin-aprobacion" class="nuevo-articulo btn-s-aprob" >
                <p>Ver Ventas Sin Aprobar</p>
            </a>
            <a  class="nuevo-articulo btn-aprob" >
                <p>Ver Ventas Aprobadas</p>
            </a>
            <div class="buscar-articulo">
                <label for="buscarcl">Cliente:</label>
                <input class="input-id" type="text" id="buscarcl">
            </div>
            <div class="buscar-articulo">
                <label for="buscarcls">Serie:</label>
                <input class="input-id" type="text" id="buscarcls">
            </div>
            <div class="buscar-articulo">
                <label for="buscarclm">Motor:</label>
                <input class="input-id" type="text" id="buscarclm">
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
                    <th>Color</th>
                    <th>Moto</th>
                    <th>Tipo</th>
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
                    <td><?php echo $pedido->color ?></td>                   
                    <td><?php echo $pedido->moto ?></td>
                    <td><?php echo $pedido->tipo ?></td>
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

                            <a href="/logistica/actualizar-aprobacion?id=<?php echo $pedido->id; ?>" class="accion-actualizar"><i class='bx bxs-pencil'></i></a>
                            <a class="verpedido" target="_blank" href="/documentos/pdf?id=<?php echo $pedido->id;?>">Ver</a>
                            <a class="verpedidoambos" target="_blank" href="/documentos/pdfPT_OT?id=<?php echo $pedido->id;?>">Ver Ambos</a>
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
            <a href="/logistica/con-aprobacion?pag=<?php echo $i ?>" class="paginas"><?php echo $i ?></a>
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
                mensajeAlerta('!Éxito!','Aprobación agregada Correctamente','success','Ok')
            </script>
            <?php
        }
        if($resultado == 2){
            ?>
            <script>
                mensajeAlerta('!Éxito!','Aprobación Actualizada Correctamente','success','Ok')
            </script>
            <?php
        }
        if($resultado == 3){
            ?>
            <script>
                mensajeAlerta('!Éxito!','Aprobación Enviada Correctamente','success','Ok')
            </script>
            <?php
        }
        if($resultado == 4){
            ?>
            <script>
                mensajeAlerta('!Error!','Aprobación ya enviada','error','Ok')
            </script>
            <?php
        }
        if($resultado == 5){
            ?>
            <script>
                mensajeAlerta('!Error!','Orden de Trimoto sin Pedido de Tapiz','error','Ok')
            </script>
            <?php
        }
    }
?>

