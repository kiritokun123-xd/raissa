<?php
namespace Model;
date_default_timezone_set("America/Phoenix");
class Compras extends ActiveRecord{
    
    protected static $tabla = 'compras';
    protected static $columnasDB = ['id', 'descripcion', 'fecha'];
    protected static $redireccion = '/compras';

    public $id;
    public $descripcion;
    public $fecha;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->descripcion = $args['id'] ?? null;
        $this->fecha = $args['fecha_ini'] ?? date('Y-m-d');
    }

    public function validar(){
        if(!$this->descripcion){
            self::$errores[] = "El cliente es obligatorio";
        }
        
        return self::$errores;
    }

}