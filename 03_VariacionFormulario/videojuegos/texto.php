<?php
if($_SERVER['REQUEST_METHOD']=='POST'){

    function depurar($dato){
        $dato = trim($dato);
        $dato = stripslashes($dato);
        $dato = htmlspecialchars($dato);
        return $dato;
    }

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $dni = $_POST['dni'];
    $email = $_POST['email'];
    $fecha_nac = $_POST['fecha_nac'];

    $nombre_depurado = depurar($nombre);
    $apellido_depurado = depurar($apellido);
    $email_depurado = depurar($email);

    $temp_email = filter_var($email_depurado, FILTER_VALIDATE_EMAIL);

    $pattern_dni = "/^[0-9]{8}[a-zA-Z]{1}$/";
    $pattern_fechaNac = "/^[0-3][0-9]\/[0-1][0-9]\/(19|20)[0-9]{2}$/";



    if(empty($nombre_depurado)){
        $errorNombre = "El nombre no puede estar vacío.";
    }
    else{
        $pattern = "/^[a-zA-z áéíóúÁÉÍÓÚñÑ]+$/";

        if(strlen($nombre_depurado)>30){
            $erroNombre = "El nombre es demasiado extenso.";
        }
        else{

            if(preg_match($pattern,$nombre_depurado)){
                echo "$nombre_depurado";

            }
            else{
                $errorNombre = "El nombre tiene caracteres que no son validos.";
            }

        }
    }

    if(empty($apellido_depurado)){
        $errorApellido = "El apellido no puede estar vacío.";
    }
    else{
        $pattern = "/^[a-zA-z áéíóúÁÉÍÓÚñÑ]+$/";

        if(strlen($apellido_depurado)>30){
            $erroApellido = "El apellido es demasiado extenso.";
        }
        else{

            if(preg_match($pattern,$apellido_depurado)){
                echo "$apellido_depurado";

            }
            else{
                $errorApellido = "El apellido tiene caracteres que no son validos.";
            }

        }
    }

        if(preg_match($pattern_dni,$dni)){
            echo "DNI correcto";
        }
        else{
            $errorDNI = "El campo del dni es incorrecto.";
        }

    if(empty($email)){
        $errorEmail = "El email no puede estar vacío.";
    }
    else{
        if($temp_email){
            echo "El email es correcto";
        }
        else{
            $errorEmail = "El email no es valido.";
        }

    }

    if(preg_match($pattern_fechaNac, $fecha_nac)){
        echo "$fecha_nac";
    }
    else{
        $errorFechaNac = "La fecha introducida es incorrecta, el formato es dia/mes/año";
    }

    if(preg_match($pattern, $nombre)){
        echo "$nombre sigue el patron";
    }
    else{
        echo "$nombre no sigue el patron";
    }

}

?>

<form action="texto.php" method="post">
    <p>Nombre: <input type="text" name="nombre"></p>
    <span> * <?php if(isset($errorNombre)) echo $errorNombre ?> </span>

    <p>Apellido: <input type="text" name="apellido"></p>
    <span> * <?php if(isset($errorApellido)) echo $errorApellido ?> </span>

    <p>DNI: <input type="text" name="dni"></p>
    <span> * <?php if(isset($errorDNI)) echo $errorDNI ?> </span>

    <p>Email: <input type="text" name="email"></p>
    <span> * <?php if(isset($errorEmail)) echo $errorEmail ?> </span>

    <p>Fecha de nacimiento: <input type="text" name="fecha_nac"></p>
    <span> * <?php if(isset($errorFechaNac)) echo $errorFechaNac ?> </span>

    <input type="submit" value="Enviar">
</form>
