<main class="main">
    <h2 class="main-titulo">Indicador Costo de Unidad Almacenada</h2>

    <div class="gestion-articulo">
        <div class="gestion-titulo">
            <h3>Gestionar datos</h3>
        </div>
        <div class="gestion-caja">
            <a href="/indicador/nuevo-indicador2" class="nuevo-articulo" >
                <p>Nuevo día</p>
            </a>
            <div class="buscar-articulo">
                <label for="buscarid">Buscar fecha:</label>
                <input type="date" id="buscarindicador2">
            </div>
        </div>
    </div>

    <div class="contenedor-tabla">
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Fecha</th>
                    <th>Vent. Acum</th>
                    <th>Servicios</th>
                    <th>Alquiler</th>
                    <th>Personal</th>
                    <th>Cost. Almacen</th>
                    <th>Cost. Uni</th>
                    <th>Índice</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody id="invindicador2-body">
                <?php foreach($indicadores as $indicadore) : ?>
                <tr>
                    <td><?php echo $indicadore->id ?></td>
                    <td><?php echo date_format(date_create($indicadore->fecha),'d-m-Y')  ?></td>
                    <td>S/<?php echo $indicadore->ven_acumulada ?></td>
                    <td>S/<?php echo $indicadore->servicios ?></td>
                    <td>S/<?php echo $indicadore->alquiler ?></td>
                    <td>S/<?php echo $indicadore->personal ?></td>
                    <td>S/<?php echo $indicadore->cost_alm ?></td>
                    <td>S/<?php echo $indicadore->cost_uni ?></td>
                    <td><?php echo $indicadore->cost_uni_alm ?></td>
                    <td class="td-acciones"> 
                        <div class="div-acciones">
                            <a href="/indicador/actualizar-indicador2?id=<?php echo $indicadore->id; ?>"  class="accion-actualizar"><i class='bx bxs-pencil'></i></a>
                            <form  method="POST" class="" action="">
                                <input type="hidden" value="" name="id">
                                <input type="hidden" value="propiedad" name="tipo">
                                <i class='bx bxs-trash-alt bx-eliminar'><input class="input-eliminar" type="submit" value="" class=""></i>
                            </form>
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
            <a href="/indicador/cost-uni-alma?pag=<?php echo $i ?>" class="paginas"><?php echo $i ?></a>
        <?php endfor; ?>
        </div>
    </div>

    <div class="gestion-articulo">
        <div class="gestion-titulo">
            <h3>Ver Gráfico</h3>
        </div>
        <div class="gestion-caja">
            <div class="buscar-articulo">
                <label for="buscarid">Seleccione Fecha:</label>
                <input class="input-id input-fecha" type="date" id="verindicador2">
            </div>
        </div>
    </div>

    <div class="gestion-articulo">
        <div class="gestion-caja graficos-caja">
            <div class="graficos">
                <canvas id="myChart2"></canvas>
            </div>
        </div>
    </div>
</main>
<script>
    let myChart
    let myChart2

</script>

<div class="popup-img">
    <div class="contenido-img">
        
    </div>
</div>
<?php 
    if($resultado){
        if($resultado == 1){
            ?>
            <script>
                mensajeAlerta('!Éxito!','Índice agregado Correctamente','success','Ok')
            </script>
            <?php
        }
        if($resultado == 2){
            ?>
            <script>
                mensajeAlerta('!Éxito!','Índice Actualizado Correctamente','success','Ok')
            </script>
            <?php
        }
    }
?>
