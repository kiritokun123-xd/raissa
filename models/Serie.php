<?php
namespace Model;
date_default_timezone_set("America/Phoenix");
class Serie extends ActiveRecord{
    
    protected static $tabla = 'series';
    protected static $columnasDB = ['id', 'numserie', 'tipo', 'estado','fecha'];
    protected static $redireccion = '/logistica/serie';

    public $id;
    public $numserie;
    public $tipo;
    public $estado;
    public $fecha;
    
    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->numserie = $args['numserie'] ?? '';
        $this->tipo = $args['tipo'] ?? '';
        $this->estado = $args['estado'] ?? 'disponible';
        $this->fecha = $args['fecha'] ?? date('Y-m-d');
        
    }

    public function validar(){
        if(!$this->numserie){
            self::$errores[] = "La serie es obligatoria";
        }
        if(!$this->tipo){
            self::$errores[] = "El tipo es obligatorio";
        }
        
        return self::$errores;
    }

}