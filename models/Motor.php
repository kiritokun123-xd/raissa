<?php
namespace Model;
date_default_timezone_set("America/Phoenix");
class Motor extends ActiveRecord{
    
    protected static $tabla = 'motores';
    protected static $columnasDB = ['id', 'nummotor', 'tipo', 'estado','fecha'];
    protected static $redireccion = '/logistica/motor';

    public $id;
    public $nummotor;
    public $tipo;
    public $estado;
    public $fecha;
    
    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->nummotor = $args['nummotor'] ?? '';
        $this->tipo = $args['tipo'] ?? '';
        $this->estado = $args['estado'] ?? 'disponible';
        $this->fecha = $args['fecha'] ?? date('Y-m-d');
        
    }

    public function validar(){
        if(!$this->nummotor){
            self::$errores[] = "El motor es obligatorio";
        }
        if(!$this->tipo){
            self::$errores[] = "La marca obligatoria";
        }
        
        return self::$errores;
    }

}