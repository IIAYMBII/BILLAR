<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INICAR SESION</title>
</head>
<body>
    <section>
        <div class="form-box">
            <div class="from-vale">
                <form action="login_process.php" method="post">
                <h2>Cuenta de cliente</h2>
                <div class="inputbox">
                    <ion-icon name="mail-outline"></ion-icon>
                        <input type="text" id="user" name="user" required>
                        <label for="user">Usuario:</label>
                </div>
                <div class="inputbox">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input type="password" id="password" name="password" required>
                    <label for="password">Contraseña:</label>
                </div>
                <div class="forget">
                    
                </div>
                <button type="submit">Iniciar sesion</button>
                <div class="register">
                <p><a href="\ESCUELA\MENU\index.html">Salir </a></p>
                </div>
            </form>
            </div>





        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>