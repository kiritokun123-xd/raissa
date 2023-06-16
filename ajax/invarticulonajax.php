<?php

foreach($articulos as $articulo) : 
    echo 
    '<tr>
        <td>'. $articulo->codigo .'</td>
        <td class="td-descripcion">'. $articulo->descripcion .'</td>
        <td>'. $articulo->area .'</td>
        <td>'. $articulo->tipo .'</td>
        <td>'. $articulo->um .'</td>
        <td>'. $articulo->cantidad .'</td>
        <td class="td-acciones"> 
            <div class="div-acciones articulos">
                <a href="/logistica/actualizar-articulo?id='. $articulo->id .'" class="accion-actualizar"><i class="bx bxs-pencil"></i></a>
                <form  method="POST" class="form-articulos" action="">
                    <input type="number" class="cantidad" step="0.01" id="" name="cantidad" placeholder="" value="">
                    <input type="hidden" value="'. $articulo->id .'" name="id">
                    <input type="hidden" value="'. $articulo->cantidad .'" name="cantidadActual">
                    <input type="submit" class="boton1"value="Agregar" name="boton">
                    <input type="submit" class="boton2"value="Quitar" name="boton">
                </form>
            </div>
        </td>
    </tr>';
endforeach;

?>

