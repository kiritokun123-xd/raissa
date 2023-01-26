<?php 
namespace Controllers;

use MVC\Router;
use Model\Mototaxi;
use Model\Motocicleta;
use Model\Carguero;
use Model\UsuarioPermiso;
use Model\Admin;

use Intervention\Image\ImageManagerStatic as Image;
use Model\Motocicletas;

class AdministrarController{
    public static function invmototaxi(Router $router){
        $auth = $_SESSION['id'];
        $arrayPermisos = UsuarioPermiso::mostrarPermisos($auth);
        $nick = Admin::mostrarNombre($auth);

        $resultado = $_GET['resultado'] ?? null;
        

        $limite = 10;
        
        $pag = $_GET['pag'] ?? null;

        $offset = 0;

        $totalPagina = Mototaxi::totalPagina();

        $totalLink = ceil($totalPagina/ $limite);
        
        if(isset($pag)){
            if($pag < 1){
                $pag = 1;
            }
            $offset = ($pag - 1) * $limite;    
        }

        $mototaxis = Mototaxi::all($offset, $limite);

        $router->render('administrar/invmototaxi',[
            'mototaxis' => $mototaxis,
            'resultado' => $resultado,
            'totalLink' => $totalLink,
            'arrayPermisos' => $arrayPermisos,
            'nick' => $nick
        ]);
    }
    public static function newmototaxi(Router $router){
        $auth = $_SESSION['id'];
        $arrayPermisos = UsuarioPermiso::mostrarPermisos($auth);
        $nick = Admin::mostrarNombre($auth);

        $mototaxi = new Mototaxi();

        $errores = Mototaxi::getErrores();

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            /*CREA UNA NUEVA INSTANCIA*/
            $mototaxi = new Mototaxi($_POST['mototaxi']);
            //GENERAR UN NOMBRE UNICO
            $nombreImagen = md5(uniqid(rand(), true)) . ".jpg";

            //SETEAR LA IMAGEN
            //realiza un RESIZE A LA IMAGEN CON INTERVENTION
            if($_FILES['mototaxi']['tmp_name']['imagen']){
                $image = Image::make($_FILES['mototaxi']['tmp_name']['imagen'])->fit(600,600);
                $mototaxi->setImagen($nombreImagen);
            }

            /*VALIDAR*/
            $errores = $mototaxi->validar();

            //REVISAR QUE EL ARREGLO DE ERRORES ESTE VACIO
            if(empty($errores)){
                //crear la carpeta imagenes
                if(!is_dir(CARPETA_IMAGENES)){
                    mkdir(CARPETA_IMAGENES);
                }

                // //GUARDA LA IMAGEN EN EL SERVIDOR
                if($image){
                    $image->save(CARPETA_IMAGENES . $nombreImagen);
                }

                //SUBE A LA BD
                $mototaxi->guardar('/administrar/mototaxis');
            }
        }

