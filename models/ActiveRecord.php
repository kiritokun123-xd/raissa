<?php

namespace Model;

class ActiveRecord{
    //BASE DE DATOS
    protected static $db;
    protected static $columnasDB = [];
    protected static $tabla = '';
    protected static $redireccion = '';

    //ERRORES
    protected static $errores = [];


    //DEFINIR CONEXION A LA BD
    public static function setDB($database){
        Self::$db = $database;
    }

    public function guardar($redireccion){
        
        //debuguear($this);
        if(!is_null($this->id)){
            //Actualizar
            //debuguear("actualizando...");
            $this->actualizar($redireccion);
             
        }else{
            //Creando un nuevo registo
            //debuguear("Creando...."); 
            $this->crear($redireccion); 
            
        }
    }
    public function actualizar($redireccion){
        
        //SANITIZAR LOS DATOS
        $atributos = $this->sanitizarAtributos();

        $valores = [];

        foreach($atributos as $key=>$value){
            $valores[] = "{$key}='{$value}'";
        }
        $query = "UPDATE " . static::$tabla . " SET ";
        $query .= join(', ', $valores);
        $query .= " WHERE id = " . self::$db->escape_string($this->id);
        $query .= " LIMIT 1 ";
        //debuguear($query);
        $resultado = self::$db->query($query);
        
        if($resultado){
            //REDIRECIONAR AL USUARIO
            header('Location: '. $redireccion .'?resultado=2');
        }
    }
    public function actualizarSerie($estadoS, $nums){
        
        //SANITIZAR LOS DATOS
        $atributos = $this->sanitizarAtributos();

        $valores = [];

        foreach($atributos as $key=>$value){
            $valores[] = "{$key}='{$value}'";
        }
        $query = "UPDATE " . static::$tabla . " SET ";
        $query .= "estado = '" . $estadoS;
        $query .= "' WHERE numserie LIKE '%" . $nums;
        $query .= "%' LIMIT 1 ";

        $resultado = self::$db->query($query);
    }
    public function actualizarMotor($estadoS, $nums){
        
        //SANITIZAR LOS DATOS
        $atributos = $this->sanitizarAtributos();

        $valores = [];

        foreach($atributos as $key=>$value){
            $valores[] = "{$key}='{$value}'";
        }
        $query = "UPDATE " . static::$tabla . " SET ";
        $query .= "estado = '" . $estadoS;
        $query .= "' WHERE nummotor LIKE '%" . $nums;
        $query .= "%' LIMIT 1 ";

        $resultado = self::$db->query($query);
    }

    public function crear($redireccion){
        
        //SANITIZAR LOS DATOS
        $atributos = $this->sanitizarAtributos();
        
        //INSERTAR EN LA BASE DE DATOS
        $query = "INSERT INTO " . static::$tabla . " ( ";
        $query .= join(', ', array_keys($atributos));
        $query .= " ) VALUES (' ";
        $query .= join("', '",array_values($atributos));
        $query .= "')";
        
        $resultado  = self::$db->query($query);  
        //
        if($resultado){
            //REDIRECIONAR AL USUARIO
            header('Location: '. $redireccion .'?resultado=1');
        }
    }

    //Eliminar un registro
    public function eliminar(){
        //ELIMINAR el registro 
        $query = "DELETE FROM " . static::$tabla . " WHERE id = " . self::$db->escape_string($this->id) . " LIMIT 1";

        $resultado = self::$db->query($query);

        if($resultado){
            $this->borrarImagen();
            header('Location: /admin?resultado=3');
        }
    }
    
    //IDENTIFICAR Y UNIR LOS ATRIBUTOS DE LA BD
    public function atributos(){
        $atributos = [];
        foreach(static::$columnasDB as $columna){
            if($columna === 'id') continue;
            $atributos[$columna] = $this->$columna;
        }
        return $atributos;
    }

