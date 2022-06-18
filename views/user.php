<?php
    $ver_usuarios = "SELECT cedula, nombre, apellido, celular, vereda, zona 
    FROM usuarios u JOIN veredas v ON u.id_vereda=v.id 
    JOIN zonas z ON u.id_zona = z.id ORDER BY apellido;";
    $resultado = mysqli_query($conexion , $ver_usuarios);
?>
<article id="user">
    <center>
        <div class="col usuarios">
            <h2>USUARIOS</h2><br>
            <?php
            if(!empty($_GET)){//Verificación de intento de eliminación.
                include_once("../models/delete_user.php");
                
             }
            ?>
            <div class="row col">
                <table class="table col-11">
                    <thead>
                        <tr>
                            <th scope="col">Cédula</th>
                            <th scope="col">Apellidos</th>
                            <th scope="col">Nombres</th>
                            <th scope="col">Celular</th>
                            <th scope="col">Vereda</th>
                            <th scope="col">Zona</th>
                            <th scope="col">Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php while($row= mysqli_fetch_assoc($resultado)){ ?>
                        <tr>
                            <td><?php echo $row['cedula']; ?></td>
                            <td><?php echo $row['apellido']; ?></td>
                            <td><?php echo $row['nombre']; ?></td>
                            <td><?php echo $row['celular']; ?></td>
                            <td><?php echo $row['vereda']; ?></td>
                            <td><?php echo $row['zona']; ?></td>
                            <td> <a href="edit_user.php?ced_user=<?php  echo $row['cedula']; ?>">🖊</a> 
                            <a href="?ced_user=<?php  echo $row['cedula']; ?>&delete=No"> 🗑 </a></td>
                        </tr>
                        <?php } ?> 
                    </tbody>
                </table>
                <div class="col-1">
                    <a href="newuser.php" class="btn btn-success">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                            <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                            <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </center>
</article>

