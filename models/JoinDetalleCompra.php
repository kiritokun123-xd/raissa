<?php
namespace Model;

class JoinDetalleCompra extends ActiveRecord{
    
    protected static $tabla = 'articulos LEFT JOIN articuloalmacen ON articuloalmacen.articuloId = articulos.id';
    protected static $columnasDB = ['id', 'descripcion', 'fecha', 'codigo', 'articulo', 'um', 'cantidad'];
    protected static $redireccion = '/compras';
    protected static $redireccionar = false;

    public $id;
    public $descripcion;
    public $fecha;
    public $codigo;
    public $articulo;
    public $um;
    public $cantidad;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->descripcion = $args['descripcion'] ?? '';
        $this->fecha = $args['fecha'] ?? '';
        $this->codigo = $args['codigo'] ?? '';
        $this->articulo = $args['articulo'] ?? '';
        $this->um = $args['cantidad'] ?? '';
    }

}