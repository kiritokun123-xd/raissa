<?php

namespace Controllers;

use MVC\Router;
use Model\UsuarioPermiso;
use Model\Admin;
use Model\Pedido;
use Model\Pedidoe;
use Model\Pedidot;
use Model\Pedidots;

class PDFController{

    public static function pdf(Router $router){
        $auth = $_SESSION['id'];
        $arrayPermisos = UsuarioPermiso::mostrarPermisos($auth);
        $nick = Admin::mostrarNombre($auth);

        $id = validarORedireccionar('/logistica/pedido');

        $pedido = Pedido::find($id);
        $router->renderPDF([
            'pedido' => $pedido,
            'arrayPermisos' => $arrayPermisos,
            'nick' => $nick
        ]);
    }
    public static function pdf2(Router $router){
        $auth = $_SESSION['id'];
        $arrayPermisos = UsuarioPermiso::mostrarPermisos($auth);
        $nick = Admin::mostrarNombre($auth);

        $id = validarORedireccionar('/logistica/pedidoE');

        $pedido = Pedidoe::find($id);
        $router->renderPDF2([
            'pedido' => $pedido,
            'arrayPermisos' => $arrayPermisos,
            'nick' => $nick
        ]);
    }
    public static function pdf3(Router $router){
        $auth = $_SESSION['id'];
        $arrayPermisos = UsuarioPermiso::mostrarPermisos($auth);
        $nick = Admin::mostrarNombre($auth);

        $id = validarORedireccionar('/logistica/pedidoT');

        $pedido = Pedidot::find($id);
        $router->renderPDF3([
            'pedido' => $pedido,
            'arrayPermisos' => $arrayPermisos,
            'nick' => $nick
        ]);
    }
    public static function pdfTS(Router $router){
        $auth = $_SESSION['id'];
        $arrayPermisos = UsuarioPermiso::mostrarPermisos($auth);
        $nick = Admin::mostrarNombre($auth);

        $id = validarORedireccionar('/logistica/pedidoTS');

        $pedido = Pedidots::find($id);
        $router->renderPDFTS([
            'pedido' => $pedido,
            'arrayPermisos' => $arrayPermisos,
            'nick' => $nick
        ]);
    }
}