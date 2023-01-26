<?php
namespace Model;

class JoinArticuloStock extends ActiveRecord{
    
    protected static $tabla = 'articulos LEFT JOIN articuloalmacen ON articuloalmacen.articuloId = articulos.id';
    protected static $columnasDB = ['id', 'nombre', 'descripcion', 'costo', 'venta', 'imagen'];
    protected static $redireccion = '/logistica/inventario-articulos';
    protected static $redireccionar = false;

    public $id;
    public $nombre;
    public $descripcion;
    public $costo;
    public $venta;
    public $imagen;
    public $almacenId;
    public $stock;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->descripcion = $args['descripcion'] ?? '';
        $this->costo = $args['costo'] ?? '';
        $this->venta = $args['venta'] ?? '';
        $this->imagen = $args['imagen'] ?? '';
        $this->almacenId = $args['almacenId'] ?? '';
        $this->stock = $args['stock'] ?? '';
    }



    public static function findMul($id, $almacen){
        $query = "SELECT * FROM " . static::$tabla . " WHERE articuloId = ${id} AND almacenId = ${almacen}";

        $resultado = self::constularSQL($query);

        return array_shift($resultado);
    }
}