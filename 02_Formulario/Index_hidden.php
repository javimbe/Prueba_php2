<h1>Ejercicio 1</h1>

<form action="#result" method="post">

    <label>Nombre </label>
    <input type="text" name="nombre">
    <label>Edad </label>
    <input type="text" name="edad">
    <input type="hidden" name="f" value="f_Ejer1">
    <input type="submit" value="Enviar">

</form>

<h1>Ejercicio 2</h1>

<form action="#result" method="post">

    <label>Introduce un numero </label>
    <input type="number" name="num">
    <input type="hidden" name="f" value="f_Ejer2">
    <input type="submit" value="Enviar">

</form>

<h1>Ejercicio 3</h1>

<form action="#result" method="post">

    <label>Introduce tu nombre: </label>
    <input type="text" name="nombre"></br>
    <label>Introduce tu edad: </label>
    <input type="text" name="edad" pattern="[0-9]+" value="Introduce un numero">
    <input type="hidden" name="f" value="f_Ejer3">
    <input type="submit" value="enviar">

</form>

<h1>Ejercicio 4</h1>

<form action="#result" method="post">

    <label>Introduce un numero entre 1 y 6: </label>
    <input type="text" name="num" pattern="[1-6]"><br>
    <label>Introduce una frase: </label>
    <input type="text" name="frase">
    <input type="hidden" name="f" value="f_Ejer4">
    <input type="submit" value="enviar">

</form>

<h1>Ejercicio 5</h1>

<form action="#result" method="post">

    <label>Introduce un numero: </label>
    <input type="text" name="num1" pattern="[0-9]+"><br>
    <label>Introduce un numero: </label>
    <input type="text" name="num2" pattern="[0-9]+">
    <input type="hidden" name="f" value="f_Ejer5">
    <input type="submit" value="enviar">

</form>

<h1>Ejercicio 6</h1>

<form action="#result" method="post">

    <label>Introduce un numero: </label>
    <input type="text" name="num3" pattern="[0-9]+">
    <input type="hidden" name="f" value="f_Ejer6">
    <input type="submit" value="enviar">

</form>

<h1>Ejercicio 7</h1>

<form action="#result" method="post">

    <label>Introduce un numero: </label>
    <input type="text" name="num4" pattern="[0-9]+">
    <input type="hidden" name="f" value="f_Ejer7">
    <input type="submit" value="enviar">

</form>

<h1 id="result">Resultado</h1>

<?php

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        switch($_POST['f']){

            case "f_Ejer1":

                $nombre = $_POST['nombre'];
                $edad = $_POST['edad'];
                echo $nombre;
                echo "<br>";
                echo $edad;
                break;

            case "f_Ejer2":

                for($i=0;$i<=$_POST['num'];$i++){
                    echo "<li color:red> $i </li>";
                }
                break;
            
            case "f_Ejer3":

                $nombre = $_POST['nombre'];
                $edad = (int)$_POST['edad'];
                $nombre = strtoupper(substr($nombre,0,1)) . strtolower(substr($nombre, 1, strlen($nombre)));

                if ($edad < 18 && $edad > 0){
                    echo "$nombre es menor de edad.";
                }
                else if($edad > 65){
                    echo "$nombre es jubilado.";
                }
                else{
                    echo "$nombre es adulto.";
                }
                break;

            case "f_Ejer4":

                $num = $_POST['num'];
                $frase = $_POST['frase'];
            
                switch($num){
                    case 1:
                        echo "<h1> $frase </h1>";
                        break;
                    case 2:
                        echo "<h2> $frase </h2>";
                        break;
                    case 3:
                         echo "<h3> $frase </h3>";
                         break;
                    case 4:
                        echo "<h4> $frase </h4>";
                        break;
                    case 5:
                        echo "<h5> $frase </h5>";
                        break;
                    case 6:
                        echo "<h6> $frase </h6>";
                        break;
                }
                break;

            case "f_Ejer5":
                
                $base = $_POST['num1'];
                $exponente = $_POST['num2'];
                require "Funciones/Funcion_potencia.php";
                $resultado = potencia($base, $exponente);

                echo $resultado;
                break;

            case "f_Ejer6":

                $factorial = $_POST['num3'];
                require "Funciones/Funcion_factorial.php";
                $resultado = factorial($factorial);

                if($resultado == -1){
                    echo "El numero no debe ser negativo.";
                }
                else {
                    echo "el factorial de $factorial es $resultado";
                }
                break;

            case "f_Ejer7":

                $primo = $_POST['num4'];

                if($primo > 2){
            
                    for ($i=3;$i<=$primo;$i++){
                        if($primo==$i){
                            echo "$primo es un numero primo.";
                        }
                        else if($primo%$i==0){
                            echo "$primo no es un numero primo";
                            $i = $primo+1;
                        }
                    }
                }
                else if($primo < 2){
                    echo "$primo es un numero primo.";
                }
                break;

        }


    }

?>
<p> <a href="Index_hidden.php">Recargar la pagina</a></p>