<main class="main">
    <h2 class="main-titulo">Series</h2>

    <div class="gestion-articulo">
        <div class="gestion-titulo">
            <h3>Gestionar Series</h3>
        </div>
        <div class="gestion-caja">
            <a href="/logistica/nuevo-serie" class="nuevo-articulo" >
                <p>Nueva Serie</p>
            </a>
            <div class="buscar-articulo">
                <label for="buscarserie">Buscar Num Serie:</label>
                <input class="input-id" type="text" id="buscarserie">
            </div>
        </div>
    </div>

    <div class="contenedor-tabla">
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Serie</th>
                    <th>Tipo</th>                    
                    <th>Estado</th>
                    <th>Fecha</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody id="invserie-body">
                <?php foreach($series as $serie) : ?>
                <tr>
                    <td><?php echo $serie->id ?></td>
                    <td><?php echo $serie->numserie ?></td>
                    <td><?php echo $serie->tipo ?></td>
                    <td ><span  class="<?php  
                        if($serie->estado == 'disponible'){
                            echo "disponible";
                        }else{
                            echo "asignado";
                        }
                    ?>"><?php echo $serie->estado ?></span></td>
                    <td><?php echo date_format(date_create($serie->fecha),'d-m-Y')?></td>

                    <td class="td-acciones"> 
                        <div class="div-acciones">
                            <a href="/logistica/actualizar-serie?id=<?php echo $serie->id; ?>" class="accion-actualizar"><i class='bx bxs-pencil'></i></a>
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
            <a href="/logistica/serie?pag=<?php echo $i ?>" class="paginas"><?php echo $i ?></a>
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
                mensajeAlerta('!Éxito!','Serie agregada Correctamente','success','Ok')
            </script>
            <?php
        }
        if($resultado == 2){
            ?>
            <script>
                mensajeAlerta('!Éxito!','Serie Actualizada Correctamente','success','Ok')
            </script>
            <?php
        }
    }
?>

