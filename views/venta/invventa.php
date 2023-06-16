<main class="main">
    <h2 class="main-titulo">Ventas</h2>

    <div class="gestion-articulo">
        <div class="gestion-titulo">
            <h3>Gestionar Ventas</h3>
        </div>
        <div class="gestion-caja">
            <a href="/nuevo-venta" class="nuevo-articulo" >
                <p>Nueva Venta</p>
            </a>
            <div class="buscar-articulo">
                <label for="buscarclventas">Cliente:</label>
                <input class="input-id" type="text" id="buscarclventas">
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
                <?php foreach($ventas as $venta) : ?>
                <tr>
                    <td><?php echo $venta->id ?></td>
                    <td><?php echo date_format(date_create($venta->fecha_ini),'d-m-Y')?></td>
                    <td><?php echo $venta->cliente ?></td>
                    <td><?php echo $venta->color ?></td>                   
                    <td><?php echo $venta->moto ?></td>
                    <td><?php echo $venta->tipo ?></td>
                    <td><?php echo date_format(date_create($venta->fecha_ent),'d-m-Y') ?></td>

                    <td ><span  class="<?php  
                        if($venta->estado == 'Aprobado'){
                            echo "entclie";
                        }else if($venta->estado == 'Sin Enviar'){
                            echo "tallsol";
                        }else{
                            echo "fintie";
                        }
                    ?>"><?php echo $venta->estado ?></span></td>

                    <td class="td-acciones"> 
                        <div class="div-acciones">
                            <?php
                            if($venta->estado == "Sin Enviar"){
                            ?>
                                <a href="/actualizar-venta?id=<?php echo $venta->id; ?>" class="accion-actualizar"><i class='bx bxs-pencil'></i></a>
                            <?php
                            }
                            ?>
                            <div id="popupventa<?php echo $venta->id; ?>" class="pop-up-enviar" data-paso="<?php echo $venta->id; ?>">
                                <div class="contenido-enviar">
                                    <div class="titulo">
                                        <i class='bx bx-question-mark' ></i>
                                        <h3>¿Está seguro(a) de enviar Venta N°<?php echo $venta->id; ?>?</h3>
                                        <h4>Una vez enviado no se podrá volver a editar.</h4>
                                    </div>
                                    <div class="botones-enviar">
                                        <div class="btn-enviar">
                                            <form  method="POST" class="" action="">
                                                <input type="hidden" value="<?php echo $venta->id ?>" name="id">
                                                <input type="hidden" value="<?php echo $venta->estado ?>" name="estado">
                                        
                                                <input class="input-enviar" type="submit" value="Enviar" class="">                               

                                            </form>
                                        </div>
                                        <div class="btn-cancelar-venta">
                                            <a id="btncancelar<?php echo $venta->id; ?>" class="btn-cancelar-envio">Cancelar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                            if($venta->estado == "Sin Enviar"){
                            ?>
                            <a class="btn-confirmar-venta" data-paso="<?php echo $venta->id; ?>">

                                <i class='bx bxs-send btn-enviar-venta'></i>
                            </a>
                            <?php
                            }
                            ?>
                            <a class="verpedido" target="_blank" href="/documentos/pdfventa?id=<?php echo $venta->id;?>">Ver</a>
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
                mensajeAlerta('!Éxito!','Venta agregada Correctamente','success','Ok')
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

