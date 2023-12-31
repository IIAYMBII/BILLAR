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
include_once "conexion.php";
include_once "Estudiante.php";
include_once "encabezado.php";
$estudiante = Estudiante::obtenerUno($_GET["id"]);
?>
<div class="row">
    <div class="col-12">
        <h1>Editar estudiante</h1>
        <form action="actualizar_estudiante.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $_GET["id"] ?>">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input value="<?php echo $estudiante->nombre ?>" name="nombre" required type="text" id="nombre" class="form-control" placeholder="Nombre">
            </div>
            <div class="form-group">
                <label for="grupo">Jugadorr</label>
                <input value="<?php echo $estudiante->grupo ?>" name="grupo" required type="text" id="grupo" class="form-control" placeholder="Jugador">
            </div>|
            <div class="form-group">
                <label for="semestre">Tipo de Juego</label>
                <input value="<?php echo $estudiante->semestre ?>" name="semestre" required type="text" id="semestre" class="form-control" placeholder="Tipo de juego">
            </div>
            <div class="form-group">
                <label for="carrera">Horario</label>
                <input value="<?php echo $estudiante->carrera ?>" name="carrera" required type="text" id="carrera" class="form-control" placeholder="Horario">
            </div>
            <div class="form-group">
                <label for="user">Usuario</label>
                <input value="<?php echo $estudiante->user ?>" name="user" required type="text" id="user" class="form-control" placeholder="User">
            </div>
            <div class="form-group">
                <label for="password">password</label>
                <input value="<?php echo $estudiante->password ?>" name="password" required type="text" id="password" class="form-control" placeholder="Password">
            </div>
            <div class="form-group">
                <button class="btn btn-success" type="submit">Guardar</button>
            </div>
        </form>
    </div>
</div>
<?php include_once "pie.php" ?>