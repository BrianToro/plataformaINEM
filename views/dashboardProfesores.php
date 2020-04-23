
        <!-- Contenedor del dashboard -->
        <div class="container-form-profes">
            <div class="container-form-profes--cabecera">
                <h1>Organiza tus clases</h1>
                <hr>
            </div>
            <div class="container-form-profes--cuerpo">
                <div class="container--cuerpo-barrabusqueda">
                    <label style="margin-left: 30px;">Seccion:</label>
                    <select name="seccion">
                        <option value="">Seccion 8</option>
                        <option value="">Seccion 2</option>
                        <option value="">Seccion 3</option>
                    </select>
                    <label style="margin-left: 30px;">Materia:</label>
                    <select name="materia">
                        <option value="">Algoritmos</option>
                        <option value="">Tecnologia</option>
                        <option value="">Lenguaje de programacion</option>
                    </select>
                    <!-- <label style="margin-left: 30px;">Fecha:</label>
                    <select name="materia">
                        <option value="">Más antiguas</option>
                        <option value="">Más recientes</option>
                    </select> -->
                    <button class="boton">Buscar</button>

                </div>
                <div class="container--cuerpo-barracontrol">
                    <div class="barracontrol-agregar">
                        <a title="Agregar clase" href="./agregar.php"><img src="./static/img/mas.png"
                                alt="Agregar"></a>
                    </div>
                </div>
                <div class="container--cuerpo-tablaclases">
                    <table>
                        <thead>
                            <tr>
                                <th>Materia</th>
                                <th>Secciones</th>
                                <th>Plataforma</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                
                                
                                <td class="materia">Algoritmos</td>
                                <td>7 - 8</td>
                                <td><a href="https://classroom.google.com/u/2/c/NjU5NTg0ODEzOFpa">Clic para acceder a la asignatura</a></td>
                                <td class="opciones"><a title="Editar clase" href=""><img src="./static/img/lapiz.png"
                                            alt=""></a><a title="Eliminar clase" style="margin-left: 20px;" href=""><img
                                            src="./static/img/cruzar.png" alt=""></a></td>
                            </tr>
                            <tr>
                                
                                
                                <td class="materia">Lenguaje de Programacion</td>
                                <td>7 - 8</td>
                                <td><a href="https://classroom.google.com/u/2/c/NjU5NTg0ODEzOFpa">Clic para acceder a la asignatura</a></td>
                                <td class="opciones"><a title="Editar clase" href=""><img src="./static/img/lapiz.png"
                                            alt=""></a><a title="Eliminar clase" style="margin-left: 20px;" href=""><img
                                            src="./static/img/cruzar.png" alt=""></a></td>
                            </tr>
                            <tr>
                                
                                
                                <td class="materia">Fundamentos de investigacion</td>
                                <td>7 - 8</td>
                                <td><a href="https://classroom.google.com/u/2/c/NjU5NTg0ODEzOFpa">Clic para acceder a la asignatura</a></td>
                                <td class="opciones"><a title="Editar clase" href=""><img src="./static/img/lapiz.png"
                                            alt=""></a><a title="Eliminar clase" style="margin-left: 20px;" href=""><img
                                            src="./static/img/cruzar.png" alt=""></a></td>
                            </tr>
                            <tr>
                                
                                
                                <td class="materia">Tecnologia</td>
                                <td>7 - 8</td>
                                <td><a href="https://classroom.google.com/u/2/c/NjU5NTg0ODEzOFpa">Clic para acceder a la asignatura</a></td>
                                <td class="opciones"><a title="Editar clase" href=""><img src="./static/img/lapiz.png"
                                            alt=""></a><a title="Eliminar clase" style="margin-left: 20px;" href=""><img
                                            src="./static/img/cruzar.png" alt=""></a></td>
                            </tr>
                            <tr>
                                
                                
                                <td class="materia">Etica</td>
                                <td>7 - 8</td>
                                <td><a href="https://classroom.google.com/u/2/c/NjU5NTg0ODEzOFpa">Clic para acceder a la asignatura</a></td>
                                <td class="opciones"><a title="Editar clase" href=""><img src="./static/img/lapiz.png"
                                            alt=""></a><a title="Eliminar clase" style="margin-left: 20px;" href=""><img
                                            src="./static/img/cruzar.png" alt=""></a></td>
                            </tr>
                            <tr>
                                
                                
                                <td class="materia">Emprendimiento</td>
                                <td>7 - 8</td>
                                <td><a href="https://classroom.google.com/u/2/c/NjU5NTg0ODEzOFpa">Clic para acceder a la asignatura</a></td>
                                <td class="opciones"><a title="Editar clase" href=""><img src="./static/img/lapiz.png"
                                            alt=""></a><a title="Eliminar clase" style="margin-left: 20px;" href=""><img
                                            src="./static/img/cruzar.png" alt=""></a></td>
                            </tr>
                        </tbody>
                    </table>
                    <button class="boton boton-pagina">1</button>
                    <button class="boton boton-pagina">2</button>
                    <button class="boton boton-pagina">3</button>
                </div>
                <a href="logout.php">Cerrar Sesion</a>
            </div>
        </div>