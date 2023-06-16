<?php
namespace Model;
date_default_timezone_set("America/Phoenix");
class DetallesCompra extends ActiveRecord{
    
    protected static $tabla = 'detalle';
    protected static $columnasDB = ['id', 'id_compras', 'id_articulo','cantidad'];
    protected static $redireccion = '/compras';

    public $id;
    public $id_compras;
    public $id_articulo;
    public $cantidad;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->id_compras = $args['id_compras'] ?? '';
        $this->id_articulo = $args['id_articulo'] ?? '';
        $this->cantidad = $args['cantidad'] ?? '';
    }

    public function validar(){
        if(!$this->cantidad){
            self::$errores[] = "La cantidad es obligatoria";
        }
        
        return self::$errores;
    }

}