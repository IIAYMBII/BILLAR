<?php
/*

  ____          _____               _ _           _       
 |  _ \        |  __ \             (_) |         | |      
 | |_) |_   _  | |__) |_ _ _ __ _____| |__  _   _| |_ ___ 
 |  _ <| | | | |  ___/ _` | '__|_  / | '_ \| | | | __/ _ \
 | |_) | |_| | | |  | (_| | |   / /| | |_) | |_| | ||  __/
 |____/ \__, | |_|   \__,_|_|  /___|_|_.__/ \__, |\__\___|
         __/ |                               __/ |        
        |___/                               |___/         
    
____________________________________
/ Si necesitas ayuda, contáctame en \
\ https://parzibyte.me               /
 ------------------------------------
        \   ^__^
         \  (oo)\_______
            (__)\       )\/\
                ||----w |
                ||     ||
Creado por Parzibyte (https://parzibyte.me). Este encabezado debe mantenerse intacto,
excepto si este es un proyecto de un estudiante.
*/ ?>
<?php include "encabezado.php" ?>
<div class="row">
    <div class="col-12">
        <h1>Registro de clientes</h1>
        <form action="guardar_estudiante.php" method="POST">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input name="nombre" required type="text" id="nombre" class="form-control" placeholder="Nombre">
            </div>
            <div class="form-group">
                <label for="grupo">Jugador</label>
                <input name="grupo" required type="text" id="grupo" class="form-control" placeholder="Jugador">
                
            <!-- Agrega más opciones según sea necesario -->
        </select>

            </div>
            <div class="form-group">
                <label for="semestre">tipo de juego</label>
                
                <select name="semestre" required type="text" id="semestre" class="form-control" placeholder="Semestre">
            <option value="XBOX">XBOX</option>
            <option value="BILLAR">BILLAR</option>
            <option value="FUTBOL">FUTBOL</option>
</select>
            </div>
            <div class="form-group">
                <label for="carrera">tiempo</label>
                <input name="carrera" required type="text" id="carrera" class="form-control" placeholder="Tiempo">
            </div>
            <div class="form-group">
                <label for="user">Usuario</label>
                <input name="user" required type="text" id="user" class="form-control" placeholder="User">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input name="password" required type="password" id="password" class="form-control" placeholder="Password">
            </div>
            <div class="form-group">
                <button class="btn btn-success" type="submit">Guardar</button>
            </div>
        </form>
        <form action="">

    </div>
</div>
<?php include "pie.php" ?>