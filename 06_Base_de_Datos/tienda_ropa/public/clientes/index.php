<html>
<head>
    <title>Clientes</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<?php require '../../util/database.php' ?>

<div class="container">
<?php require "../../header.php" ?>
    <h1>Listado de Clientes</h1>

    <div class="row">
        <div class="col-9">
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>Usuario</th>
                        <th>Nombre</th>
                        <th>Apellido 1</th>
                        <th>Apellido 2</th>
                        <th>Fecha Nacimiento</th>
                    </tr>
                </thead>
                <tbody >
                <?php
                    $sql = "SELECT * FROM clientes";
                    $resultado = $conexion -> query($sql);

                    if($resultado -> num_rows > 0){

                        while($fila = $resultado -> fetch_assoc()){
                            $usuario = $fila["usuario"];
                            $nombre = $fila["nombre"];
                            $apellido1 = $fila["apellido1"];
                            $apellido2 = $fila["apellido2"];
                            $fechaNac = $fila["fecha_nacimiento"];
                ?>
                        <tr>
                            <td><?php echo $usuario ?></td>
                            <td><?php echo $nombre ?></td>
                            <td><?php echo $apellido1 ?></td>
                            <td><?php echo $apellido2 ?></td>
                            <td><?php echo $fechaNac ?></td>
                        </tr>
                        <?php
                        }

                    }
                    
                ?>
                </tbody>
            </table>
            <br>
            <a class="btn btn-secondary" href="insertarClientes.php">Insertar Clientes</a>
        </div>
    </div>
</div>


</body>
</html>