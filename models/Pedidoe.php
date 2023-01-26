<?php
namespace Model;
date_default_timezone_set("America/Phoenix");
class Pedidoe extends ActiveRecord{
    
    protected static $tabla = 'pedidoe';
    protected static $columnasDB = ['id', 'fecha_ini', 'cliente', 'serie', 'fecha_ent', 'tipo', 'color', 'parrilla', 'techo', 'asiento', 'mica', 'mascara', 'adicional', 'equipamiento','vendedor','despacho','destino','estado'];
    protected static $redireccion = '/logistica/pedidoE';

    public $id;
    public $fecha_ini;
    public $cliente;
    public $serie;
    public $fecha_ent;
    public $tipo;
    public $color;
    public $parrilla;
    public $techo;
    public $asiento;
    public $mica;
    public $mascara;
    public $adicional;
    public $equipamiento;
    public $vendedor;
    public $despacho;
    public $destino;
    public $estado;
    

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->fecha_ini = $args['fecha_ini'] ?? date('Y-m-d');
        $this->cliente = $args['cliente'] ?? '';
        $this->serie = $args['serie'] ?? '';
        $this->fecha_ent = $args['fecha_ent'] ?? '';
        $this->tipo = $args['tipo'] ?? '';
        $this->color = $args['color'] ?? '';
        $this->parrilla = $args['parrilla'] ?? '';
        $this->techo = $args['techo'] ?? '';
        $this->asiento = $args['asiento'] ?? '';
        $this->mica = $args['mica'] ?? '';
        $this->mascara = $args['mascara'] ?? '';
        $this->adicional = $args['adicional'] ?? '';
        $this->equipamiento = $args['equipamiento'] ?? '';
        $this->vendedor = $args['vendedor'] ?? '';
        $this->despacho = $args['despacho'] ?? '';
        $this->destino = $args['destino'] ?? '';
        $this->estado = $args['estado'] ?? 'Taller Sol';
    }

    public function validar(){
        if(!$this->cliente){
            self::$errores[] = "El cliente es obligatorio";
        }
        if(!$this->vendedor){
            self::$errores[] = "El vendedor es obligatorio";
        }
        if(!$this->fecha_ent){
            self::$errores[] = "La fecha de entrega es obligatoria";
        }
        if(!$this->tipo){
            self::$errores[] = "El tipo es obligatorio";
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
        
        return self::$errores;
    }

    public function getSerie(): string
    {
        return $this->serie;
    }

}