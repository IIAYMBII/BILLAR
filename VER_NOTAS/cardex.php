<?php

$host = "localhost";
$usuario = "root";
$contrasenia = "";
$base_de_datos = "escuela";
$mysqli = new mysqli($host, $usuario, $contrasenia, $base_de_datos);
if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

// ... (your existing code)

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verifica si se envió el formulario
    $numero_estudiante = $_POST['numero_estudiante'];

    if (array_key_exists($numero_estudiante, $estudiantes)) {
        // El estudiante existe, muestra su kárdex
        $estudiante = $estudiantes[$numero_estudiante];

        // Fetch the notas from the database for the specified student
        $notas = Nota::obtenerDeEstudiante($numero_estudiante);

        // Combine materias and notas
        $materias_con_notas = Nota::combinar($materias, $notas);
    } else {
        // El estudiante no existe, muestra un mensaje de error
        $error = "Estudiante no encontrado";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <!-- ... (your existing head content) -->
</head>
<body>

    <div class="container">
        <h1>Boleta Académico "5° Semestre"</h1>

        <?php if (isset($error)): ?>
            <p class="error"><?php echo $error; ?></p>
        <?php elseif (isset($estudiante)): ?>
            <h2><?php echo $estudiante['nombre']; ?></h2>
            <button type="button" onclick="window.print()">Imprimir</button>
            <table>
                <tr>
                    <th>Materia</th>
                    <th>Calificación</th>
                </tr>
                <?php foreach ($materias_con_notas as $materia): ?>
                    <tr>
                        <td><?php echo $materia['nombre']; ?></td>
                        <td><?php echo $materia['puntaje']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php endif; ?>
    </div>

</body>
</html>