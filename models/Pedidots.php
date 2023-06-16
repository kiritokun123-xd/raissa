<?php
namespace Model;
date_default_timezone_set("America/Phoenix");
class Pedidots extends ActiveRecord{
    
    protected static $tabla = 'pedidots';
    protected static $columnasDB = ['id', 'ord_trimoto', 'fecha_ini', 'fecha_fin', 'cliente', 'responsable', 'mod_trimoto', 'cod_trimoto','col_trimoto','mod_techo','techo','fil_techo','med_luna','franja','ima_cobertor','ima_trimoto','observacion'];
    protected static $redireccion = '/logistica/pedidoTS';

    public $id;
    public $ord_trimoto;
    public $fecha_ini;
    public $fecha_fin;
    public $cliente;
    public $responsable;
    public $mod_trimoto;
    public $cod_trimoto;
    public $col_trimoto;
    public $mod_techo;
    public $techo;
    public $fil_techo;
    public $med_luna;
    public $franja;
    public $ima_cobertor;
    public $ima_trimoto;
    public $observacion;
    

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->ord_trimoto = $args['ord_trimoto'] ?? '';
        $this->fecha_ini = $args['fecha_ini'] ?? date('Y-m-d');
        $this->fecha_fin = $args['fecha_fin'] ?? '';
        $this->cliente = $args['cliente'] ?? '';
        $this->responsable = $args['responsable'] ?? '';
        $this->mod_trimoto = $args['mod_trimoto'] ?? '';
        $this->cod_trimoto = $args['cod_trimoto'] ?? '';
        $this->col_trimoto = $args['col_trimoto'] ?? '';
        $this->mod_techo = $args['mod_techo'] ?? '';
        $this->techo = $args['techo'] ?? '';
        $this->fil_techo = $args['fil_techo'] ?? '';
        $this->med_luna = $args['med_luna'] ?? '';
        $this->franja = $args['franja'] ?? '';
        $this->ima_cobertor = $args['ima_cobertor'] ?? '';
        $this->ima_trimoto = $args['ima_trimoto'] ?? '';
        $this->observacion = $args['observacion'] ?? '';
    }
    public function validar(){
        if(!$this->fecha_fin){
            self::$errores[] = "La fecha de entrega es obligatoria";
        }
        if(!$this->mod_techo){
            self::$errores[] = "El modelo de Techo es obligatorio";
        }
        if(!$this->cliente){
            self::$errores[] = "El cliente es obligatorio";
        }
        if(!$this->mod_trimoto){
            self::$errores[] = "El modelo de trimoto es obligatorio";
        }
        if(!$this->responsable){
            self::$errores[] = "El responsable es obligatorio";
        }
        if(!$this->ima_cobertor){
            self::$errores[] = "La imagen pequeña es obligatorio";
        }
        if(!$this->ima_trimoto){
            self::$errores[] = "La imagen grande es obligatorio";
        }
        $this->oversize(45,$this->ord_trimoto);
        $this->oversize(100,$this->cliente);
        $this->oversize(100,$this->responsable);
        $this->oversize(45,$this->mod_trimoto);
        $this->oversize(45,$this->cod_trimoto);
        $this->oversize(100,$this->col_trimoto);
        $this->oversize(100,$this->mod_techo);
        $this->oversize(100,$this->techo);
        $this->oversize(100,$this->fil_techo);
        $this->oversize(100,$this->med_luna);
        $this->oversize(100,$this->franja);
    
        return self::$errores;
    }
    
    public function oversize($size,$str){
        if(strlen($str)>$size){
            self::$errores[] = "El campo " . $str . " excedió el limite de tamaño de texto";
            
        }
    }

    

}