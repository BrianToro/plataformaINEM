
        <div class="container-ingreso">
            <form action="sign_in.php" method="POST">
                <p><img src="./static/img/llamada.png" alt=""> ¡Hola!</p>
                <hr>
                <label for="">Por favor inicie sesión</label>
                <input name="codigo" type="text" placeholder="Código" autofocus required>
                <input name="documento" type="text" placeholder="Documento"  required>
                <input name="clave" type="password" placeholder="Clave" required>
                <input type="hidden" name="inAministrativo">
                <a href=""><button type="submit" class="boton">Entrar</button></a> 
            </form>
        </div>