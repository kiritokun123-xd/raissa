<?php

namespace MVC;

use Model\UsuarioPermiso;

class Router{
    
    public $rutasGET = [];
    public $rutasPOST = [];

    public function get($url, $fn){
        $this->rutasGET[$url] = $fn;
    }
    public function post($url, $fn){
        $this->rutasPOST[$url] = $fn;
    }
    
    public function comprobarRutas(){
        session_start();
        $auth = $_SESSION['login'] ?? null;
        $id = $_SESSION['id'] ?? null;

        //==ARREGLO DE RUTAS PROTEGIDAS==
        $rutas_protegidas2 = [];
        $rutas_administrador = ['/logistica/inventario-articulos','/logistica/nuevo-articulo','/logistica/actualizar-articulo','/logistica/inventario-motos','/logistica/nueva-moto','/logistica/actualizar-moto','/logistica/inventario-placas','/logistica/actualizar-placa','/acceso/usuario','/acceso/nuevo-usuario','/acceso/actualizar-usuario','/acceso/permiso-usuario',];
        $rutas_tienda = ['/logistica/pedido','/logistica/actualizar-pedido','/logistica/nuevo-pedido'];
        $rutas_ensamblaje = ['/tienda/inventario','/tienda/actualizar-stock','/ensamblaje/inventario','/ensamblaje/actualizar-stock','/soldadura/inventario','/soldadura/actualizar-stock'];
        $rutas_soldadura = ['/administrar/motocicletas','/administrar/actualizar-motocicleta','/administrar/nueva-motocicleta','/administrar/mototaxis','/administrar/actualizar-mototaxi','/administrar/cargueros','/administrar/actualizar-carguero','/administrar/nuevo-carguero'];
        $rutas_protegidas = ['/dashboard','/logistica/inventario-articulos','/logistica/nuevo-articulo','/logistica/actualizar-articulo','/logistica/inventario-motos','/logistica/nueva-moto','/logistica/actualizar-moto','/logistica/inventario-placas','/logistica/actualizar-placa','/tienda/inventario','/tienda/actualizar-stock','/ensamblaje/inventario','/ensamblaje/actualizar-stock','/ensamblaje/inventario','/ensamblaje/actualizar-stock','/soldadura/inventario','/soldadura/actualizar-stock','/acceso/usuario','/acceso/nuevo-usuario','/acceso/actualizar-usuario','/acceso/permiso-usuario','/ajax/invarticuloAjax','/ajax/invarticuloAjaxId','/ajax/stockarticuloAjax','/ajax/invmotoAjaxId','/ajax/invmotoAjax','/ajax/invplacaAjaxP','/ajax/invplacaAjaxN','/ajax/invtienda','/ajax/invtiendaN','/ajax/invensamblaje','/ajax/invensamblajeN','/ajax/insoldadura','/ajax/insoldaduraN','/ajax/invusuarioAjaxId'];

        if($id){
            $permisos = UsuarioPermiso::mostrarPermisos($id);
            
            if($permisos[0]->permitido == 'no'){
                
                $rutas_protegidas2 = array_merge($rutas_protegidas2, $rutas_administrador);
            }
            if($permisos[1]->permitido == 'no'){
                
                $rutas_protegidas2 = array_merge($rutas_protegidas2, $rutas_tienda);
            }
            if($permisos[2]->permitido == 'no'){
                
                $rutas_protegidas2 = array_merge($rutas_protegidas2, $rutas_ensamblaje);
            }
            if($permisos[3]->permitido == 'no'){
                
                $rutas_protegidas2 = array_merge($rutas_protegidas2, $rutas_soldadura);
            }
        }

        $urlActual = $_SERVER['PATH_INFO'] ?? '/';
        $metodo = $_SERVER['REQUEST_METHOD'];

        //debuguear($_SERVER);

        //debuguear($_SESSION);

        if($metodo === 'GET'){
            $fn = $this->rutasGET[$urlActual] ?? null;
        }else{
            $fn = $this->rutasPOST[$urlActual] ?? null;
        }

        //=== proteger las rutas===
        if(in_array($urlActual, $rutas_protegidas2)){
            header('Location: /dashboard');
        }
        if(in_array($urlActual,$rutas_protegidas) && !$auth){
            header('Location: /login');
        }

        if($fn){    
            // La URL existe y hay una funcion asociada
            call_user_func($fn, $this);
        }else{
            echo "Página No Encontrada";
        }
    }

    // mUESTRA UNA VISTA
    public function render($view, $datos = []){

        foreach($datos as $key=>$value){
            //Crea variables desde el key : mensaje ----> $mensaje
            $$key = $value;     
        }

        //inicia un almacenamiento en MEMORIA durante un momento
        ob_start();

        //========= MODIFICAR ESTO PARA CAMBIAR EL LAYOUT=========//
        include __DIR__ . "/views/$view.php";
        $contenido = ob_get_clean();//Limpia el buffer
        if($view === 'auth/login'){
            include __DIR__ . "/views/base3.php";
        }else if($view === 'paginas/index' || $view === 'paginas/nosotros' || $view === 'paginas/mototaxis' || $view === 'paginas/motocicletas' || $view === 'paginas/cargueros' || $view === 'paginas/fabrica'){
            include __DIR__ . "/views/layout.php";
        }else{
            include __DIR__ . "/views/base2.php";
        }

    }
    //muestra ajax
    public function renderAjax($view, $datos = []){

        foreach($datos as $key=>$value){
            //Crea variables desde el key : mensaje ----> $mensaje
            $$key = $value;     
        }
        //inicia un almacenamiento en MEMORIA durante un momento
        ob_start();

        include __DIR__ . "/ajax/$view.php";


    }

    public function renderPDF($datos = []){
        foreach($datos as $key=>$value){
            //Crea variables desde el key : mensaje ----> $mensaje
            $$key = $value;     
        }
        include __DIR__ . "/views/pdf.php";
    }
    public function renderPDF2($datos = []){
        foreach($datos as $key=>$value){
            //Crea variables desde el key : mensaje ----> $mensaje
            $$key = $value;     
        }
        include __DIR__ . "/views/pdf4.php";
    }
    public function renderPDF3($datos = []){
        foreach($datos as $key=>$value){
            //Crea variables desde el key : mensaje ----> $mensaje
            $$key = $value;     
        }
        include __DIR__ . "/views/pdf3.php";
    }
    public function renderPDFTS($datos = []){
        foreach($datos as $key=>$value){
            //Crea variables desde el key : mensaje ----> $mensaje
            $$key = $value;     
        }
        include __DIR__ . "/views/pdfTS.php";
    }

}