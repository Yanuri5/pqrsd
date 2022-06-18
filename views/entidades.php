<?php
    $ver_entidades = "SELECT * FROM entidades_ext ORDER BY nombre_ent;";
    $resultado = mysqli_query($conexion , $ver_entidades);
?>
<article id="user">
    <center>
        <div class="col usuarios">
            <h2>ENTIDADES</h2><br>
            <?php
            if(!empty($_GET)){//Verificación de intento de eliminación.
                include_once("../models/delete_ent.php");
                
             }
            ?>
            <div class="row col">
                <table class="table col-11">
                    <thead>
                        <tr>
                            <th scope="col">Nit</th>
                            <th scope="col">Nombres</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php while($row= mysqli_fetch_assoc($resultado)){ ?>
                        <tr>
                            <td><?php echo $row['nit']; ?></td>
                            <td><?php echo $row['nombre_ent']; ?></td>
                            <td><?php echo $row['correo_ent']; ?></td>
                            <td> <a href="edit_ent.php?nit=<?php  echo $row['nit'];?>">🖊</a> 
                            <a href="?nit=<?php  echo $row['nit']; ?>&delete=No""> 🗑 </a></td>
                        </tr>
                        <?php } ?> 
                    </tbody>
                </table>
                <div class="col-1">
                    <a href="newentidad.php" class="btn btn-info">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-folder-plus" viewBox="0 0 16 16">
                            <path d="m.5 3 .04.87a1.99 1.99 0 0 0-.342 1.311l.637 7A2 2 0 0 0 2.826 14H9v-1H2.826a1 1 0 0 1-.995-.91l-.637-7A1 1 0 0 1 2.19 4h11.62a1 1 0 0 1 .996 1.09L14.54 8h1.005l.256-2.819A2 2 0 0 0 13.81 3H9.828a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 6.172 1H2.5a2 2 0 0 0-2 2zm5.672-1a1 1 0 0 1 .707.293L7.586 3H2.19c-.24 0-.47.042-.683.12L1.5 2.98a1 1 0 0 1 1-.98h3.672z"></path>
                            <path d="M13.5 10a.5.5 0 0 1 .5.5V12h1.5a.5.5 0 1 1 0 1H14v1.5a.5.5 0 1 1-1 0V13h-1.5a.5.5 0 0 1 0-1H13v-1.5a.5.5 0 0 1 .5-.5z"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </center>
</article>
