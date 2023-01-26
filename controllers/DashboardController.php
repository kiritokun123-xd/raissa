<?php

namespace Controllers;

use MVC\Router;
use Model\UsuarioPermiso;
use Model\Admin;

class DashboardController{

    public static function inicio(Router $router){
        $auth = $_SESSION['id'];
        $arrayPermisos = UsuarioPermiso::mostrarPermisos($auth);
        $nick = Admin::mostrarNombre($auth);
        $router->render('dashboard/inicio',[
            'arrayPermisos' => $arrayPermisos,
            'nick' => $nick
        ]);
    }
}