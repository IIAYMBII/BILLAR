<?php
/*

  ____          _____               _ _           _       
 |  _ \        |  __ \             (_) |         | |      
 | |_) |_   _  | |__) |_ _ _ __ _____| |__  _   _| |_ ___ 
 |  _ <| | | | |  ___/ _` | '__|_  / | '_ \| | | | __/ _ \
 | |_) | |_| | | |  | (_| | |   / /| | |_) | |_| | ||  __/
 |____/ \__, | |_|   \__,_|_|  /___|_|_.__/ \__, |\__\___|
         __/ |                               __/ |        
        |___/                               |___/         
    
____________________________________
/ Si necesitas ayuda, contáctame en \
\ https://parzibyte.me               /
 ------------------------------------
        \   ^__^
         \  (oo)\_______
            (__)\       )\/\
                ||----w |
                ||     ||
Creado por Parzibyte (https://parzibyte.me). Este encabezado debe mantenerse intacto,
excepto si este es un proyecto de un estudiante.
*/ ?>
<?php
class Profesor
{
    private $nombre, $especialidad, $user,$password, $id;

    public function __construct($nombre,$especialidad,$user,$password, $id = null)
    {
        $this->nombre = $nombre;
        $this->especialidad = $especialidad;
        $this->user = $user;
        $this->password = $password;
        if ($id) {
            $this->id = $id;
        }
    }

    public function guardar()
    {
        global $mysqli;
        $sentencia = $mysqli->prepare("INSERT INTO profesores 
        (nombre, especialidad, user, password)
         VALUES 
         (?, ?, ?, ?)");
        $sentencia->bind_param("ssss", $this->nombre, $this->especialidad, $this->user, $this->password);
        $sentencia->execute();


    }

    public static function obtener()
    {
        global $mysqli;
        $resultado = $mysqli->query("SELECT id, nombre,especialidad, user, password FROM profesores");
        return $resultado->fetch_all(MYSQLI_ASSOC);
    }
    public static function obtenerUno($id)
    {
        global $mysqli;
        $sentencia = $mysqli->prepare("SELECT id, nombre, especialidad,user, password FROM profesores WHERE id = ?");
        $sentencia->bind_param("i", $id);
        $sentencia->execute();
        $resultado = $sentencia->get_result();
        return $resultado->fetch_object();
    }
    public function actualizar()
    {
        global $mysqli;
        $sentencia = $mysqli->prepare("update profesores set nombre = ?, especialidad = ?, user=?, password=? where id = ?");
        $sentencia->bind_param("ssssi", $this->nombre, $this->especialidad, $this->user, $this->password, $this->id);
        $sentencia->execute();
    }

    public static function eliminar($id)
    {
        global $mysqli;
        $sentencia = $mysqli->prepare("DELETE FROM profesores WHERE id = ?");
        $sentencia->bind_param("i", $id);
        $sentencia->execute();
    }
}
