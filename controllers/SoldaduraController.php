<?php 
namespace Controllers;

use MVC\Router;
use Model\Articulo;
use Model\ArticuloAlmacen;
use Model\JoinArticuloStock;
use Model\UsuarioPermiso;
USE Model\Admin;


class SoldaduraController{

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


        $articulos = JoinArticuloStock::allMul(3, $offset, $limite);

        $router->render('soldadura/inventario',[
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

        $id = validarORedireccionar('/soldadura/inventario');

        $articulo = JoinArticuloStock::findMul($id,3);

        $articuloalmacen = ArticuloAlmacen::findMul($id,3);

        //debuguear($articuloalmacen);

        $errores = ArticuloAlmacen::getErrores();

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
             //Asignar los atributos
             $args = $_POST['articulo'];
            
             $articuloalmacen->sincronizar($args);

             $errores = $articuloalmacen->validar();

             if(empty($errores)){
                
                $articuloalmacen->guardarRedi('/soldadura/inventario');
            }
        }

        $router->render('soldadura/updinventario',[
            'articulo' => $articulo,
            'errores' => $errores,
            'arrayPermisos' => $arrayPermisos,
            'nick' => $nick
        ]);
    }

    public static function invsoldadura(Router $router){
        $filtro = $_POST['filtro'];

        $articulos = JoinArticuloStock::filtrarAjaxMul(3,'id',$filtro);

        $router->renderAjax('invsoldaduraajax',[
            'articulos' => $articulos
        ]);
    }
    public static function invsoldaduraN(Router $router){
        $filtro = $_POST['filtro'];

        $articulos = JoinArticuloStock::filtrarAjaxMul(3,'nombre',$filtro);

        $router->renderAjax('invsoldaduraajax',[
            'articulos' => $articulos
        ]);
    }
}