<?php 
namespace Controllers;

use MVC\Router;
use Model\Admin;
use Model\UsuarioPermiso;


class UsuarioController{

    public static function usuario(Router $router){
        //debuguear("Hola");
        $auth = $_SESSION['id'];
        $arrayPermisos = UsuarioPermiso::mostrarPermisos($auth);
        $nick = Admin::mostrarNombre($auth);

        $resultado = $_GET['resultado'] ?? null;

        $limite = 100;
        
        $pag = $_GET['pag'] ?? null;

        $offset = 0;

        $totalPagina = Admin::totalPagina();

        $totalLink = ceil($totalPagina/ $limite);
        
        if(isset($pag)){
            if($pag < 1){
                $pag = 1;
            }
            $offset = ($pag - 1) * $limite;    
        }


        $usuarios = Admin::all($offset, $limite);

        $router->render('acceso/usuario',[
            'usuarios' => $usuarios,
            'resultado' => $resultado,
            'totalLink' => $totalLink,
            'arrayPermisos' => $arrayPermisos,
            'nick' => $nick
        ]);
    }
    public static function newusuario(Router $router){
        $auth = $_SESSION['id'];
        $arrayPermisos = UsuarioPermiso::mostrarPermisos($auth);
        $nick = Admin::mostrarNombre($auth);
        
        $usuario = new Admin();

        $usuarioPermiso = new UsuarioPermiso();

        $errores = Admin::getErrores();

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            /*CREA UNA NUEVA INSTANCIA*/
            $usuario = new Admin($_POST['usuario']);

            $usuario->validarPassword($_POST['usuario']['passwordC']);

            /*VALIDAR*/
            $errores = $usuario->validar();

            //REVISAR QUE EL ARREGLO DE ERRORES ESTE VACIO
            if(empty($errores)){

                //SUBE A LA BD
                $usuario->crearusuario();
                $usuarioPermiso->crearPermisos();
            }
        }
        $router->render('acceso/newusuario',[
            'usuario' => $usuario,
            'errores' => $errores,
            'arrayPermisos' => $arrayPermisos,
            'nick' => $nick
        ]);
    }

    public static function invusuarioajaxid(Router $router){
        $filtro = $_POST['filtro'];

        $usuarios = Admin::filtrarAjax('id',$filtro);

        $router->renderAjax('invusuarioajax',[
            'usuarios' => $usuarios
        ]);
    }
    public static function invusuarioajaxN(Router $router){
        $filtro = $_POST['filtro'];

        $usuarios = Admin::filtrarAjax('nombre',$filtro);

        $router->renderAjax('invusuarioajax',[
            'usuarios' => $usuarios
        ]);
    }

    public static function updusuario(Router $router){
        $auth = $_SESSION['id'];
        $arrayPermisos = UsuarioPermiso::mostrarPermisos($auth);
        $nick = Admin::mostrarNombre($auth);

        $id = validarORedireccionar('/acceso/usuario');

        $usuario = Admin::find($id);

        $errores = Admin::getErrores();

        //EJECUTAR EL CODIGO DESPUES DE QuE EL USUARIO ENVIA EL FORMULARIO
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            //Asignar los atributos
            $args = $_POST['usuario'];
            
            $usuario->sincronizar($args);

            $usuario->validarPassword($_POST['usuario']['passwordC']);
            
            $errores = $usuario->validar();
            
            //REVISAR QUE EL AAREGLO DE ERRORES ESTE VACIO
            if(empty($errores)){
                $usuario->actualizarusuario();
            }

        }

        $router->render('acceso/updusuario',[
            'usuario' => $usuario,
            'errores' => $errores,
            'arrayPermisos' => $arrayPermisos,
            'nick' => $nick
        ]);
    }
    public static function permiso(Router $router){
        $auth = $_SESSION['id'];
        $arrayPermisos = UsuarioPermiso::mostrarPermisos($auth);
        $nick = Admin::mostrarNombre($auth);

        $id = validarORedireccionar('/acceso/usuario');

        $usuario = Admin::find($id);

        $usuariopermisos = UsuarioPermiso::mostrarPermisos($id);
        
        //EJECUTAR EL CODIGO DESPUES DE QuE EL USUARIO ENVIA EL FORMULARIO
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            //Asignar los atributos

            $checkbox = $_POST['checkbox'];


            UsuarioPermiso::actualizarPermisos($checkbox, $id);


        }

        $router->render('acceso/permisos',[
            'usuario' => $usuario,
            'usuariopermisos' => $usuariopermisos,
            'arrayPermisos' => $arrayPermisos,
            'nick' => $nick
        ]);
    }
}