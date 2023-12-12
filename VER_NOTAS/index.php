<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boletas</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <div class="container">
        <h1>Boleta Académico</h1>

        <!-- Mostrar el formulario para ingresar el número de estudiante -->
        <form action="cardex.php" method="post">
            <label for="numero_estudiante">Número de Control del Estudiante:</label>
            <input type="text" id="numero_estudiante" name="numero_estudiante" required>
            <button type="submit">Buscar Boleta </button>
        </form>

    </div>

</body>
</html>