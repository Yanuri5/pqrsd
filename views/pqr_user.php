<?php
$mysqli = new mysqli('localhost', 'root', '', 'pqrsd');
?>
<article id="pqr">
    <center>
        <div class="col pqrs">
            <h2>
                PQRSD USUARIO
            </h2>
            <form action="" method="post" autocomplete="off">
                <?php
                if (!empty($_POST)) {
                    include_once("../models/pqr_user.php");
                }
                ?>
                <br>
                <div class="form-row n_pqr">
                    <div class="col">
                        <input type="number" id="ced" placeholder="Número de radicado:" name="n_radicado" class="form-control">
                    </div>
                    <div class="col">
                        <select class="form-control" name="id_tipo">
                            <option selected hidden>Tipo de tramite</option>
                            <?php
                            $query = $mysqli->query("SELECT * FROM tipo_tramites;");
                            while ($valores = mysqli_fetch_assoc($query)) {
                                echo '<option value="' . $valores['id'] . '">' . $valores['tipo'] . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <h3> Datos del que envía:</h3>
                <hr>
                <div class="form-row col n_pqr">
                    <div class="col">
                        <input type="text" placeholder="Cédula" name="cedula_env" id="caja_busqueda" class="form-control">
                    </div>
                    <div class="col">
                        <p id="existe_user" class="form-control"></p>
                    </div>

                </div>
                <h3>Redactar tramite:</h3>
                <hr>
                <div class="row col n_pqr">
                    <select class="form-control col-6" name="sec_rec">
                        <option selected hidden>Secretarías</option>
                        <?php
                        $query1 = $mysqli->query("SELECT * FROM secretarias;");
                        while ($valores = mysqli_fetch_assoc($query1)) {
                            echo '<option value="' . $valores['id'] . '">' . $valores['nombre_sec'] . '</option>';
                        }
                        ?>
                    </select>

                </div>
                <div class="row col n_pqr">
                    <input type="text" placeholder="Titulo o asunto:" name="titulo" class="form-control col">
                </div>
                <div class="row col n_pqr">
                    <textarea id="" class="form-control" rows="5" name="descripcion" placeholder="Descripción de petición:"></textarea>
                </div>
                <br>
                <div class="form-row">
                    <div class="col">
                        <button type="submit" class="btn btn-primary col-11">Guardar</button>
                    </div>
                    <div class="col">
                        <a href="pqr.php" class="btn btn-danger col-11">Cancelar</a>
                    </div>

                </div>
    </center>

</article>