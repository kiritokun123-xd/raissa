<main class="main">
    <h2 class="main-titulo">Seguimiento de Contratos</h2>

    <div class="gestion-articulo">
        <div class="gestion-titulo">
            <h3>Gestionar Seguimiento</h3>
        </div>
        <div class="gestion-caja">
            <a href="/logistica/nuevo-contrato" class="nuevo-articulo" >
                <p>Nuevo Contrato</p>
            </a>
            <div class="buscar-articulo">
                <label for="buscarclcon">Buscar por Cliente:</label>
                <input class="input-id" type="text" id="buscarclcon">
            </div>
        </div>
    </div>

    <div class="contenedor-tabla">
        <table class="table">
            <thead>
                <tr>
                    <th>Fecha</th>
                    <th>Cliente</th>
                    <th>Celular</th>
                    <th>Vendedor</th>
                    <th>Serie</th>
                    <th>Observación</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody id="invpedido-body">
                <?php foreach($contratos as $contrato) : ?>
                <tr>
                    <td><?php echo date_format(date_create($contrato->fecha),'d-m-Y')?></td>
                    <td><?php echo $contrato->cliente ?></td>
                    <td><?php echo $contrato->celular ?></td>
                    <td><?php echo $contrato->vendedor ?></td>
                    <td><?php echo $contrato->serie ?></td>
                    <td><?php echo $contrato->observacion ?></td>
                    <td ><span  class="<?php  echo $contrato->estado == 'Debe' ? 'debe' : 'no-debe'?>"><?php echo $contrato->estado ?></span></td>
                    <td class="td-acciones"> 
                        <div class="div-acciones">
                            <a href="/logistica/actualizar-contrato?id=<?php echo $contrato->id; ?>" class="accion-actualizar"><i class='bx bxs-pencil'></i></a>
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
                mensajeAlerta('!Éxito!','Contrato agregado Correctamente','success','Ok')
            </script>
            <?php
        }
        if($resultado == 2){
            ?>
            <script>
                mensajeAlerta('!Éxito!','Contrato Actualizado Correctamente','success','Ok')
            </script>
            <?php
        }
    }
?>

