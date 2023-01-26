<main class="main">
    <h2 class="main-titulo">Idicador Rotación de Mercancia</h2>

    <div class="gestion-articulo">
        <div class="gestion-titulo">
            <h3>Gestionar datos</h3>
        </div>
        <div class="gestion-caja">
            <a href="/indicador/nuevo-indicador" class="nuevo-articulo" >
                <p>Nuevo día</p>
            </a>
            <div class="buscar-articulo">
                <label for="buscarid">Buscar fecha:</label>
                <input type="date" id="buscarindicador">
            </div>
        </div>
    </div>

    <div class="contenedor-tabla">
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Fecha</th>
                    <th>Venta Acum.</th>
                    <th>Inventario Ini.</th>
                    <th>Inventario Ent.</th>
                    <th>Inventario Fin.</th>
                    <th>Inventario Prom.</th>
                    <th>Indicador</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody id="invindicador1-body">
                <?php foreach($indicadores as $indicadore) : ?>
                <tr>
                    <td><?php echo $indicadore->id ?></td>
                    <td><?php echo date_format(date_create($indicadore->fecha),'d-m-Y')  ?></td>
                    <td><?php echo $indicadore->ven_acumulada ?></td>
                    <td><?php echo $indicadore->inv_inicial ?></td>
                    <td><?php echo $indicadore->inv_entrante ?></td>
                    <td><?php echo $indicadore->inv_final ?></td>
                    <td><?php echo $indicadore->inv_prom ?></td>
                    <td><?php echo $indicadore->rot_mercancia ?></td>
                    <td class="td-acciones"> 
                        <div class="div-acciones">
                            <a href="/indicador/actualizar-indicador?id=<?php echo $indicadore->id; ?>"  class="accion-actualizar"><i class='bx bxs-pencil'></i></a>
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
            <a href="/indicador/rot-mercancia?pag=<?php echo $i ?>" class="paginas"><?php echo $i ?></a>
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
                <input class="input-id input-fecha" type="date" id="verindicador">
            </div>
        </div>
    </div>

    <div class="gestion-articulo">
        <div class="gestion-caja graficos-caja">
            <div class="graficos">
                <canvas id="myChart"></canvas>
            </div>
        </div>
    </div>
</main>
<script>
    let myChart

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
