<?php
namespace Model;

class Indicador1 extends ActiveRecord{
    
    protected static $tabla = 'indicador1';
    protected static $columnasDB = ['id', 'fecha', 'ven_acumulada', 'inv_inicial', 'inv_entrante', 'inv_final', 'inv_prom', 'rot_mercancia'];
    protected static $redireccion = '/dashboard';

    public $id;
    public $fecha;
    public $ven_acumulada;
    public $inv_inicial;
    public $inv_entrante;
    public $inv_final;
    public $inv_prom;
    public $rot_mercancia;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->fecha = $args['fecha'] ?? '';
        $this->ven_acumulada = $args['ven_acumulada'] ?? '';
        $this->inv_inicial = $args['inv_inicial'] ?? '';
        $this->inv_entrante = $args['inv_entrante'] ?? '';
        $this->inv_final = $args['inv_final'] ?? '';
        $this->inv_prom = $args['inv_prom'] ?? '';
        $this->rot_mercancia = $args['rot_mercancia'] ?? '';
    }
    public function validar(){
        if(!$this->fecha){
            self::$errores[] = "La fecha es obligatoria";
        }
        if(!$this->ven_acumulada){
            self::$errores[] = "La venta acumulada es obligatoria";
        }
        if(!$this->inv_inicial){
            self::$errores[] = "El inventario inicial es obligatorio";
        }
        if(!$this->inv_entrante){
            self::$errores[] = "El inventario entrante es obligatorio";
        }
        if(!$this->inv_final){
            self::$errores[] = "El inventario final es obligatorio";
        }
        if(!$this->inv_prom){
            self::$errores[] = "El inventario promedio es obligatorio";
        }
        if(!$this->rot_mercancia){
            self::$errores[] = "El índice es obligatorio";
        }

        return self::$errores;
    }

}