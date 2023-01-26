<?php
namespace Model;
date_default_timezone_set("America/Phoenix");
class Contrato extends ActiveRecord{
    
    protected static $tabla = 'contratos';
    protected static $columnasDB = ['id', 'cliente', 'celular', 'vendedor','serie', 'num_contrato', 'estado', 'observacion', 'fecha'];
    protected static $redireccion = '/logistica/contratos';

    public $id;
    public $cliente;
    public $celular;
    public $vendedor;
    public $serie;
    public $num_contrato;
    public $estado;
    public $observacion;
    public $fecha;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->cliente = $args['cliente'] ?? '';
        $this->celular = $args['celular'] ?? '';
        $this->vendedor = $args['vendedor'] ?? '';
        $this->serie = $args['serie'] ?? '';
        $this->num_contrato = $args['num_contrato'] ?? '';
        $this->estado = $args['estado'] ?? '';
        $this->observacion = $args['observacion'] ?? '';
        $this->fecha = $args['fecha'] ?? date('Y-m-d');
    }
    
    public function validar(){
        if(!$this->cliente){
            self::$errores[] = "El cliente es obligatorio";
        }
        if(!$this->celular){
            self::$errores[] = "El celular es obligatorio";
        }
        if(strlen($this->celular) > 15){
            self::$errores[] = "El celular es incorrecto";
        }
        if(!$this->vendedor){
            self::$errores[] = "El vendedor es obligatorio";
        }
        if(!$this->num_contrato){
            self::$errores[] = "El número de contrato es obligatorio";
        }
        if(!$this->estado){
            self::$errores[] = "El estado es obligatorio";
        }
        if(!$this->observacion){
            self::$errores[] = "La observacion es obligatoria";
        }
        
        
        return self::$errores;
    }

}