<main class="main">
    <h2 class="main-titulo">Motores</h2>

    <div class="gestion-articulo">
        <div class="gestion-titulo">
            <h3>Gestionar Motores</h3>
        </div>
        <div class="gestion-caja">
            <a href="/logistica/nuevo-motor" class="nuevo-articulo" >
                <p>Nuevo Motor</p>
            </a>
            <div class="buscar-articulo">
                <label for="buscarmotor">Buscar Num Motor:</label>
                <input class="input-id" type="text" id="buscarmotor">
            </div>
        </div>
    </div>

    <div class="contenedor-tabla">
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Motor</th>
                    <th>Marca</th>                    
                    <th>Estado</th>
                    <th>Fecha</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody id="invmotor-body">
                <?php foreach($motores as $motor) : ?>
                <tr>
                    <td><?php echo $motor->id ?></td>
                    <td><?php echo $motor->nummotor ?></td>
                    <td><?php echo $motor->tipo ?></td>
                    <td ><span  class="<?php  
                        if($motor->estado == 'disponible'){
                            echo "disponible";
                        }else{
                            echo "asignado";
                        }
                    ?>"><?php echo $motor->estado ?></span></td>
                    <td><?php echo date_format(date_create($motor->fecha),'d-m-Y')?></td>

                    <td class="td-acciones"> 
                        <div class="div-acciones">
                            <a href="/logistica/actualizar-motor?id=<?php echo $motor->id; ?>" class="accion-actualizar"><i class='bx bxs-pencil'></i></a>
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
            <a href="/logistica/motor?pag=<?php echo $i ?>" class="paginas"><?php echo $i ?></a>
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
                mensajeAlerta('!Éxito!','Motor agregado Correctamente','success','Ok')
            </script>
            <?php
        }
        if($resultado == 2){
            ?>
            <script>
                mensajeAlerta('!Éxito!','Motor Actualizado Correctamente','success','Ok')
            </script>
            <?php
        }
    }
?>

