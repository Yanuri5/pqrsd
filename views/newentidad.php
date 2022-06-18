<article id="user">
    <center>
        <div class="col-5 usuarios">
            <h3>Agregar nueva entidad.</h3><br>
            <form action="" method="post" id="newentidad" autocomplete="off">
                <?php
                if (!empty($_POST)) {
                    include_once("../models/newentidad.php");
                }
                ?>
                <br>
                <input type="number" name="nit" placeholder="NIT:" class="form-control"><br>

                <input type="text" name="nombre_ent" placeholder="Nombre de la entidad:" class="form-control"><br>

                <input type="email" name="correo_ent" placeholder="Correo de la entidad:" class="form-control"><br><br>

                <div class="form-row">
                    <div class="col">
                        <button type="submit" class="btn btn-primary col-8">Guardar</button>
                    </div>
                    <div class="col">
                        <a href="entidades.php" class="btn btn-danger col-8">Cancelar</a>
                    </div>

                </div>
            </form>
        </div>
    </center>
</article>