<?php
namespace Model;

class Placa extends ActiveRecord{
    
    protected static $tabla = 'placas';
    protected static $columnasDB = ['id', 'nombre', 'propietario', 'vim', 'motor', 'titulo', 'verificacion', 'estado'];
    protected static $redireccion = '/logistica/inventario-placas';

    public $id;
    public $nombre;
    public $propietario;
    public $vim;
    public $motor;
    public $titulo;
    public $verificacion;
    public $estado;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->propietario = $args['propietario'] ?? '';
        $this->vim = $args['vim'] ?? '';
        $this->motor = $args['motor'] ?? '';
        $this->titulo = $args['titulo'] ?? '';
        $this->verificacion = $args['verificacion'] ?? '';
        $this->estado = $args['estado'] ?? '';
    }

    public function validar(){
        if(!$this->nombre){
            self::$errores[] = "El Nº Placa es obligatorio";
        }
        if(!$this->propietario){
            self::$errores[] = "El propietario es obligatorio";
        }
        if(!$this->vim){
            self::$errores[] = "El Nº VIM es obligatorio";
        }
        if(!$this->motor){
            self::$errores[] = "El Nº motor es obligatorio";
        }
        if(!$this->estado){
            self::$errores[] = "El estado es obligatorio";
        }

        return self::$errores;
    }

}