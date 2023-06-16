<main class="main">
    <h2 class="main-titulo">Aprobaciones Pendientes</h2>

    <div class="gestion-articulo">
        <div class="gestion-titulo">
            <h3>Gestionar Aprobaciones</h3>
        </div>
        <div class="gestion-caja botones">
            <a  class="nuevo-articulo btn-s-aprob" >
                <p>Ver Ventas Sin Aprobar</p>
            </a>
            <a href="/logistica/con-aprobacion" class="nuevo-articulo btn-aprob" >
                <p>Ver Ventas Aprobadas</p>
            </a>

        
        </div>
    </div>

    <div class="gestion-articulo aprob">
        <div class="gestion-titulo aprob">
            <h3>Tienes <span class="sin-aprobar"><?php echo $totalPagina ?></span>  ventas sin aprobar</h3>
        </div>
        <div class="gestion-caja ventas">
            <?php foreach($ventas as $venta) : ?>
                <a href="/logistica/aprobacion?id=<?php echo $venta->id; ?>" class="caja-venta">
                    <p>Fecha entrega: <?php echo date_format(date_create($venta->fecha_ent),'d-m-Y')?></p>
                    <hr>
                    <p class="cliente"><?php echo $venta->cliente ?></p>
                    <p><?php echo $venta->moto ?></p>
                    <p><?php echo $venta->tipo ?></p>
                    <p><?php echo $venta->color ?></p>
                    <hr>
                    <p><?php echo $venta->vendedor ?></p>
                </a>  
            <?php endforeach; ?>
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
                mensajeAlerta('!Éxito!','Aprobado Correctamente','success','Ok')
            </script>
            <?php
        }
        if($resultado == 2){
            ?>
            <script>
                mensajeAlerta('!Éxito!','Aprobacón Actualizada Correctamente','success','Ok')
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

