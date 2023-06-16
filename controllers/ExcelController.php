<?php 
namespace Controllers;

use MVC\Router;
use Model\Admin;
use Model\ArticuloN;
use Model\UsuarioPermiso;

class ExcelController{
    //=====EXCEL ARTIUCLOS======//
    public static function excelarticulo(Router $router){
        $auth = $_SESSION['id'];
        $arrayPermisos = UsuarioPermiso::mostrarPermisos($auth);
        $nick = Admin::mostrarNombre($auth);

        $resultado = $_GET['resultado'] ?? null;

        $limite = 1000;
        
        $pag = $_GET['pag'] ?? null;

        $offset = 0;

        $totalPagina = ArticuloN::totalPagina();

        $totalLink = ceil($totalPagina/ $limite);
        
        if(isset($pag)){
            if($pag < 1){
                $pag = 1;
            }
            $offset = ($pag - 1) * $limite;    
        }
        
        $articulos = ArticuloN::allarticulo($offset, $limite);

        $router->render('excel/articulos',[
            'articulos' => $articulos,
            'resultado' => $resultado,
            'totalLink' => $totalLink,
            'arrayPermisos' => $arrayPermisos,
            'nick' => $nick
        ]);
    }
}