<?php
namespace Model;

class Mototaxi extends ActiveRecord{
    
    protected static $tabla = 'mototaxis';
    protected static $columnasDB = ['id', 'nombre', 'descripcion', 'imagen', 'info1', 'info2', 'info3', 'info4','info5','info6'];
    protected static $redireccion = '/logistica/inventario-placas';

    public $id;
    public $nombre;
    public $descripcion;
    public $imagen;
    public $info1;
    public $info2;
    public $info3;
    public $info4;
    public $info5;
    public $info6;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->descripcion = $args['descripcion'] ?? '';
        $this->imagen = $args['imagen'] ?? '';
        $this->info1 = $args['info1'] ?? '';
        $this->info2 = $args['info2'] ?? '';
        $this->info3 = $args['info3'] ?? '';
        $this->info4 = $args['info4'] ?? '';
        $this->info5 = $args['info5'] ?? '';
        $this->info6 = $args['info6'] ?? '';
    }

    public function validar(){
        if(!$this->nombre){
            self::$errores[] = "El nombre es obligatorio";
        }
        if(!$this->descripcion){
            self::$errores[] = "La descripción es obligatoria";
        }
        if(!$this->imagen){
            self::$errores[] = "La imagen es obligatoria";
        }


        return self::$errores;
    }

}