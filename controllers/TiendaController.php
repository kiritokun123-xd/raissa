<?php 
namespace Controllers;

use MVC\Router;
use Model\Articulo;
use Model\ArticuloAlmacen;
use Model\JoinArticuloStock;
use Model\UsuarioPermiso;
use Model\Admin;



class TiendaController{

    public static function inventario(Router $router){
        $auth = $_SESSION['id'];
        $arrayPermisos = UsuarioPermiso::mostrarPermisos($auth);
        $nick = Admin::mostrarNombre($auth);

        $resultado = $_GET['resultado'] ?? null;

        $limite = 10;
        
        $pag = $_GET['pag'] ?? null;

        $offset = 0;

        $totalPagina = Articulo::totalPagina();

        $totalLink = ceil($totalPagina/ $limite);
        
        if(isset($pag)){
            if($pag < 1){
                $pag = 1;
            }
            $offset = ($pag - 1) * $limite;    
        }

        $articulos = JoinArticuloStock::allMul(1, $offset, $limite);

        $router->render('tienda/inventario',[
            'articulos' => $articulos,
            'resultado' => $resultado,
            'totalLink' => $totalLink,
            'arrayPermisos' => $arrayPermisos,
            'nick' => $nick
        ]);
    }
    public static function updinventario(Router $router){
        $auth = $_SESSION['id'];
        $arrayPermisos = UsuarioPermiso::mostrarPermisos($auth);
        $nick = Admin::mostrarNombre($auth);

        $id = validarORedireccionar('/tienda/inventario');

        $articulo = JoinArticuloStock::findMul($id,1);

        $articuloalmacen = ArticuloAlmacen::findMul($id,1);

        //debuguear($articuloalmacen);

        $errores = ArticuloAlmacen::getErrores();

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
             //Asignar los atributos
             $args = $_POST['articulo'];
            
             $articuloalmacen->sincronizar($args);

             $errores = $articuloalmacen->validar();

             if(empty($errores)){
                
                $articuloalmacen->guardarRedi('/tienda/inventario');
            }
        }

        $router->render('tienda/updinventario',[
            'articulo' => $articulo,
            'errores' => $errores,
            'arrayPermisos' => $arrayPermisos,
            'nick' => $nick
        ]);
    }

    public static function invtienda(Router $router){
        $filtro = $_POST['filtro'];

        $articulos = JoinArticuloStock::filtrarAjaxMul(1,'id',$filtro);

        $router->renderAjax('invtiendaajax',[
            'articulos' => $articulos
        ]);
    }
    public static function invtiendaN(Router $router){
        $filtro = $_POST['filtro'];

        $articulos = JoinArticuloStock::filtrarAjaxMul(1,'nombre',$filtro);

        $router->renderAjax('invtiendaajax',[
            'articulos' => $articulos
        ]);
    }
}