<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "escuela";

// Create a connection
$mysqli = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Your SQL query
$sql = "SELECT
            materias.id AS materia_id,
            materias.nombre AS materia_nombre,
            notas_estudiantes_materias.id AS nota_id,
            notas_estudiantes_materias.id_estudiante,
            notas_estudiantes_materias.id_materia,
            notas_estudiantes_materias.puntaje
        FROM
            estudiantes
        JOIN
            notas_estudiantes_materias ON estudiantes.id = notas_estudiantes_materias.id_estudiante
        JOIN
            materias ON materias.id = notas_estudiantes_materias.id_materia
        WHERE
            estudiantes.id = '4' AND estudiantes.password = '1s'";

// Execute the query
$result = $mysqli->query($sql);

// Check if the query was successful
if ($result) {
    // Fetch the result set as an associative array
    $data = $result->fetch_all(MYSQLI_ASSOC);

    // Display the results (you can adjust this part based on your needs)
    foreach ($data as $row) {
        echo " ID: " . $row['materia_id'] . "<br>";
        echo "Productos: " . $row['materia_nombre'] . "<br>";
        echo "Costo_ID: " . $row['nota_id'] . "<br>";
        echo "ID Estudiante: " . $row['id_estudiante'] . "<br>";
        echo "ID Materia: " . $row['id_materia'] . "<br>";
        echo "Puntaje: " . $row['puntaje'] . "<br><br>";
    }
} else {
    // Display an error message if the query fails
    echo "Error:err " . $mysqli->error;
}
?>