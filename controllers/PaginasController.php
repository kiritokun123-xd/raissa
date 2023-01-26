<?php

namespace Controllers;

use MVC\Router;
use Model\Mototaxi;
use Model\Motocicleta;
use Model\Carguero;

class PaginasController{

    public static function index(Router $router){
        $router->render('paginas/index',[
            
        ]);
    }
    public static function nosotros(Router $router){
        $router->render('paginas/nosotros',[
            
        ]);
    }
    public static function fabrica(Router $router){
        $router->render('paginas/fabrica',[
            
        ]);
    }
    public static function verespeajax(Router $router){
        $id = $_POST['id'];
        $mototaxi = Mototaxi::find($id);

        $router->renderAjax('verespeajax',[
            'mototaxi' => $mototaxi
        ]);
    }
    public static function verespemajax(Router $router){
        $id = $_POST['id'];
        $motocicleta = Motocicleta::find($id);

        $router->renderAjax('verespemajax',[
            'motocicleta' => $motocicleta
        ]);
    }
    public static function verespecajax(Router $router){
        $id = $_POST['id'];
        $carguero = Carguero::find($id);

        $router->renderAjax('verespecajax',[
            'carguero' => $carguero
        ]);
    }
    public static function mototaxis(Router $router){
        $mototaxis = Mototaxi::all(0, 100);
        $router->render('paginas/mototaxis',[
            'mototaxis' => $mototaxis
        ]);
    }
    public static function motocicletas(Router $router){
        $motocicletas = Motocicleta::all(0, 100);
        $router->render('paginas/motocicletas',[
            'motocicletas' => $motocicletas
        ]);
    }
    public static function cargueros(Router $router){
        $cargueros = Carguero::all(0, 100);
        $router->render('paginas/cargueros',[
            'cargueros' => $cargueros
        ]);
    }
}