<?php

    if($_SERVER['REQUEST_METHOD']=="POST"){

        function depurar($dato){
            $dato = trim($dato);
            $dato = stripslashes($dato);
            $dato = htmlspecialchars($dato);
            return $dato;
        }

        //htmlspecialchars() es una funcion que evita etiquetas html.
        //var_dump() imprime el tipo de variable y su valor. ejemplo "aaa" string(3)
        //trim() elimina espacios en blanco.
        //stripslashes() una funcion que elimina barras.

        $temp_titulo = depurar($_POST['titulo']);
        $temp_precio = depurar($_POST['precio']);

        if(empty($temp_titulo)){
            $error_titulo = "Error en el titulo.";
        }
        else {
            if(strlen($temp_titulo)>40){
            $error_titulo = "Error en el titulo.";
            }
            else{
                echo "exito";
            }
        }
        if(empty($temp_precio)){
            $error_precio = "Error en el precio";
        }
        else{
            $temp_precio = filter_var($temp_precio, FILTER_VALIDATE_FLOAT);

            if(!$temp_precio){
                $error_precio = "Error en el precio";
            }
            else{
                if($temp_precio < 0){
                    $error_precio = "Error en el precio";
                }
                else{
                    echo "exito";
                }
            }
        }

    }

?>

<form action="index.php" method="post">

    <h2>Nuevo Videojuego</h2>
    
    <p> Titulo: <input type="text" name="titulo"></p>

      <span>  <?php if(isset($error_titulo)) echo $error_titulo ?>
        </span>
    
    <p> Precio: <input type="text" name="precio"></p>

    <span>
    <?php if(isset($error_precio)) echo $error_precio ?>
    </span>

    <p> <input type="submit" value="Enviar"> </p>

</form>