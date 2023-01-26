<?php
namespace Model;
date_default_timezone_set("America/Phoenix");
class Pedidot extends ActiveRecord{
    
    protected static $tabla = 'pedidot';
    protected static $columnasDB = ['id', 'ord_trimoto', 'fecha_ini', 'fecha_fin', 'cliente', 'responsable', 'mod_trimoto', 'cod_trimoto','col_trimoto','mod_techo','col_techo','fil_techo','medialuna','franja','col_cob_post',
    'mod_ven_post','fil_ventana','aletas','col_cob_late','mod_ven_lat','dib_lat','dib_lat','col_puer_post','dib_puer_post','col_dib_puer_post','mod_ven_puer_post','fil_ven_puer_post','col_puer_del','dib_puer_del','vent_puer_del','fil_ven_puer_del',
    'mod_mascara','col_mascara','col_fil_mascara','dib_mascara','col_dib_mascara','bol_mascara','tam_individual','col_individual','mod_ven_individual','fil_ven_individual','hue_individual','bol_individual','observacion'];
    protected static $redireccion = '/logistica/pedidoT';

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
    public $col_techo;
    public $fil_techo;
    public $medialuna;
    public $franja;
    public $col_cob_post;
    public $mod_ven_post;
    public $fil_ventana;
    public $aletas;
    public $col_cob_late;
    public $mod_ven_lat;
    public $dib_lat;
    public $col_puer_post;
    public $dib_puer_post;
    public $col_dib_puer_post;
    public $mod_ven_puer_post;
    public $fil_ven_puer_post;
    public $col_puer_del;
    public $dib_puer_del;
    public $vent_puer_del;
    public $fil_ven_puer_del;
    public $mod_mascara;
    public $col_mascara;
    public $col_fil_mascara;
    public $dib_mascara;
    public $col_dib_mascara;
    public $bol_mascara;
    public $tam_individual;
    public $col_individual;
    public $mod_ven_individual;
    public $fil_ven_individual;
    public $hue_individual;
    public $bol_individual;
    public $observacion;
    

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->ord_trimoto = $args['ord_trimoto'] ?? '';
        $this->fecha_ini = $args['fecha_ini'] ?? date('Y-m-d');
        $this->fecha_fin = $args['fecha_fin'] ?? '';
        $this->cliente = $args['cliente'] ?? '';
        $this->responsable = $arg['responsable'] ?? '';
        $this->mod_trimoto = $arg['mod_trimoto'] ?? '';
        $this->cod_trimoto = $arg['cod_trimoto'] ?? '';
        $this->col_trimoto = $arg['col_trimoto'] ?? '';
        $this->mod_techo = $arg['mod_techo'] ?? '';
        $this->col_techo = $arg['col_techo'] ?? '';
        $this->fil_techo = $arg['fil_techo'] ?? '';
        $this->medialuna = $arg['medialuna'] ?? '';
        $this->franja = $arg['franja'] ?? '';
        $this->col_cob_post = $arg['col_cob_post'] ?? '';
        $this->mod_ven_post = $arg['mod_ven_post'] ?? '';
        $this->fil_ventana = $arg['fil_ventana'] ?? '';
        $this->aletas = $arg['aletas'] ?? '';
        $this->col_cob_late = $arg['col_cob_late'] ?? '';
        $this->mod_ven_lat = $arg['mod_ven_lat'] ?? '';
        $this->dib_lat = $arg['dib_lat'] ?? '';
        $this->col_puer_post = $arg['col_puer_post'] ?? '';
        $this->dib_puer_post = $arg['dib_puer_post'] ?? '';
        $this->col_dib_puer_post = $arg['col_dib_puer_post'] ?? '';
        $this->mod_ven_puer_post = $arg['mod_ven_puer_post'] ?? '';
        $this->fil_ven_puer_post = $arg['fil_ven_puer_post'] ?? '';
        $this->col_puer_del = $arg['col_puer_del'] ?? '';
        $this->dib_puer_del = $arg['dib_puer_del'] ?? '';
        $this->vent_puer_del = $arg['vent_puer_del'] ?? '';
        $this->fil_ven_puer_del = $arg['fil_ven_puer_del'] ?? '';
        $this->mod_mascara = $arg['mod_mascara'] ?? '';
        $this->col_mascara = $arg['col_mascara'] ?? '';
        $this->col_fil_mascara = $arg['col_fil_mascara'] ?? '';
        $this->dib_mascara = $arg['dib_mascara'] ?? '';
        $this->col_dib_mascara = $arg['col_dib_mascara'] ?? '';
        $this->bol_mascara = $arg['bol_mascara'] ?? '';
        $this->tam_individual = $arg['tam_individual'] ?? '';
        $this->col_individual = $arg['col_individual'] ?? '';
        $this->mod_ven_individual = $arg['mod_ven_individual'] ?? '';
        $this->fil_ven_individual = $arg['fil_ven_individual'] ?? '';
        $this->hue_individual = $arg['hue_individual'] ?? '';
        $this->bol_individual = $arg['bol_individual'] ?? '';
        $this->observacion = $arg['observacion'] ?? '';
    }

    public function validar(){
        if(!$this->fecha_fin){
            self::$errores[] = "La fecha de entrega es obligatoria";
        }
        if(!$this->ord_trimoto){
            self::$errores[] = "El No orden de trimoto es obligatorio";
        }
        if(!$this->cliente){
            self::$errores[] = "El cliente es obligatorio";
        }
        //if(!$this->mod_trimoto){
        //    self::$errores[] = "El modelo de trimoto es obligatorio";
        //}
        //if(!$this->responsable){
        //    self::$errores[] = "El responsable es obligatorio";
        //}
        
        return self::$errores;
    }

}