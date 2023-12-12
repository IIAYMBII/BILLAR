<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include database connection
    include("db_connection.php");

    // Get username and password from the form
    $username = $_POST["user"];
    $password = $_POST["password"];

    // Query to check if the user exists
    $query = "SELECT id, nombre, especialidad FROM profesores WHERE user = ? AND password = ?";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $stmt->store_result();

    // If user exists, set session variables and redirect
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $nombre, $especialidad);
        $stmt->fetch();

        $_SESSION["user_id"] = $id;
        $_SESSION["user_nombre"] = $nombre;
        $_SESSION["user_grupo"] = $especialidad;
        

        header("Location: dashboard.php");
    } else {
        // Redirect back to login page if login fails
        echo "<script> alert('CONSULTANDO DATOS');window.location= '/ESCUELA/PROFESOR/login.php' </script>";       
    }

    $stmt->close();
    $mysqli->close();
} else {
    // Redirect to login page if accessed directly
    header("Location: login.php");
}
?>