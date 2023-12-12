
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos del cliente </title>
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
        
    body {
      font-family: Arial, sans-serif;
    }

    /* Estilos específicos para impresión */
    @media print {
      body {
        font-size: 12px;
      }

      /* Ocultar elementos no deseados en la impresión */
      .no-imprimir {
        display: none;
      }
    }
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 800px;
    margin: 50px auto;
    padding: 20px;
    background-color: #f5f5f5;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

form {
    margin-bottom: 20px;
}

label {
    display: block;
    margin-bottom: 5px;
}

input {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
}

button {
    padding: 10px;
    background-color: #4caf50;
    color: #fff;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

th, td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
}

th {
    background-color: #4caf50;
    color: #fff;
}

.error {
    color: #ff0000;
    font-weight: bold;
}
  
    </style>
</head>
<body>

    <div class="dashboard-container">
        <h2>Datos del cliente</h2>

        <?php
        
       session_start();
       
        // Check if user is logged in
        if (!isset($_SESSION["user_id"])) {
            header("Location: login.php");
            exit();
        }
        ?>

        <p>Bienvenido, <?php echo $_SESSION["user_nombre"]; ?>!</p>
        <p>Jugador: <?php echo $_SESSION["user_grupo"]; ?></p>
        <p>Tipo de juego: <?php echo $_SESSION["user_semestre"]; ?></p>
        <p>Horario de entrada: <?php echo $_SESSION["user_carrera"]; ?></p>
        <p>Horario de salida: <?php echo date("H:i:s"); ?></p>

        <p>clave: <?php echo $_SESSION["user_id"]; ?></p>

        <p><a href="logout.php">salir</a></p>
    </div>



    <div class="container">
        <h1>Pagos  del cliente </h1>
       <?php
        include "db_connection.php";
        $id_s=$_SESSION["user_id"];
        
        $sql =$mysqli->query ("SELECT
            materias.nombre AS materia_nombre,
            notas_estudiantes_materias.id_estudiante,
            notas_estudiantes_materias.id_materia,
            notas_estudiantes_materias.puntaje,
            estudiantes.nombre AS estudiante_nombre,
            estudiantes.grupo,
            estudiantes.semestre,
            estudiantes.carrera
        FROM
            estudiantes
        JOIN
            notas_estudiantes_materias ON estudiantes.id = notas_estudiantes_materias.id_estudiante
        JOIN
            materias ON materias.id = notas_estudiantes_materias.id_materia
        WHERE
            estudiantes.id = $id_s ");
            if ($sql) {
                // Check if there are rows in the result set
                if ($sql->num_rows > 0) {
                    // Output data of each row
                    echo "<table style='border-collapse: collapse; width: 100%;' border='1'><tr style='background-color: #f2f2f2;'><th>Nombre del producto</th><th>Cliente</th><th>Costo</th></tr>";
                    while ($row = $sql->fetch_assoc()) {
                        echo "<tr><td>" . $row["materia_nombre"] . "</td><td>" . $row["estudiante_nombre"] . "</td><td>" . $row["puntaje"];
                    }
                    echo "</table>";
                    
                } else {
                    echo "No records found";
                }
            } else {
                // Display an error message if the query fails
                echo "Error: " . $mysqli->error;
            }
           
           
            
            
            
// Close the connection
$mysqli->close();
 // Inicia la sesión
           
            
          
?>
 <button type="button" onclick="window.print()">Imprimir</button>
    </div>
 
   <?php
    // Recupera la variable de la sesión
            if (isset($_GET['mi_variable'])) {
                $variable_recibida = urldecode($_GET['mi_variable']);
            
                // Haz algo con la variable recibida
                echo "TOTAL A PAGAR: " . $variable_recibida;
            } else {
                echo "No se recibió ninguna variable.";
            }
         ?>   

</body>
</html>
