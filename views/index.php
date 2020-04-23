
        <!-- Contenedor de la información -->
        <div class="content-information">
            <div class="information">
                <h1>¡Hola comunidad educativa!</h1>
                <hr class="barra">
                <div class="information-volumen">
                    <p>
                        La institución INEM José Félix De Restrepo ha habilitado esta plataforma
                        para acercarse a la virtualidad de los múltiples procesos que se llevan a cabo en
                        colegio, como por ejemplo establecer un intermediario entre las plataformas
                        virtuales usadas por los profesores y la comunidad educativa, facilitando
                        la comunicación y el rápido acceso a la información necesaria.
                        <br>
                        <br>
                        <strong>Aquí abajo puedes acceder según tu rol ↓ ↓ ↓</strong>
                    </p>
                    <img src="./static/img/clases.jpg" alt="">
                </div>
            </div>
        </div>

        <!-- Cartas de inicio de sesion -->
        <div class="container-content">
            <div class="container-content-card">
                <img src="./static/img/profesor(1).png" alt="">
                <form action="login.php" method="POST">
                    <input type="submit" class="boton" value="Profesores" name="inProfesores">
                </form>
            </div>
            <div class="container-content-card">
                <img src="./static/img/estudiante.png" alt="">
                <form action="login.php" method="POST">
                    <input type="submit" class="boton" value="Estudiantes" name="inEstudiantes">
                </form>
            </div>
            <div class="container-content-card">
                <img src="./static/img/llamada.png" alt="">
                <form action="login.php"  method="POST">
                    <input type="submit" class="boton" value="Administrativos" name="inAdministrativos">
                </form>
            </div>
        </div>