
        <!-- Contenedor del dashboard -->
        <div class="container-form-profes">
            <div class="container-form-profes--cabecera">
                <h1>Revisa tus clases</h1>
                <hr>
            </div>
            <div class="container-form-profes--cuerpo">
                <div class="container--cuerpo-barrabusqueda">
                    <label style="margin-left: 30px;">Departamento: </label>
                    <select name="materia">
                        <option value="">Ciencias</option>
                        <option value="">Informatica</option>
                        <option value="">Artes</option>
                    </select>
                    <!-- <label style="margin-left: 30px;">Fecha:</label> -->
                    <!-- <select name="materia">
                        <option value="">Más antiguas</option>
                        <option value="">Más recientes</option>
                    </select> -->
                    <button class="boton">Buscar</button>

                </div>
                <div class="container--cuerpo-tablaclases">
                    <table>
                        <thead>
                            <tr>
                                <th>Docente</th>
                                <th>Departamento</th>
                                <th>Plataforma</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Alexander Narvaez</td>
                                <td class="materia">Informatica</td>
                                <td><a href="./visualizacion.php">Ingresar a sus materias</a></td>
                            </tr>
                            <tr>
                                <td>Docente Nombre</td>
                                <td class="materia">Tema</td>
                                <td><a href="./visualizacion.php">Ingresar a sus materias</a></td>
                            </tr>
                            <tr>

                                <td>Docente Nombre</td>
                                <td class="materia">Tema</td>
                                <td><a href="./visualizacion.php">Ingresar a sus materias</a></td>
                            </tr>
                            <tr>

                                <td>Docente Nombre</td>
                                <td class="materia">Tema</td>
                                <td><a href="./visualizacion.php">Ingresar a sus materias</a></td>
                            </tr>
                        </tbody>
                    </table>
                    <button class="boton boton-pagina">1</button>
                    <button class="boton boton-pagina">2</button>
                    <button class="boton boton-pagina">3</button>
                    <br>
                    <a href="logout.php">Cerrar Sesion</a>
                </div>
            </div>
        </div>
