<?php
namespace Model;
date_default_timezone_set("America/Phoenix");
class Venta extends ActiveRecord{
    
    protected static $tabla = 'ventas';
    protected static $columnasDB = ['id', 'fecha_ini', 'cliente', 'distribuidor', 'motor', 'fecha_ent', 'moto', 'tipo', 'color', 'faro', 'tacometro', 'aro', 'parrilla', 'techo', 'asiento', 'mica', 'mascara', 'adicional', 'equipamiento','vendedor','observacion','trapecio','estado'];
    protected static $redireccion = '/logistica/pedido';

    public $id;
    public $fecha_ini;
    public $cliente;
    public $distribuidor;
    public $motor;
    public $fecha_ent;
    public $moto;
    public $tipo;
    public $color;
    public $faro;
    public $tacometro;
    public $aro;
    public $parrilla;
    public $techo;
    public $asiento;
    public $mica;
    public $mascara;
    public $adicional;
    public $equipamiento;
    public $vendedor;
    public $observacion;
    public $trapecio;
    public $estado;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->fecha_ini = $args['fecha_ini'] ?? date('Y-m-d');
        $this->cliente = $args['cliente'] ?? '';
        $this->distribuidor = $args['distribuidor'] ?? '';
        $this->motor = $args['motor'] ?? '';
        $this->fecha_ent = $args['fecha_ent'] ?? '';
        $this->moto = $args['moto'] ?? '';
        $this->tipo = $args['tipo'] ?? '';
        $this->color = $args['color'] ?? '';
        $this->faro = $args['faro'] ?? '';
        $this->tacometro = $args['tacometro'] ?? '';
        $this->aro = $args['aro'] ?? '';
        $this->parrilla = $args['parrilla'] ?? '';
        $this->techo = $args['techo'] ?? '';
        $this->asiento = $args['asiento'] ?? '';
        $this->mica = $args['mica'] ?? '';
        $this->mascara = $args['mascara'] ?? '';
        $this->adicional = $args['adicional'] ?? '';
        $this->equipamiento = $args['equipamiento'] ?? '';
        $this->vendedor = $args['vendedor'] ?? '';
        $this->observacion = $args['observacion'] ?? '';
        $this->trapecio = $args['trapecio'] ?? '';
        $this->estado = $args['estado'] ?? 'Sin Enviar';
    }

    public function validar(){
        if(!$this->cliente){
            self::$errores[] = "El cliente es obligatorio";
        }
        if(!$this->motor){
            self::$errores[] = "El motor es obligatorio";
        }
        if(!$this->fecha_ent){
            self::$errores[] = "La fecha de entrega es obligatoria";
        }
        if(!$this->moto){
            self::$errores[] = "La moto es obligatoria";
        }
        if(!$this->tipo){
            self::$errores[] = "El tipo es obligatorio";
        }
        if(!$this->faro){
            self::$errores[] = "El faro es obligatorio";
        }
        if(!$this->tacometro){
            self::$errores[] = "El tacometro es obligatorio";
        }
        if(!$this->aro){
            self::$errores[] = "El aro es obligatorio";
        }
        if(!$this->parrilla){
            self::$errores[] = "La parrilla es obligatoria";
        }
        if(!$this->techo){
            self::$errores[] = "El techo es obligatorio";
        }
        if(!$this->asiento){
            self::$errores[] = "El asiento es obligatorio";
        }
        if(!$this->mica){
            self::$errores[] = "La mica es obligatoria";
        }
        if(!$this->color){
            self::$errores[] = "El color es obligatorio";
        }
        if(!$this->mascara){
            self::$errores[] = "La mascara es obligatoria";
        }
        if(!$this->trapecio){
            self::$errores[] = "El trapecio es obligatorio";
        }
        
        return self::$errores;
    }

}