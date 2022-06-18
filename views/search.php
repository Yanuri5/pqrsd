<?php
$mysqli = new mysqli('localhost', 'root', '', 'pqrsd');
?>
<article id="search">
    <div class="search">
        <h3 class="busca">Buscador...</h3>
        <form action="" autocomplete="off" method="post">
            <div class="form-row">
                <div class="col">
                    <p id="label">Pqrsd:</p>
                    <select name="user_ent" class="form-control" required>
                        <option hidden value="">Pertenece a:</option>
                        <option value="1">Usuarios</option>
                        <option value="2">Entidades Externas</option>
                    </select>
                </div>
                <div class="col">
                    <p id="label">Cedula/Nit:</p>
                    <input type="text" name="ced_nit" class="form-control">
                </div>
            </div><br>
            
            <div class="form-row">
                <div class="col">
                    <p id="label">Número de radicado:</p>
                    <input type="number" name="n_radicado" class="form-control">
                </div>
                <div class="col">
                    <p id="label">Fecha:</p>
                    <input type="date" name="fecha" class="form-control">
                </div>
                <div class="col">
                    <p id="label">Secretaría que recibe:</p>
                    <select name="sec_rec" class="form-control">
                        <option hidden value="">Secretarias...</option>
                        <?php
                        $query1 = $mysqli->query("SELECT * FROM secretarias;");
                        while ($valores = mysqli_fetch_assoc($query1)) {
                            echo '<option value="' . $valores['id'] . '">' . $valores['nombre_sec'] . '</option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="col">
                    <p id="label">Tipo de trámite:</p>
                    <select name="tipo" class="form-control">
                        <option hidden value="">Tipos...</option>
                        <?php
                        $query = $mysqli->query("SELECT * FROM tipo_tramites;");
                        while ($valores = mysqli_fetch_assoc($query)) {
                            echo '<option value="' . $valores['id'] . '">' . $valores['tipo'] . '</option>';
                        }
                        ?>
                    </select>
                </div>
            </div>

            <button type="submit" class="btn btn_buscar">Buscar consulta</button>

        </form>
        <?php
            if(!empty($_POST)){
                include('../models/search.php'); 
            }
            if(!empty($_GET)){
                include('../models/delete_pqr.php');
            }
        ?>
       
    </div>
</article>