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
class Estudiante
{
    private $nombre, $grupo, $semestre, $carrera, $user,$password, $id;

    public function __construct($nombre, $grupo, $semestre, $carrera, $user,$password, $id = null)
    {
        $this->nombre = $nombre;
        $this->grupo = $grupo;
        $this->semestre = $semestre;
        $this->carrera = $carrera;
        $this->user = $user;
        $this->password = $password;
        if ($id) {
            $this->id = $id;
        }
    }
    public function guardar()
    {
        global $mysqli;
        $sentencia = $mysqli->prepare("INSERT INTO estudiantes 
        (nombre, grupo, semestre, carrera, user, password )
         VALUES 
         (?, ?, ?,?,?,?)");
        $sentencia->bind_param("ssssss", $this->nombre, $this->grupo, $this->semestre, $this->carrera, $this->user, $this->password);
        $sentencia->execute();
    }

    public static function obtener()
    {
        global $mysqli;
        $resultado = $mysqli->query("SELECT id, nombre, grupo, semestre, carrera, user, password FROM estudiantes");
        return $resultado->fetch_all(MYSQLI_ASSOC);
    }
    public static function obtenerUno($id)
    {
        global $mysqli;
        $sentencia = $mysqli->prepare("SELECT id, nombre, grupo, semestre, carrera, user, password  FROM estudiantes WHERE id = ?");
        $sentencia->bind_param("i", $id);
        $sentencia->execute();
        $resultado = $sentencia->get_result();
        return $resultado->fetch_object();
    }
    public function actualizar()
    {
        global $mysqli;
        $sentencia = $mysqli->prepare("update estudiantes set nombre = ?, grupo = ?, semestre=?, carrera=?, user=?, password=? where id = ?");
        $sentencia->bind_param("ssssssi",$this->nombre, $this->grupo, $this->semestre, $this->carrera, $this->user, $this->password, $this->id);
        $sentencia->execute();
    }

    public static function eliminar($id)
    {
        global $mysqli;
        $sentencia = $mysqli->prepare("DELETE FROM estudiantes WHERE id = ?");
        $sentencia->bind_param("i", $id);
        $sentencia->execute();
    }
}