        $router->render('administrar/newmototaxi',[
            'mototaxi' => $mototaxi,
            'errores' => $errores,
            'arrayPermisos' => $arrayPermisos,
            'nick' => $nick
        ]);
    }
    public static function updmototaxi(Router $router){
        $auth = $_SESSION['id'];
        $arrayPermisos = UsuarioPermiso::mostrarPermisos($auth);
        $nick = Admin::mostrarNombre($auth);

        $id = validarORedireccionar('/administrar/mototaxis');

        $mototaxi = Mototaxi::find($id);

        $errores = Mototaxi::getErrores();

        //EJECUTAR EL CODIGO DESPUES DE QuE EL USUARIO ENVIA EL FORMULARIO
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            //Asignar los atributos
            $args = $_POST['mototaxi'];
            
            $mototaxi->sincronizar($args);
            
            $errores = $mototaxi->validar();
            
            //Validación subida de archivos
            //GENERAR UN NOMBRE UNICO
            $nombreImagen = md5(uniqid(rand(), true)) . ".jpg";
            
            if($_FILES['mototaxi']['tmp_name']['imagen']){
                $image = Image::make($_FILES['mototaxi']['tmp_name']['imagen'])->fit(600,600);
                $mototaxi->setImagen($nombreImagen);
            }
            //REVISAR QUE EL AAREGLO DE ERRORES ESTE VACIO
            if(empty($errores)){
                if($_FILES['mototaxi']['tmp_name']['imagen']){
                    //GUARDA LA IMAGEN EN EL SERVIDOR
                    if($image){
                        $image->save(CARPETA_IMAGENES . $nombreImagen);
                    }
                }
                
                $mototaxi->guardar('/administrar/mototaxis');
            }

        }

        $router->render('/administrar/updmototaxi',[
            'mototaxi' => $mototaxi,
            'errores' => $errores,
            'arrayPermisos' => $arrayPermisos,
            'nick' => $nick
        ]);
    }

    public static function invmotocicleta(Router $router){
        $auth = $_SESSION['id'];
        $arrayPermisos = UsuarioPermiso::mostrarPermisos($auth);
        $nick = Admin::mostrarNombre($auth);

        $resultado = $_GET['resultado'] ?? null;
        

        $limite = 10;
        
        $pag = $_GET['pag'] ?? null;

        $offset = 0;

        $totalPagina = Motocicleta::totalPagina();

        $totalLink = ceil($totalPagina/ $limite);
        
        if(isset($pag)){
            if($pag < 1){
                $pag = 1;
            }
            $offset = ($pag - 1) * $limite;    
        }

        $motocicletas = Motocicleta::all($offset, $limite);

        $router->render('administrar/invmotocicleta',[
            'motocicletas' => $motocicletas,
            'resultado' => $resultado,
            'totalLink' => $totalLink,
            'arrayPermisos' => $arrayPermisos,
            'nick' => $nick
        ]);
    }
    public static function newmotocicleta(Router $router){
        $auth = $_SESSION['id'];
        $arrayPermisos = UsuarioPermiso::mostrarPermisos($auth);
        $nick = Admin::mostrarNombre($auth);

        $motocicleta = new Motocicleta();

        $errores = Motocicleta::getErrores();

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            /*CREA UNA NUEVA INSTANCIA*/
            $motocicleta = new Motocicleta($_POST['motocicleta']);
            //GENERAR UN NOMBRE UNICO
            $nombreImagen = md5(uniqid(rand(), true)) . ".jpg";

            //SETEAR LA IMAGEN
            //realiza un RESIZE A LA IMAGEN CON INTERVENTION
            if($_FILES['motocicleta']['tmp_name']['imagen']){
                $image = Image::make($_FILES['motocicleta']['tmp_name']['imagen'])->fit(600,600);
                $motocicleta->setImagen($nombreImagen);
            }

            /*VALIDAR*/
            $errores = $motocicleta->validar();

            //REVISAR QUE EL ARREGLO DE ERRORES ESTE VACIO
            if(empty($errores)){
                //crear la carpeta imagenes
                if(!is_dir(CARPETA_IMAGENES)){
                    mkdir(CARPETA_IMAGENES);
                }

                // //GUARDA LA IMAGEN EN EL SERVIDOR
                if($image){
                    $image->save(CARPETA_IMAGENES . $nombreImagen);
                }

                //SUBE A LA BD
                $motocicleta->guardar('/administrar/motocicletas');
            }
        }

        $router->render('administrar/newmotocicleta',[
            'motocicleta' => $motocicleta,
            'errores' => $errores,
            'arrayPermisos' => $arrayPermisos,
            'nick' => $nick
        ]);
    }
    public static function updmotocicleta(Router $router){
        $auth = $_SESSION['id'];
        $arrayPermisos = UsuarioPermiso::mostrarPermisos($auth);
        $nick = Admin::mostrarNombre($auth);

        $id = validarORedireccionar('/administrar/mototaxis');

        $motocicleta = Motocicleta::find($id);

        $errores = Motocicleta::getErrores();

        //EJECUTAR EL CODIGO DESPUES DE QuE EL USUARIO ENVIA EL FORMULARIO
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            //Asignar los atributos
            $args = $_POST['motocicleta'];
            
            $motocicleta->sincronizar($args);
            
            $errores = $motocicleta->validar();
            
            //Validación subida de archivos
            //GENERAR UN NOMBRE UNICO
            $nombreImagen = md5(uniqid(rand(), true)) . ".jpg";
            
            if($_FILES['motocicleta']['tmp_name']['imagen']){
                $image = Image::make($_FILES['motocicleta']['tmp_name']['imagen'])->fit(600,600);
                $motocicleta->setImagen($nombreImagen);
            }
            //REVISAR QUE EL AAREGLO DE ERRORES ESTE VACIO
            if(empty($errores)){
                if($_FILES['motocicleta']['tmp_name']['imagen']){
                    //GUARDA LA IMAGEN EN EL SERVIDOR
                    if($image){
                        $image->save(CARPETA_IMAGENES . $nombreImagen);
                    }
                }
                
                $motocicleta->guardar('/administrar/motocicletas');
            }

        }

        $router->render('/administrar/updmotocicleta',[
            'motocicleta' => $motocicleta,
            'errores' => $errores,
            'arrayPermisos' => $arrayPermisos,
            'nick' => $nick
        ]);
    }

    public static function invcarguero(Router $router){
        $auth = $_SESSION['id'];
        $arrayPermisos = UsuarioPermiso::mostrarPermisos($auth);
        $nick = Admin::mostrarNombre($auth);

        $resultado = $_GET['resultado'] ?? null;
        

        $limite = 10;
        
        $pag = $_GET['pag'] ?? null;

        $offset = 0;

        $totalPagina = Carguero::totalPagina();

        $totalLink = ceil($totalPagina/ $limite);
        
        if(isset($pag)){
            if($pag < 1){
                $pag = 1;
            }
            $offset = ($pag - 1) * $limite;    
        }

        $cargueros = Carguero::all($offset, $limite);

        $router->render('administrar/invcarguero',[
            'cargueros' => $cargueros,
            'resultado' => $resultado,
            'totalLink' => $totalLink,
            'arrayPermisos' => $arrayPermisos,
            'nick' => $nick
        ]);
    }
    public static function newcarguero(Router $router){
        $auth = $_SESSION['id'];
        $arrayPermisos = UsuarioPermiso::mostrarPermisos($auth);
        $nick = Admin::mostrarNombre($auth);

        $carguero = new Carguero();

        $errores = Carguero::getErrores();

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            /*CREA UNA NUEVA INSTANCIA*/
            $carguero = new Carguero($_POST['carguero']);
            //GENERAR UN NOMBRE UNICO
            $nombreImagen = md5(uniqid(rand(), true)) . ".jpg";

            //SETEAR LA IMAGEN
            //realiza un RESIZE A LA IMAGEN CON INTERVENTION
            if($_FILES['carguero']['tmp_name']['imagen']){
                $image = Image::make($_FILES['carguero']['tmp_name']['imagen'])->fit(600,600);
                $carguero->setImagen($nombreImagen);
            }

            /*VALIDAR*/
            $errores = $carguero->validar();

            //REVISAR QUE EL ARREGLO DE ERRORES ESTE VACIO
            if(empty($errores)){
                //crear la carpeta imagenes
                if(!is_dir(CARPETA_IMAGENES)){
                    mkdir(CARPETA_IMAGENES);
                }

                // //GUARDA LA IMAGEN EN EL SERVIDOR
                if($image){
                    $image->save(CARPETA_IMAGENES . $nombreImagen);
                }

                //SUBE A LA BD
                $carguero->guardar('/administrar/cargueros');
            }
        }

        $router->render('administrar/newcarguero',[
            'carguero' => $carguero,
            'errores' => $errores,
            'arrayPermisos' => $arrayPermisos,
            'nick' => $nick
        ]);
    }
    public static function updcarguero(Router $router){
        $auth = $_SESSION['id'];
        $arrayPermisos = UsuarioPermiso::mostrarPermisos($auth);
        $nick = Admin::mostrarNombre($auth);

        $id = validarORedireccionar('/administrar/mototaxis');

        $carguero = Carguero::find($id);

        $errores = Carguero::getErrores();

        //EJECUTAR EL CODIGO DESPUES DE QuE EL USUARIO ENVIA EL FORMULARIO
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            //Asignar los atributos
            $args = $_POST['carguero'];
            
            $carguero->sincronizar($args);
            
            $errores = $carguero->validar();
            
            //Validación subida de archivos
            //GENERAR UN NOMBRE UNICO
            $nombreImagen = md5(uniqid(rand(), true)) . ".jpg";
            
            if($_FILES['carguero']['tmp_name']['imagen']){
                $image = Image::make($_FILES['carguero']['tmp_name']['imagen'])->fit(600,600);
                $carguero->setImagen($nombreImagen);
            }
            //REVISAR QUE EL AAREGLO DE ERRORES ESTE VACIO
            if(empty($errores)){
                if($_FILES['carguero']['tmp_name']['imagen']){
                    //GUARDA LA IMAGEN EN EL SERVIDOR
                    if($image){
                        $image->save(CARPETA_IMAGENES . $nombreImagen);
                    }
                }
                
                $carguero->guardar('/administrar/cargueros');
            }

        }

        $router->render('/administrar/updcarguero',[
            'carguero' => $carguero,
            'errores' => $errores,
            'arrayPermisos' => $arrayPermisos,
            'nick' => $nick
        ]);
    }
}