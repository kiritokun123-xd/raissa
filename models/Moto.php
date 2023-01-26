<?php
namespace Model;

class Moto extends ActiveRecord{
    
    protected static $tabla = 'motos';
    protected static $columnasDB = ['id', 'nombre', 'vim', 'motor', 'dua', 'color','peso','estado','imagen'];
    protected static $redireccion = '/logistica/inventario-motos';

    public $id;
    public $nombre;
    public $vim;
    public $motor;
    public $dua;
    public $color;
    public $peso;
    public $estado;
    public $imagen;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->vim = $args['vim'] ?? '';
        $this->motor = $args['motor'] ?? '';
        $this->dua = $args['dua'] ?? '';
        $this->color = $args['color'] ?? '';
        $this->peso = $args['peso'] ?? '';
        $this->estado = $args['estado'] ?? '';
        $this->imagen = $args['imagen'] ?? '';
    }

    public function validar(){
        if(!$this->nombre){
            self::$errores[] = "El modelo es obligatorio";
        }
        if(!$this->vim){
            self::$errores[] = "El Nº VIM es obligatorio";
        }
        if(!$this->motor){
            self::$errores[] = "El Nº motor es obligatorio";
        }
        if(!$this->dua){
            self::$errores[] = "El Nº dua es obligatorio";
        }
        if(!$this->color){
            self::$errores[] = "El color es obligatorio";
        }
        if(!$this->peso){
            self::$errores[] = "El peso es obligatorio";
        }
        if(!$this->estado){
            self::$errores[] = "El estado es obligatorio";
        }

        return self::$errores;
    }

}