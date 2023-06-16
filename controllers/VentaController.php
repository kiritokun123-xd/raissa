<?php 
namespace Controllers;

use MVC\Router;
use Model\UsuarioPermiso;
use Model\Admin;
use Model\Pedido;
use Model\Serie;
use Model\Motor;

use Model\Venta;

class VentaController{

    //=====PEDIDO TRIMOTO======//

    public static function invventa(Router $router){
        $auth = $_SESSION['id'];
        $arrayPermisos = UsuarioPermiso::mostrarPermisos($auth);
        $nick = Admin::mostrarNombre($auth);

        $resultado = $_GET['resultado'] ?? null;

        $limite = 50;
        
        $pag = $_GET['pag'] ?? null;

        $offset = 0;

        $totalPagina = Venta::totalPagina();

        $totalLink = ceil($totalPagina/ $limite);
        
        if(isset($pag)){
            if($pag < 1){
                $pag = 1;
            }
            $offset = ($pag - 1) * $limite;    
        }
        $ventas = Venta::allFechaPedido($offset, $limite);

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $venta = new Venta();
            $venta_estado = $_POST["estado"];
            //debuguear($venta_estado);
            if($venta_estado != "Enviado"){
                $venta->actualizarVenta("Enviado",$_POST["id"]);
                header('Location: /venta?resultado=3');
            }else if($venta_estado == "Enviado"){
                header('Location: /venta?resultado=4');
            }
        }
        $router->render('venta/invventa',[
            'ventas' => $ventas,
            'resultado' => $resultado,
            'totalLink' => $totalLink,
            'arrayPermisos' => $arrayPermisos,
            'nick' => $nick
        ]);
    }
    public static function newventa(Router $router){
        $auth = $_SESSION['id'];
        $arrayPermisos = UsuarioPermiso::mostrarPermisos($auth);
        $nick = Admin::mostrarNombre($auth);
 
        $venta = new Venta();

        $errores = Venta::getErrores();

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            /*CREA UNA NUEVA INSTANCIA*/
            $venta = new Venta($_POST['venta']);

            /*VALIDAR*/
            $errores = $venta->validar();

            //REVISAR QUE EL ARREGLO DE ERRORES ESTE VACIO
            if(empty($errores)){

                //SUBE A LA BD
                $venta->guardar('/venta');
                
            }
        }
        $router->render('venta/newventa',[
            'venta' => $venta,
            'errores' => $errores,
            'arrayPermisos' => $arrayPermisos,
            'nick' => $nick
        ]);
    }
    public static function invventaajaxc(Router $router){
        $filtro = $_POST['filtro'];

        $ventas = Venta::filtrarAjax('cliente',$filtro);

        $router->renderAjax('invventaajax',[
            'ventas' => $ventas
        ]);
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
    public static function updventa(Router $router){
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