    //SUBIDA DE ARCHIVOS
    public function setImagen($imagen){
        //Elimina la imagen previa
        if(!is_null($this->id)){
            $this->borrarImagen();
            
        }
        //asignar al atributo el nombre de la imagen
        if($imagen){
            $this->imagen = $imagen;
        }
    }
    //Elimina el archivo
    public function borrarImagen(){
        //comprobar is existe el archivo
        $existeArchivo = file_exists(CARPETA_IMAGENES . $this->imagen);
        if($existeArchivo){
            unlink(CARPETA_IMAGENES . $this->imagen);
        }
    }
    //SUBIDA DE ARCHIVOS
    public function setImagenT($ima_trimoto){
        //Elimina la imagen previa
        if(!is_null($this->id)){
            $this->borrarImagenT();
            
        }
        //asignar al atributo el nombre de la imagen
        if($ima_trimoto){
            $this->ima_trimoto = $ima_trimoto;
        }
    }
    //Elimina el archivo
    public function borrarImagenT(){
        //comprobar is existe el archivo
        $existeArchivo = file_exists(CARPETA_IMAGENES . $this->ima_trimoto);
        if($existeArchivo){
            unlink(CARPETA_IMAGENES . $this->ima_trimoto);
        }
    }
    //SUBIDA DE ARCHIVOS
    public function setImagenC($ima_cobertor){
        //Elimina la imagen previa
        if(!is_null($this->id)){
            $this->borrarImagenC();
            
        }
        //asignar al atributo el nombre de la imagen
        if($ima_cobertor){
            $this->ima_cobertor = $ima_cobertor;
        }
    }
    //Elimina el archivo
    public function borrarImagenC(){
        //comprobar is existe el archivo
        $existeArchivo = file_exists(CARPETA_IMAGENES . $this->ima_cobertor);
        if($existeArchivo){
            unlink(CARPETA_IMAGENES . $this->ima_cobertor);
        }
    }
    public function sanitizarAtributos(){
        $atributos = $this->atributos();
        $sanitizado = [];

        foreach($atributos as $key=>$value){
            $sanitizado[$key] = self::$db->escape_string($value);
        }
        return $sanitizado;
    }
    //VALIDACION
    public static function getErrores(){
        return static::$errores;  
    }

    public function validar(){
        static::$errores = [];
        return static::$errores;
    }

    //Lista todos los registros
    public static function all($offset,$cantidad){
        //ESCRIBIR EL QUERY
        $query = "SELECT * FROM " . static::$tabla . " LIMIT " . $offset . " , " . $cantidad;
        
        $resultado = self::constularSQL($query);

        return $resultado;
    }
    public static function allarticulo($offset,$cantidad){
        //ESCRIBIR EL QUERY
        $query = "SELECT * FROM " . static::$tabla . " order by nombre asc" . " LIMIT " . $offset . " , " . $cantidad ;
        
        $resultado = self::constularSQL($query);

        return $resultado;
    }
    public static function allFechaPedido($offset,$cantidad){
        //ESCRIBIR EL QUERY
        $query = "SELECT * FROM " . static::$tabla . " ORDER BY fecha_ini DESC, id DESC " . " LIMIT " . $offset . " , " . $cantidad;
        //debuguear($query);
        $resultado = self::constularSQL($query);

        return $resultado;
    }
    public static function allFechaSerie($offset,$cantidad){
        //ESCRIBIR EL QUERY
        $query = "SELECT * FROM " . static::$tabla . " ORDER BY fecha DESC, id DESC " . " LIMIT " . $offset . " , " . $cantidad;
        //debuguear($query);
        $resultado = self::constularSQL($query);

        return $resultado;
    }
    public static function allFechaContrato($offset,$cantidad){
        //ESCRIBIR EL QUERY
        $query = "SELECT * FROM " . static::$tabla . " ORDER BY fecha DESC, id DESC " . " LIMIT " . $offset . " , " . $cantidad;
        //debuguear($query);
        $resultado = self::constularSQL($query);

        return $resultado;
    }
    public static function allFecha($offset,$cantidad){
        //ESCRIBIR EL QUERY
        $query = "SELECT * FROM " . static::$tabla . " LIMIT " . $offset . " , " . $cantidad . " ORDER BY fecha";
        
        $resultado = self::constularSQL($query);

        return $resultado;
    }
    public static function totalPagina(){
        //ESCRIBIR EL QUERY
        $query = "SELECT * FROM " . static::$tabla;
        
        $resultado = self::constularSQL($query);

        $totalPagina = count($resultado);

        return $totalPagina;
    }
    public static function allMul($almacen, $offset, $cantidad){
        //ESCRIBIR EL QUERY
        $query = "SELECT * FROM " . static::$tabla . " WHERE almacenId = " . $almacen . " ORDER BY nombre" . " LIMIT " . $offset . " , " . $cantidad;

        $resultado = self::constularSQL($query);

        return $resultado;
    }

