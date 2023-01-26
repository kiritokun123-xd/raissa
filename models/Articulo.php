<?php
namespace Model;

class Articulo extends ActiveRecord{
    
    protected static $tabla = 'articulos';
    protected static $columnasDB = ['id', 'nombre', 'descripcion', 'costo', 'venta', 'imagen'];
    protected static $redireccion = '/logistica/inventario-articulos';
    protected static $redireccionar = false;

    public $id;
    public $nombre;
    public $descripcion;
    public $costo;
    public $venta;
    public $imagen;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->descripcion = $args['descripcion'] ?? '';
        $this->costo = $args['costo'] ?? '';
        $this->venta = $args['venta'] ?? '';
        $this->imagen = $args['imagen'] ?? '';
    }

    public function validar(){
        if(!$this->nombre){
            self::$errores[] = "El nombre es obligatorio";
        }
        if(!$this->costo){
            self::$errores[] = "El costo es obligatorio";
        }
        if(!$this->venta){
            self::$errores[] = "La venta es obligatoria";
        }

        return self::$errores;
    }
}