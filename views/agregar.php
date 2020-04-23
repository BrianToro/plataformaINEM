<?php include('includes/header.php') ?>

        <div class="container-agregarform">
            <h1>Agrevar una nueva clase</h1>
            <hr>
            <form action="./dashboardProfesores.php" method="POST">
                <!-- <label for="">Fecha y hora</label>
                <input type="time">
                <input type="date"> -->

                <label for="">Materia</label>
                <select name="" id="">
                    <option value="">Matematicas</option>
                    <option value="">Ingles</option>
                    <option value="">Español</option>
                </select>
                <label for="">Secciones</label>
                <select name="" id="">
                    <option value="">8</option>
                    <option value="">7</option>
                    <option value="">1</option>
                </select>
                <label for="">Plataforma</label>
                <input type="text">

                <!-- <label for="">Agenda de clase</label>
                <textarea name="" id="" cols="30" rows="10"></textarea> -->
                <div class="acciones">
                    <a href="./dashboardProfesores.php"><button class="boton">Enviar</button></a> 
                    <a href="./dashboardProfesores.php"><button class="boton boton-danger">Cancelar</button></a>
                </div>
            
            </form>
        </div>

<?php include('includes/footer.php') ?>
