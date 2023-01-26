<?php 
namespace Controllers;

use MVC\Router;
use Model\Articulo;
use Model\ArticuloAlmacen;
use Model\JoinArticuloStock;
use Model\UsuarioPermiso;
use Model\Admin;

class EnsamblajeController{

    public static function inventario(Router $router){
        $auth = $_SESSION['id'];
        $arrayPermisos = UsuarioPermiso::mostrarPermisos($auth);
        $nick = Admin::mostrarNombre($auth);

        $resultado = $_GET['resultado'] ?? null;

        $limite = 50;
        
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

        $articulos = JoinArticuloStock::allMul(2, $offset, $limite);

        $router->render('ensamblaje/inventario',[
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
        
        $id = validarORedireccionar('/ensamblaje/inventario');
        
        $articulo = JoinArticuloStock::findMul($id,2);
        
        $articuloalmacen = ArticuloAlmacen::findMul($id,2);
        
        //debuguear($articuloalmacen);
        
        $errores = ArticuloAlmacen::getErrores();
        
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            //Asignar los atributos
            $args = $_POST['articulo'];
            
            $articuloalmacen->sincronizar($args);
            
            $errores = $articuloalmacen->validar();
            
            if(empty($errores)){
                
                $articuloalmacen->guardarRedi('/ensamblaje/inventario');
            }
        }
        
        $router->render('ensamblaje/updinventario',[
            'articulo' => $articulo,
            'errores' => $errores,
            'arrayPermisos' => $arrayPermisos,
            'nick' => $nick
        ]);
    }

    public static function invensamblaje(Router $router){
        $filtro = $_POST['filtro'];
        

        $articulos = JoinArticuloStock::filtrarAjaxMul(2,'id',$filtro);

        $router->renderAjax('invensamblajeajax',[
            'articulos' => $articulos
        ]);
    }
    public static function invensamblajeN(Router $router){
        $filtro = $_POST['filtro'];

        $articulos = JoinArticuloStock::filtrarAjaxMul(2,'nombre',$filtro);

        $router->renderAjax('invensamblajeajax',[
            'articulos' => $articulos
        ]);
    }
}