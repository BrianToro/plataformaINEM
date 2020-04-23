
        <!-- Contenedor del inicio de sesion -->
        <div class="container-ingreso">
            <form action="sign_in.php" method="POST">
                <p><img src="./static/img/profesor(1).png" alt=""> ¡Hola profe!</p>
                <hr>
                <label for="">Por favor inicie sesión</label>
                <input class="texto" name="codigo" type="text" placeholder="Código" autofocus required>
                <input class="texto" name="documento" type="text" placeholder="Documento" required>
                <input class="texto" name="clave" type="password" placeholder="Clave" required>
                <input type="hidden" name="inProfesores" value="Profesores">
                <a href=""><button type="submit" class="boton">Entrar</button></a>
            </form>
        </div>

