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
        <h1>Editar cliente</h1>
        <form action="actualizar_estudiante.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $_GET["id"] ?>">
            <div class="form-group">
                <label for="nombre">Nombre Cliente</label>
                <input value="<?php echo $estudiante->nombre ?>" name="nombre" required type="text" id="nombre" class="form-control" placeholder="Nombre">
            </div>
            <div class="form-group">
                <label for="grupo"> Nombre de jugador </label>
                <input value="<?php echo $estudiante->grupo ?>" name="grupo" required type="text" id="grupo" class="form-control" placeholder="Grupo">
            </div>
            <div class="form-group">
                <label for="semestre">No de juego</label>
                <input value="<?php echo $estudiante->semestre ?>" name="semestre" required type="text" id="semestre" class="form-control" placeholder="Semestre">
            </div>
            <div class="form-group">
                <label for="carrera">Tiempo</label>
                <input value="<?php echo $estudiante->carrera ?>" name="carrera" required type="text" id="carrera" class="form-control" placeholder="Carrera">
            </div>
            <div class="form-group">
                <button class="btn btn-success" type="submit">Guardar</button>
            </div>
        </form>
    </div>
</div>
<?php include_once "pie.php" ?>