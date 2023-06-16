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
                <?php foreach($aprobaciones as $aprobacion) : ?>
                <tr>
                    <td><?php echo $aprobacion->id ?></td>
                    <td><?php echo date_format(date_create($aprobacion->fecha_ini),'d-m-Y')?></td>
                    <td><?php echo $aprobacion->cliente ?></td>
                    <td><?php echo $aprobacion->color ?></td>                   
                    <td><?php echo $aprobacion->moto ?></td>
                    <td><?php echo $aprobacion->tipo ?></td>
                    <td><?php echo date_format(date_create($aprobacion->fecha_ent),'d-m-Y') ?></td>

                    <td ><span  class="<?php  
                        if($aprobacion->estado == 'Sin Enviar'){
                            echo "tallsol";
                        }else{
                            echo "entclie";
                        }
                    ?>"><?php echo $aprobacion->estado ?></span></td>

                    <td class="td-acciones"> 
                        <div class="div-acciones">
                            <?php
                            if($aprobacion->estado != "Enviado"){
                            ?>
                                <a href="/actualizar-venta?id=<?php echo $aprobacion->id; ?>" class="accion-actualizar"><i class='bx bxs-pencil'></i></a>
                            <?php
                            }
                            ?>
                            <div id="popupventa<?php echo $aprobacion->id; ?>" class="pop-up-enviar" data-paso="<?php echo $aprobacion->id; ?>">
                                <div class="contenido-enviar">
                                    <div class="titulo">
                                        <i class='bx bx-question-mark' ></i>
                                        <h3>¿Está seguro(a) de enviar Aprobación N°<?php echo $aprobacion->id; ?>?</h3>
                                        <h4>Una vez enviado no se podrá volver a editar.</h4>
                                    </div>
                                    <div class="botones-enviar">
                                        <div class="btn-enviar">
                                            <form  method="POST" class="" action="">
                                                <input type="hidden" value="<?php echo $aprobacion->id ?>" name="id">
                                                <input type="hidden" value="<?php echo $aprobacion->estado ?>" name="estado">
                                        
                                                <input class="input-enviar" type="submit" value="Enviar" class="">                               

                                            </form>
                                        </div>
                                        <div class="btn-cancelar-venta">
                                            <a id="btncancelar<?php echo $aprobacion->id; ?>" class="btn-cancelar-envio">Cancelar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="btn-confirmar-venta" data-paso="<?php echo $aprobacion->id; ?>">

                                <i class='bx bxs-send btn-enviar-venta'></i>
                            </a>
                           
                            <a class="verpedido" target="_blank" href="/documentos/pdfventa?id=<?php echo $aprobacion->id;?>">Ver</a>
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
    }
?>