    //lista por busqueda ajax
    public static function filtrarAjax($columna,$filtro){
        //ESCRIBIR EL QUERY
        $query = "SELECT * FROM " . static::$tabla . " WHERE ". $columna ." LIKE " . "'%".$filtro."%'" . " ORDER BY id DESC";
        $resultado = self::constularSQL($query);
        return $resultado;
    }
    public static function filtrarAjaxMul($almacen, $columna,$filtro){
        //ESCRIBIR EL QUERY
        $query = "SELECT * FROM " . static::$tabla . " WHERE almacenId = ". $almacen ." AND ". $columna ." LIKE " . "'%".$filtro."%'";
        $resultado = self::constularSQL($query);
        return $resultado;
    }
   
    public static function someAjax($id){
        //ESCRIBIR EL QUERY
        $query = "SELECT * FROM " . static::$tabla . " WHERE articuloId = " . $id;
        $resultado = self::constularSQL($query);
        return $resultado;
    }
    // Obtiene determinado número de registros
    public static function get($cantidad){
        //ESCRIBIR EL QUERY
        $query = "SELECT * FROM " . static::$tabla . " LIMIT " . $cantidad;
        
        $resultado = self::constularSQL($query);

        return $resultado;
    }
    public static function getSeries(){
        //ESCRIBIR EL QUERY
        $query = "SELECT * FROM " . static::$tabla . " WHERE estado like '%disponible%' ORDER BY id DESC";
        //debuguear($query);
        $resultado = self::constularSQL($query);

        return $resultado;
    }
    public static function getMotores(){
        //ESCRIBIR EL QUERY
        $query = "SELECT * FROM " . static::$tabla . " WHERE estado like '%disponible%' ORDER BY id DESC";
        //debuguear($query);
        $resultado = self::constularSQL($query);

        return $resultado;
    }


    //Busca un registro por su id
    public static function find($id){
        $query = "SELECT * FROM " . static::$tabla . " WHERE id = ${id}";

        $resultado = self::constularSQL($query);

        return array_shift($resultado);
    }

    public static function constularSQL($query){
        //consultar la bd
        $resultado = self::$db->query($query);

        //Iterar sobre los resultados
        $array = [];

        while($registro = $resultado->fetch_assoc()){
            $array[] = static::crearObejto($registro);
        }
        
        //Liberar memoria
        $resultado->free();

        //retornar los resultados
        return $array;
    }

    protected static function crearObejto($registro){
        $objeto = new static;
        foreach($registro as $key=>$value){
            if(property_exists($objeto, $key)){
                $objeto->$key = $value;
            }
        }
        return $objeto;
    }

    //Sincroniza el objeto en memoria con los cambios realizads por el usuario
    public function sincronizar($args = []){
        foreach($args as $key => $value){
            if(property_exists($this, $key) && !is_null($value)){
                $this->$key=$value;
            }
        }
    }
}