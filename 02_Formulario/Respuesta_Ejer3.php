
<?php

echo"<h2>Ejercicio 3</h2>";
echo "<br>";
echo "<br>";

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

    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<h2>Ejercicio 4</h2>";

    echo "<br>";
    echo "<br>";

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
    require "enlace.php";
?>