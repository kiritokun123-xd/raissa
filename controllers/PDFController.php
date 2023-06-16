<?php

namespace Controllers;

use MVC\Router;
use Model\Admin;
use Model\Venta;
use Model\Pedido;
use Model\Compras;
use Model\Pedidoe;
use Model\Pedidot;
use Model\Pedidots;
use Model\UsuarioPermiso;
use Model\JoinDetalleCompra;

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
    public static function pdfventa(Router $router){
        $auth = $_SESSION['id'];
        $arrayPermisos = UsuarioPermiso::mostrarPermisos($auth);
        $nick = Admin::mostrarNombre($auth);

        $id = validarORedireccionar('/venta');

        $venta = Venta::find($id);
        $router->renderPDFVenta([
            'pedido' => $venta,
            'arrayPermisos' => $arrayPermisos,
            'nick' => $nick
        ]);
    }
    public static function pdfcompra(Router $router){
        $auth = $_SESSION['id'];
        $arrayPermisos = UsuarioPermiso::mostrarPermisos($auth);
        $nick = Admin::mostrarNombre($auth);

        $id = validarORedireccionar('/compras');

        $compraDetalle = JoinDetalleCompra::getDetalleCompras($id);
        //debuguear($compraDetalle);
        $router->renderPDFCompra([
            'pedidos' => $compraDetalle,
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
    public static function pdfOT_PT(Router $router){
        $auth = $_SESSION['id'];
        $arrayPermisos = UsuarioPermiso::mostrarPermisos($auth);
        $nick = Admin::mostrarNombre($auth);

        $id = validarORedireccionar('/logistica/pedidoTS');

        $pedidoT = Pedidots::find($id);
        $pedido = Pedido::find2("pedidos","ped_tapiz",$id);
        if(!$pedido){
            //REDIRECIONAR AL USUARIO
            header('Location: /logistica/pedidoTS?resultado=4');
        }
        $router->renderPDFOT_PT([
            'pedidoT' => $pedidoT,
            'pedido' => $pedido,
            'arrayPermisos' => $arrayPermisos,
            'nick' => $nick
        ]);
    }
    public static function pdfPT_OT(Router $router){
        $auth = $_SESSION['id'];
        $arrayPermisos = UsuarioPermiso::mostrarPermisos($auth);
        $nick = Admin::mostrarNombre($auth);

        $id = validarORedireccionar('/logistica/con-aprobacion');

        $pedido = Pedido::find($id);
        $pedidoT = Pedidots::find2("pedidots","ord_trimoto",$id);
        if(!$pedidoT){
            //REDIRECIONAR AL USUARIO
            header('Location: /logistica/con-aprobacion?resultado=5');
        }
        $router->renderPDFPT_OT([
            'pedidoT' => $pedidoT,
            'pedido' => $pedido,
            'arrayPermisos' => $arrayPermisos,
            'nick' => $nick
        ]);
    }
}