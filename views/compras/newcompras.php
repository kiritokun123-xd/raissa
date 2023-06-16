<?php 
    $array = array();
    foreach($articulos as $articulo) : 
        $arreglo = $articulo->descripcion;
        array_push($array, $arreglo);
    endforeach;

?>
<main class="main">
    <h2 class="main-titulo">Compras</h2>
    <?php
        foreach($errores as $error){ ?>
            <div class="alerta error">
            <?php echo $error ?>
            </div>
            <?php
        }
    ?>

    <div class="popup-newarticulo" id="popup-newarticulo">
        <div class="contenido-newarticulo">
            <div class="newarticulo-head">
                <h4>Nueva Compra</h4>
                <a href="/compras" class="btn-cerrar" id="btn-cerrar">
                    <i class='bx bx-arrow-back'></i>
                </a>
            </div>
            <div class="newcompra">
                <div class="entradas">
                    <h4>Artículo</h4>
                    <input class="nombre-articulo" type="text" id="nombre-articulo" placeholder="Digite artículo" value="">
                </div>     
                <div class="entradas">
                    <h4>UM</h4>
                    <input id="um-articulo" type="text" disabled>
                </div>
                <div class="entradas">
                    <h4>Cantidad</h4>
                    <input id="cantidad-articulo" type="number" step="0.01">
                </div>
                <div class="entradas">
                    <h4>Acción</h4>
                    <a id="agregar-articulo">Agregar</a>
                </div>
            </div>
            <div class="newcompra">
                <div class="entradas-des" name="compras[descripcion]">
                    <h4>Descripción de la compra</h4>
                    <textarea class="nombre-articulo" id="des-articulo"></textarea>
                </div>     
            </div>
            <div  class="contenedor-tabla">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Descripción</th>                                       
                            <th>UM</th>                                       
                            <th>Cantidad</th>                                       
                            <th>Acciones</th>                                       
                        </tr>
                    </thead>
                    <tbody id="invpedido-body">
                        <!-- genera ajax-->
                    </tbody>
                </table>
            </div>
            <div class="fincompra">
                <a id="crear-compra" class="boton-compra agregar">Agregar</a>
                <a href="/compras" class="boton-compra cancelar">Cancelar</a>
            </div>
        </div>
    </div>
</main>

<script style="display: none" type="text/javascript">
		$(document).ready(function () {
            var json = {}
            const objetoCompra = new Object();
            let arrayCompraFinal = new Object();
            let i=0
			var items = '<?php  echo json_encode($array) ?>'
            var newarray = JSON.parse(items)
			$("#nombre-articulo").autocomplete({  
                source: function(request, response) {
                var results = $.ui.autocomplete.filter(newarray, request.term);
                response(results.slice(0, 10));
                },
                select: function (event, item) {
					var params = {
						descripcion: item.item.value
					};
					$.get("/ajax/nombrearticuloAjax", params, function (response) {
						json = JSON.parse(response);
                        $("#um-articulo").val(json[0].um)
					}); 
                   
				}
            })
            $("#agregar-articulo").click(function(){
                if(!($("#nombre-articulo").val() == "") && !($("#cantidad-articulo").val() == "")){
                    var cantidadagregada = $("#cantidad-articulo").val()

                    var html = "<tr id='filaCompra"+i+"'><td>"+json[0].codigo+"</td><td>"+json[0].descripcion+"</td><td>"+json[0].um+"</td><td>"+cantidadagregada+"</td><td><a class='quitar-articulo-nuevo' data-paso='"+i+"'>QUITAR</a></td></tr>"

                    $("#invpedido-body").append(html) 

                    objetoCompra.id_compras = "00";
                    objetoCompra.id_articulo = json[0].id;
                    objetoCompra.cantidad = cantidadagregada;
                    arrayCompraFinal[i]= JSON.parse(JSON.stringify(objetoCompra));
                    //console.log(arrayCompraFinal);
                    agregarNuevoBoton()
                    i++   
                }                     
            });
            function agregarNuevoBoton(){
                $(".quitar-articulo-nuevo").each(function(indice,elemento){
                    $(elemento).off("click");
                   
                    $(elemento).click(function(){
                        var j = $(elemento).data("paso")
                        delete arrayCompraFinal[j];
                        $("#filaCompra"+j).remove();
                        //console.log(indice);
                        //console.log(arrayCompraFinal);
                    })
                })
            }
            $("#crear-compra").click(function(){
                //console.log(arrayCompraFinal);
                //crear nueva compra id  descripcion fecha y obtener el id creado de la compra nueva
                var des_compra = ""
                des_compra = $("#des-articulo").val()               
                $.post("/ajax/crearCompraAjax", {descripcion:des_compra,objeto:arrayCompraFinal}, function (response) {
                    //console.log(response);
                    var base_url = window.location.origin;
                    $(location).prop("href", base_url + "/compras?resultado=1");
                }); 
               
            })
        })
</script>