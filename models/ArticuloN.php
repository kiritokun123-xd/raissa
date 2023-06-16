<?php
namespace Model;

class ArticuloN extends ActiveRecord{
    
    protected static $tabla = 'articulosn';
    protected static $columnasDB = ['id', 'codigo', 'descripcion', 'area', 'tipo', 'tipo_na', 'cantidad', 'costo', 'um'];
    protected static $redireccion = '/logistica/inventario-articulos';
    protected static $redireccionar = false;

    public $id;
    public $codigo;
    public $descripcion;
    public $area;
    public $tipo;
    public $tipo_na;
    public $cantidad;
    public $costo;
    public $um;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->codigo = $args['codigo'] ?? '';
        $this->descripcion = $args['descripcion'] ?? '';
        $this->area = $args['area'] ?? '';
        $this->tipo = $args['tipo'] ?? '';
        $this->tipo_na = $args['tipo_na'] ?? '';
        $this->cantidad = $args['cantidad'] ?? '';
        $this->costo = $args['costo'] ?? '';
        $this->um = $args['um'] ?? '';
    }

    public function validar(){
        if(!$this->codigo){
            self::$errores[] = "El nombre es obligatorio";
        }
        if(!$this->descripcion){
            self::$errores[] = "El costo es obligatorio";
        }
        if(!$this->area){
            self::$errores[] = "La venta es obligatoria";
        }
        if(!$this->tipo){
            self::$errores[] = "La venta es obligatoria";
        }
        if(!$this->tipo_na){
            self::$errores[] = "La venta es obligatoria";
        }
        if(!$this->um){
            self::$errores[] = "La venta es obligatoria";
        }

        return self::$errores;
    }
}