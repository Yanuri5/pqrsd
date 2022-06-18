<article id="contrasena">
    <center>
        <div class="datos col-8">
            <form action="" method="post">
                <?php
                if (!empty($_POST)) {
                    include_once("../models/contrasena.php");
                }
                ?>
                <div class="col">
                    <input type="password" name="contra" class="form-control" placeholder="Contraseña actual"><br>
                </div>
                <hr><br>
                <div class="col">
                    <input type="password" name="contra1" class="form-control" placeholder="Contraseña nueva"><br>
                </div>
                <div class="col">
                    <input type="password" name="contra2" class="form-control" placeholder="Confirmar contraseña nueva"><br>
                </div>
                <div class="form-row">
                    <div class="col">
                        <button type="submit" class="btn btn-primary col-10">Actualizar contraseña</button>
                    </div>
                    <div class="col">
                        <a href="home.php" class="btn btn-danger col-10">Cancelar</a>
                    </div>

                </div>

            </form>
        </div>
    </center>
</article>