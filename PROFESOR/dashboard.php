<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <style>
        body {
            background-color: #f4f4f4;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .dashboard-container {
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            max-width: 400px;
            width: 100%;
        }

        h2 {
            color: #333;
            margin-bottom: 20px;
        }

        p {
            margin-bottom: 10px;
            color: #555;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="dashboard-container">
        <h2>Cuenta de Empleado</h2>

        <?php
        session_start();

        // Check if user is logged in
        if (!isset($_SESSION["user_id"])) {
            header("Location: login.php");
            exit();
        }
        ?>

        <p>Bienvenido, <?php echo $_SESSION["user_nombre"]; ?>!</p>
        <p>Ocupacion <?php echo $_SESSION["user_grupo"]; ?></p>
        <p>Asiganara los precios y el total de ventas </p>
        <p>Horario: de 7:00 a 2:00</p>
        <a href="\ESCUELA\ESTUDIANTES\mostrar_estudiantes.php">asignar ventas</a>
        <p><a href="logout.php">Salir</a></p>
    </div>

</body>
</html>