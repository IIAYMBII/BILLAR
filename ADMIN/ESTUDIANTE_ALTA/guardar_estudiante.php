<?php
/*

*/ ?>
<?php
include_once "conexion.php";
include_once "Estudiante.php";
$estudiante = new Estudiante($_POST["nombre"], $_POST["grupo"], $_POST["semestre"], $_POST["carrera"], $_POST["user"], $_POST["password"]);
$estudiante ->guardar();
header("Location: mostrar_estudiantes.php");
