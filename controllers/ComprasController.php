<?php 
namespace Controllers;

use MVC\Router;
use Model\Admin;
use Model\Motor;
use Model\Serie;
use Model\Venta;
use Model\Pedido;
use Model\Compras;
use Model\ArticuloN;
use Model\DetallesCompra;
use Model\UsuarioPermiso;

class ComprasController{

    //=====PEDIDO TRIMOTO======//

    public static function invcompra(Router $router){
        $auth = $_SESSION['id'];
        $arrayPermisos = UsuarioPermiso::mostrarPermisos($auth);
        $nick = Admin::mostrarNombre($auth);

        $resultado = $_GET['resultado'] ?? null;

        $limite = 50;
        
        $pag = $_GET['pag'] ?? null;

        $offset = 0;

        $totalPagina = Compras::totalPagina();

        $totalLink = ceil($totalPagina/ $limite);
        
        if(isset($pag)){
            if($pag < 1){
                $pag = 1;
            }
            $offset = ($pag - 1) * $limite;    
        }
        $compras = Compras::allFechaCompra($offset, $limite);
        $router->render('compras/invcompras',[
            'compras' => $compras,
            'resultado' => $resultado,
            'totalLink' => $totalLink,
            'arrayPermisos' => $arrayPermisos,
            'nick' => $nick
        ]);
    }
    public static function newcompra(Router $router){
        $auth = $_SESSION['id'];
        $arrayPermisos = UsuarioPermiso::mostrarPermisos($auth);
        $nick = Admin::mostrarNombre($auth);
 
        $compras = new Compras();
        $articulos = ArticuloN::allarticulo(0,900);
        
        $errores = Compras::getErrores();

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            /*CREA UNA NUEVA INSTANCIA*/
            $compras = new Compras($_POST['compras']);
            
            /*VALIDAR*/
            $errores = $compras->validar();

            //REVISAR QUE EL ARREGLO DE ERRORES ESTE VACIO
            if(empty($errores)){

                //SUBE A LA BD
                $compras->guardar('/venta');
                
            }
        }
        $router->render('compras/newcompras',[
            'compras' => $compras,
            'articulos' => $articulos,
            'errores' => $errores,
            'arrayPermisos' => $arrayPermisos,
            'nick' => $nick
        ]);
    }
    public static function nombrearticuloajax(Router $router){
        $descripcion = $_GET['descripcion'];
        $articulo = ArticuloN::someAjaxArticulo($descripcion);      
        if($articulo){
            echo json_encode($articulo);
        }else{
            echo "No existe registro";
        }
        
    }
    public static function crearcompraajax(Router $router){
        $descripcion = $_POST['descripcion'];
        $objetos = $_POST['objeto'];
        //$detalleCompra = new DetallesCompra($_POST['objeto']); //aun no se prueba
        $compras = new Compras();
        $compras->descripcion = $descripcion;
        $compras->guardar2('/venta');
        //$compras_crear = Compras::crearCompraAjax($descripcion,$compras->fecha);
        //creando compra
        $lastId = Compras::ultimoIdCompra(); 
        foreach ($objetos as &$obj ){
            $obj['id_compras'] = $lastId;
        }
        
        //Crear detalles de la compra
        $detalleCompra = DetallesCompra::crearDetalleCompraAjax($objetos);    
    }
    public static function creardetallescompraajax(Router $router){
        
        //creando detalle
        $objetDetalle = $_GET['objeto'];
        debuguear($objetDetalle);  
        /*if($lastId){
            echo ($lastId);
        }else{
            echo "No existe registro";
        }
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            echo "Hola";
        }*/
    }
    public static function invpedidoajaxcm(Router $router){
        $filtro = $_POST['filtro'];

        $pedidos = Pedido::filtrarAjax('nummotor',$filtro);

        $router->renderAjax('invpedidoajax',[
            'pedidos' => $pedidos
        ]);
    }
    public static function invpedidoajaxc(Router $router){
        $filtro = $_POST['filtro'];

        $pedidos = Pedido::filtrarAjax('cliente',$filtro);

        $router->renderAjax('invpedidoajax',[
            'pedidos' => $pedidos
        ]);
    }
    public static function invpedidoajaxf(Router $router){
        $filtro = $_POST['filtro'];

        $pedidos = Pedido::filtrarAjax('fecha_ent',$filtro);

        $router->renderAjax('invpedidoajax',[
            'pedidos' => $pedidos
        ]);
    }
    public static function updcompra(Router $router){
        $auth = $_SESSION['id'];
        $arrayPermisos = UsuarioPermiso::mostrarPermisos($auth);
        $nick = Admin::mostrarNombre($auth);

        $id = validarORedireccionar('/venta');

        $venta = Venta::find($id);
        
        $errores = Venta::getErrores();
        
        
        //EJECUTAR EL CODIGO DESPUES DE QuE EL USUARIO ENVIA EL FORMULARIO
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            //Asignar los atributos
            $args = $_POST['venta'];
            
            $venta->sincronizar($args);
            
            $errores = $venta->validar();
            
            //REVISAR QUE EL AAREGLO DE ERRORES ESTE VACIO
            if(empty($errores)){
                
                $venta->guardar('/venta');
            }

        }

        $router->render('venta/updventa',[
            'venta' => $venta,
            'errores' => $errores,
            'arrayPermisos' => $arrayPermisos,
            'nick' => $nick
        ]);
    }

}