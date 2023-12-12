<?php
// Verifica si se han enviado datos por el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conexión a la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "escuela";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica la conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Recupera los datos del formulario
    $numero_mesa = $_POST["numero_mesa"];
    $estado = $_POST["estado"];

    // Inserta los datos en la tabla de mesas
    $sql = "INSERT INTO Mesas (Numero_Mesa, Estado) VALUES ('$numero_mesa', '$estado')";

    if ($conn->query($sql) === TRUE) {
        echo "Mesa registrada con éxito";
    } else {
        echo "Error al registrar la mesa: " . $conn->error;
    }

    // Cierra la conexión
    $conn->close();
}
?>