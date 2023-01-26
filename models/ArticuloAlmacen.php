<?php
namespace Model;


class ArticuloAlmacen extends ActiveRecord{
    
    protected static $tabla = 'articuloalmacen';
    protected static $columnasDB = ['articuloId', 'almacenId', 'stock',];
    protected static $redireccion = '/logistica/inventario-articulos';

    public $articuloId;
    public $almacenId;
    public $stock;

    public function validar(){
        if(!isset($this->stock)){
            self::$errores[] = "El stock es obligatorio";
        }
        if($this->stock <= -1){
            self::$errores[] = "El stock no puede ser negativo";
        }
        if($this->stock > 99999){
            self::$errores[] = "Demasiado Stock!";
        }
        return self::$errores;
    }

    public function guardarRedi($redireccion){
        
        //debuguear($this);
        if(!is_null($this->articuloId)){
            //Actualizar
            //debuguear("actualizando...");
            $this->actualizarRedi($redireccion);
             
        }else{
            //Creando un nuevo registo
            //debuguear("Creando...."); 
            $this->crear($redireccion); 
            
        }
    }
    public function actualizarRedi($redireccion){
        
        //SANITIZAR LOS DATOS
        $atributos = $this->sanitizarAtributos();

        $valores = [];

        foreach($atributos as $key=>$value){
            $valores[] = "{$key}='{$value}'";
        }
        $query = "UPDATE " . static::$tabla . " SET ";
        $query .= join(', ', $valores);
        $query .= " WHERE articuloId = " . self::$db->escape_string($this->articuloId);
        $query .= " AND almacenId = " . self::$db->escape_string($this->almacenId);
        $query .= " LIMIT 1 ";
        //debuguear($query);
        $resultado = self::$db->query($query);
        
        if($resultado){
            //REDIRECIONAR AL USUARIO
            header('Location: '. $redireccion .'?resultado=2');
        }
    }
    public static function findMul($id, $almacen){
        $query = "SELECT * FROM " . static::$tabla . " WHERE articuloId = ${id} AND almacenId =${almacen}";

        $resultado = self::constularSQL($query);

        return array_shift($resultado);
    }
    public function __construct($args = [])
    {
        $this->articuloId = $args['articuloId'] ?? '';
        $this->almacenId = $args['almacenId'] ?? '';
        $this->stock = $args['stock'] ?? '';
    }
    public function crearStock(){
        
        $query = "SELECT MAX(id) AS id FROM articulos";
        
        $resultado  = self::$db->query($query);  
        
        $id = mysqli_fetch_assoc($resultado)['id'];

        $query = "INSERT INTO articuloalmacen (articuloId, almacenId, stock) VALUES 
        (". $id .",1,0),(". $id .",2,0),(". $id .",3,0);";

        $resultado  = self::$db->query($query); 

        if($resultado){
            //REDIRECIONAR AL USUARIO
            header('Location: '. static::$redireccion .'?resultado=1');
        }
        
    }
 
}