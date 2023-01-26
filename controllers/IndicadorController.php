<?php 
namespace Controllers;

use MVC\Router;
use Model\Indicador1;
use Model\Indicador2;
use Model\UsuarioPermiso;
use Model\Admin;

class IndicadorController{

    public static function indicador1(Router $router){
        $auth = $_SESSION['id'];
        $arrayPermisos = UsuarioPermiso::mostrarPermisos($auth);
        $nick = Admin::mostrarNombre($auth);

        $resultado = $_GET['resultado'] ?? null;

        $limite = 10;
        
        $pag = $_GET['pag'] ?? null;

        $offset = 0;

        $totalPagina = Indicador1::totalPagina();

        $totalLink = ceil($totalPagina/ $limite);
        
        if(isset($pag)){
            if($pag < 1){
                $pag = 1;
            }
            $offset = ($pag - 1) * $limite;    
        }

        $indicadores = Indicador1::all($offset, $limite);

        $router->render('indicador/rotacion-mercancia',[
            'indicadores' => $indicadores,
            'resultado' => $resultado,
            'totalLink' => $totalLink,
            'arrayPermisos' => $arrayPermisos,
            'nick' => $nick
        ]);
    }
    public static function newindicador1(Router $router){
        $auth = $_SESSION['id'];
        $arrayPermisos = UsuarioPermiso::mostrarPermisos($auth);
        $nick = Admin::mostrarNombre($auth);

        $indicador1 = new Indicador1();

        $errores = Indicador1::getErrores();

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            /*CREA UNA NUEVA INSTANCIA*/
            $indicador1 = new Indicador1($_POST['indicador1']);

            /*VALIDAR*/
            $errores = $indicador1->validar();

            //REVISAR QUE EL ARREGLO DE ERRORES ESTE VACIO
            if(empty($errores)){

                //SUBE A LA BD
                $indicador1->guardar('/indicador/rot-mercancia');
                
            }
        }
        $router->render('indicador/newindicador1',[
            'indicador1' => $indicador1,
            'errores' => $errores,
            'arrayPermisos' => $arrayPermisos,
            'nick' => $nick
        ]);
    }
    public static function updindicador1(Router $router){
        $auth = $_SESSION['id'];
        $arrayPermisos = UsuarioPermiso::mostrarPermisos($auth);
        $nick = Admin::mostrarNombre($auth);

        $id = validarORedireccionar('/indicador/rot-mercancia');

        $indicador1 = Indicador1::find($id);

        $errores = Indicador1::getErrores();

        //EJECUTAR EL CODIGO DESPUES DE QuE EL USUARIO ENVIA EL FORMULARIO
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            //Asignar los atributos
            $args = $_POST['indicador1'];
            
            $indicador1->sincronizar($args);
            
            $errores = $indicador1->validar();
            
            //REVISAR QUE EL AAREGLO DE ERRORES ESTE VACIO
            if(empty($errores)){
                
                $indicador1->guardar('/indicador/rot-mercancia');
            }

        }

        $router->render('indicador/updindicador1',[
            'indicador1' => $indicador1,
            'errores' => $errores,
            'arrayPermisos' => $arrayPermisos,
            'nick' => $nick
        ]);
    }
    public static function indicador1ajax(Router $router){
        $filtro = $_POST['filtro'];

        $indicadores = Indicador1::filtrarAjax('fecha',$filtro);

        $router->renderAjax('indicador1ajax',[
            'indicadores' => $indicadores
        ]);
    }
    public static function indicador1ajaxG(Router $router){
        $filtro = $_POST['filtro'];

        $indicadores = Indicador1::filtrarAjax('fecha',$filtro);

        $router->renderAjax('indicador1ajaxG',[
            'indicadores' => $indicadores
        ]);
    }

    public static function indicador2(Router $router){
        $auth = $_SESSION['id'];
        $arrayPermisos = UsuarioPermiso::mostrarPermisos($auth);
        $nick = Admin::mostrarNombre($auth);

        $resultado = $_GET['resultado'] ?? null;

        $limite = 10;
        
        $pag = $_GET['pag'] ?? null;

        $offset = 0;

        $totalPagina = Indicador2::totalPagina();

        $totalLink = ceil($totalPagina/ $limite);
        
        if(isset($pag)){
            if($pag < 1){
                $pag = 1;
            }
            $offset = ($pag - 1) * $limite;    
        }

        $indicadores = Indicador2::all($offset, $limite);

        $router->render('indicador/cost-uni-alm',[
            'indicadores' => $indicadores,
            'resultado' => $resultado,
            'totalLink' => $totalLink,
            'arrayPermisos' => $arrayPermisos,
            'nick' => $nick
        ]);
    }
    public static function newindicador2(Router $router){
        $auth = $_SESSION['id'];
        $arrayPermisos = UsuarioPermiso::mostrarPermisos($auth);
        $nick = Admin::mostrarNombre($auth);

        $indicador2 = new Indicador2();

        $errores = Indicador2::getErrores();

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            /*CREA UNA NUEVA INSTANCIA*/
            $indicador2 = new Indicador2($_POST['indicador2']);

            /*VALIDAR*/
            $errores = $indicador2->validar();

            //REVISAR QUE EL ARREGLO DE ERRORES ESTE VACIO
            if(empty($errores)){

                //SUBE A LA BD
                $indicador2->guardar('/indicador/cost-uni-alma');
                
            }
        }
        $router->render('indicador/newindicador2',[
            'indicador2' => $indicador2,
            'errores' => $errores,
            'arrayPermisos' => $arrayPermisos,
            'nick' => $nick
        ]);
    }
    public static function updindicador2(Router $router){
        $auth = $_SESSION['id'];
        $arrayPermisos = UsuarioPermiso::mostrarPermisos($auth);
        $nick = Admin::mostrarNombre($auth);

        $id = validarORedireccionar('/indicador/cost-uni-alma');

        $indicador2 = Indicador2::find($id);

        $errores = Indicador2::getErrores();

        //EJECUTAR EL CODIGO DESPUES DE QuE EL USUARIO ENVIA EL FORMULARIO
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            //Asignar los atributos
            $args = $_POST['indicador2'];
            
            $indicador2->sincronizar($args);
            
            $errores = $indicador2->validar();
            
            //REVISAR QUE EL AAREGLO DE ERRORES ESTE VACIO
            if(empty($errores)){
                
                $indicador2->guardar('/indicador/cost-uni-alma');
            }

        }

        $router->render('indicador/updindicador2',[
            'indicador2' => $indicador2,
            'errores' => $errores,
            'arrayPermisos' => $arrayPermisos,
            'nick' => $nick
        ]);
    }
    public static function indicador2ajax(Router $router){
        $filtro = $_POST['filtro'];

        $indicadores = Indicador2::filtrarAjax('fecha',$filtro);

        $router->renderAjax('indicador2ajax',[
            'indicadores' => $indicadores
        ]);
    }
    public static function indicador2ajaxG(Router $router){
        $filtro = $_POST['filtro'];

        $indicadores = Indicador2::filtrarAjax('fecha',$filtro);

        $router->renderAjax('indicador2ajaxG',[
            'indicadores' => $indicadores
        ]);
    }
}