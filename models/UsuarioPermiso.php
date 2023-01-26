<?php
namespace Model;

class UsuarioPermiso extends ActiveRecord{
    
    protected static $tabla = 'usuariopermiso';
    protected static $columnasDB = ['usuarioId', 'permisoId', 'permitido'];

    public $usuarioId;
    public $permisoId;
    public $permitido;

    public function __construct($args = [])
    {
        $this->usuarioId = $args['usuarioId'] ?? '';
        $this->permisoId = $args['permisoId'] ?? '';
        $this->permitido = $args['permitido'] ?? '';
    }

    public static function mostrarPermisos($id){
        $query = "SELECT usuarioId, permisoId, permitido FROM usuariopermiso WHERE usuarioId = " . $id;
        $resultado = self::constularSQL($query);
        
        return $resultado; 
    }

    public function crearPermisos(){
        
        $query = "SELECT MAX(id) AS id FROM usuarios";
        
        $resultado  = self::$db->query($query);  
        
        $id = mysqli_fetch_assoc($resultado)['id'];

        $query = "INSERT INTO usuariopermiso (usuarioId, permisoId, permitido) VALUES 
        (". $id .",1,'no'),(". $id .",2,'no'),(". $id .",3,'no'),(". $id .",4,'no');";

        $resultado = self::$db->query($query); 

        if($resultado){
            header('Location: /acceso/usuario?resultado=1');
        }
        
    }

    public static function actualizarPermisos($permisos, $id){
        $valores = ['no','no','no','no'];
        foreach($permisos as $permiso){
            $valores[$permiso-1] = 'si';
        }
        $query = "";
        for($i=0; $i<4; $i++){
            $query = "UPDATE usuariopermiso SET permitido = '". $valores[$i] ."' WHERE usuarioID = " .  $id . " AND permisoId = " . ($i + 1);
         
            $resultado = self::$db->query($query);
        }

        if($resultado){
            header('Location: /acceso/usuario?resultado=3');
        }
    }

}