<html>
<head>
    <title>Insertar</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

<?php
require '../../util/database.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $usuario = $_POST['usuario'];
    $nombre = $_POST['nombre'];
    $apellido1 = $_POST['apellido1'];
    $apellido2 = $_POST['apellido2'];
    $fechaNac = $_POST['fecha_nacimiento'];
    
    $file_name = $_FILES['avatar']['name'];
    $file_temp_name = $_FILES['avatar']['tmp_name'];
    $path = "../../resources/images/clientes/" . $file_name;
    
    if(empty($file_name)){

        $imagen = "/resources/images/ropa.jpg";

    }
    else{

        $imagen = "/resources/images/clientes/" . $file_name;
        

    }

    if(!empty($usuario) && !empty($nombre) && !empty($apellido1) && !empty($fechaNac)){

        $apellido2 = !empty($apellido2) ? "'$apellido2'" : "NULL";
        
        $sql = "INSERT INTO clientes (usuario, nombre, apellido1, apellido2, fecha_nacimiento, avatar)
                VALUES ('$usuario', '$nombre', '$apellido1', $apellido2 , '$fechaNac', '$imagen')";

        if($conexion -> query($sql) == "TRUE"){
            ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                 Cliente Introducido Correctamente.
                 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>           
            <?php
            if(!empty($file_temp_name)){

            
                if(move_uploaded_file($file_temp_name, $path)){
                    ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Fichero movido con exito.</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div> 
                    <?php
                }
                else{
        
                    ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>ERROR:</strong> 
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php
        
                }
            }
        }
        else{
            ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>ERROR:</strong> Ya existe ese usuario, introduce otro nombre de usuario.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php
        }
    }
    else{
        ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
           <strong>ERROR:</strong> No puede haber elementos vacíos.
           <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php
    }

}
?>
<div class="container">
    <h1>Nuevo Cliente</h1>

    <div class="row">
        <div class="col-6">
            <form action="" method="post" enctype="multipart/form-data">  
                <div class="form-group mb-3">
                    <label class="form-label">Nombre Usuario</label>
                    <input class="form-control" type="text" name="usuario">
                </div>
                <div class="form-group mb-3">
                    <label class="form-label">Nombre</label>
                    <input class="form-control" type="text" name="nombre">
                </div>
                <div class="form-group mb-3">
                    <label class="form-label">Apellido 1</label>
                    <input class="form-control" type="text" name="apellido1">
                </div>
                <div class="form-group mb-3">
                    <label class="form-label">Apellido 2</label>
                    <input class="form-control" type="text" name="apellido2">
                </div>
                <div class="form-group mb-3">
                    <label class="form-label">Fecha Nacimiento</label>
                    <input class="form-control" type="date" name="fecha_nacimiento">
                </div>
                <div class="form-group mb-3">
                    <label class="form-label">Avatar</label>
                    <input class="form-control" type="file" name="avatar">
                </div>
                <div class="form-group mb-3">
                    <button class="btn btn-primary" type="submit">Crear</button>
                    <a class="btn btn-secondary" href="index.php">Listado Clientes</a>
                </div>
            
        </div>
    </div>

</div>
</body>
</html>