
<?php
include_once "conexion.php";
include_once "Profesores.php";
include_once "encabezado.php";
$profesor = Profesor::obtenerUno($_GET["id"]);
?>
<div class="row">
    <div class="col-12">
        <h1>Editar profesor</h1>
        <form action="actualizar_profesor.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $_GET["id"] ?>">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input value="<?php echo $profesor->nombre ?>" name="nombre" required type="text" id="nombre" class="form-control" placeholder="Nombre">
            </div>
            <div class="form-group">
                <label for="especialidad">Especialidad</label>
                <input value="<?php echo $profesor->especialidad ?>" name="especialidad" required type="text" id="especialidad" class="form-control" placeholder="Especialidad">
            </div>
            <div class="form-group">
                <label for="user">Usuario</label>
                <input value="<?php echo $profesor->user ?>" name="user" required type="text" id="user" class="form-control" placeholder="User">
            </div>
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input value="<?php echo $profesor->password ?>" name="password" required type="text" id="password" class="form-control" placeholder="Password">
            </div>
            <div class="form-group">
                <button class="btn btn-success" type="submit">Guardar</button>
            </div>
        </form>
    </div>
</div>
<?php include_once "pie.php" ?>