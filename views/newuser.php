<?php
     $mysqli = new mysqli('localhost', 'root', '', 'pqrsd');
?>
<article id="user">

    <div class="col-12 usuarios">
        <h3>
            <center>Agregar nuevo usuarios.</center>
        </h3><br>
        <form action="" method="post" id="newentidad" autocomplete="off">
            <?php
            if (!empty($_POST)) {
                include_once("../models/newuser.php");
            }
            ?>
            <div class="form-row">
                <div class="col">
                    <input type="text" name="cedula" class="form-control" placeholder="Cédula:">
                </div>
                <div class="col">
                    <input type="text" name="nombre" class="form-control" placeholder="Nombre:">
                </div>
            </div>
            <br>
            <div class="form-row">
                <div class="col">
                    <input type="text" name="apellido" class="form-control" placeholder="Apellido:">
                </div>
                <div class="col">
                    <input type="text" name="celular" class="form-control" placeholder="Celular:">
                </div>
            </div>
            <br>
            <div class="form-row">
                <div class="col">
                    <select class="form-control" id="municipios">
                        <option selected hidden>Municipio</option>
                        <?php
                        $query = $mysqli->query("SELECT * FROM municipios ORDER BY municipio;");
                        while ($valores = mysqli_fetch_assoc($query)) {
                            echo '<option value="' . $valores['id'] . '">' . $valores['municipio'] . '</option>';
                        }
                        ?>
                    </select>
                </div>
               
                <div class="col">
                    <select class="form-control" name="id_zona">
                        <option selected hidden>Zona</option>
                        <?php
                        $query = $mysqli->query("SELECT * FROM zonas ORDER BY zona;");
                        while ($valores = mysqli_fetch_assoc($query)) {
                            echo '<option value="' . $valores['id'] . '">' . $valores['zona'] . '</option>';
                        }
                        ?>
                    </select>
                </div>
            </div>
            <br>

            <div class="form-row">
                <div class="col-6">
                    <select class="form-control" name="id_vereda" id="veredas">
                        <option selected hidden>Barrio o Vereda</option>
                    </select>
                </div>
            </div><br>
            <center>
            <div class="form-row">
                    <div class="col">
                        <button type="submit" class="btn btn-primary col-10">Guardar</button>
                    </div>
                    <div class="col">
                        <a href="user.php" class="btn btn-danger col-10">Cancelar</a>
                    </div>

                </div>
            </center>

        </form>
    </div>
</article>