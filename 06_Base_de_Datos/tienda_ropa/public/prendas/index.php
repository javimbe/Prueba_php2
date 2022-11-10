<html>
<head>
    <title>Contenido</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<?php require '../../util/database.php' ?>

<div class="container">
<?php require "../../header.php" ?>
    <h1>Listado de Prendas</h1>

    <div class="row">
        <div class="col-9">
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>Nombre</th>
                        <th>Talla</th>
                        <th>Precio</th>
                        <th>Categoria</th>
                        <th></th>
                        <th></th>
                        <th>Imagen</th>
                    </tr>
                </thead>
                <tbody >
                <?php

                    if($_SERVER["REQUEST_METHOD"] == "POST"){

                        $id = $_POST["id"];
                        $sql = "DELETE FROM prendas WHERE id=" . $id;
                        $conexion -> query($sql);
                    }

                    $sql = "SELECT * FROM prendas";
                    $resultado = $conexion -> query($sql);

                    if($resultado -> num_rows > 0){

                        while($fila = $resultado -> fetch_assoc()){
                            
                            $nombre = $fila["nombre"];
                            $talla = $fila["talla"];
                            $precio = $fila["precio"];
                            $categoria = $fila["Categoria"];
                            $imagen = $fila['imagen'];

                ?>
                        <tr>
                            <td><?php echo $nombre ?></td>
                            <td><?php echo $talla ?></td>
                            <td><?php echo $precio . "€"?></td>
                            <td><a href="categoria.php?Categoria=<?php echo $categoria ?>"><?php echo $categoria ?></a></td>
                            <td>
                                <form action="mostrar_prenda.php" method="get">
                                    <button class="btn btn-primary" type="submit">Ver</button>
                                    <input type="hidden" name="id" value="<?php echo $fila['id'] ?>">
                                </form>
                            </td>
                            <td>
                                <form action="" method="post">
                                    <button class="btn btn-danger" type="submit">Eliminar</button>
                                    <input type="hidden" name="id" value="<?php echo $fila['id'] ?>">
                                </form>
                            </td>
                            <td>
                                <img width="40" height="40" src="../..<?php echo $imagen ?>">
                            </td>
                        </tr>
                        <?php
                        }

                    }
                    
                ?>
                </tbody>
            </table>
            <br>
            <a class="btn btn-secondary" href="insertarPrenda.php">Insertar Prendas</a>
        </div>
        <div class="col-3">
            <img width="100%" height="100%" src="../../resources/images/ropa.jpg">
        </div>
    </div>
</div>


</body>
</html>