<h1> Ejercicios </h1>

<?php
    echo "<p>Esto Funciona </p>";


    /*
    Mostrar 10 numeros aleatorios y mostrar si son pares o impares.
    */

    

    for ($i=1; $i <= 10; $i++){

        $a = rand(1,10);

        if($a%2==0){
            echo "<li> $a es par </li>";
        }
        else {
            echo "<li> $a es impar </li>";
        }

    }

    echo "<br>";

    $o = 1;

    while($o <= 10){
        
        $a = rand(1,10);

        if($a%2==0){
            echo "<li> $a es par </li>";
        }
        else {
            echo "<li> $a es impar </li>";
        }

        $o++;
    }
    echo "[";
    for($i=1;$i<=50;$i++){
        if($i>3 && $i%3==0){
            echo ",$i";
        }
        if($i<=3 && $i%3==0){
            echo "$i";
        }
    }
    echo "]";

    echo "[";
    $string = "";

    for($i=3;$i<=50;$i+=3){
        $string = $string . $i . ",";
    }
    $string = substr($string, 0, strlen($string)-1);
    echo $string;
    echo "]";


    echo "<br>";
    echo "<br>";

    echo date("H:i");
    echo "<br>";
    echo date("d/m/Y");

    echo "<br>";
    echo "<br>";

    switch(date("N")){
        case 1:
            echo "Hoy es Lunes " . date("d \d\\e F \d\\e Y") ;
            break;
        case 2:
            echo "Hoy es Martes " . date("d \d\\e F \d\\e Y") ;
            break;
        case 3:
            echo "Hoy es Miercoles " . date("d \d\\e F \d\\e Y") ;
            break;
        case 4:
            echo "Hoy es Jueves " . date("d \d\\e F \d\\e Y") ;
            break;
        case 5:
            echo "Hoy es Viernes " . date("d \d\\e F \d\\e Y") ;
            break;
        case 6:
            echo "Hoy es Sabado " . date("d \d\\e F \d\\e Y") ;
            break;
        case 7:
            echo "Hoy es Domingo " . date("d \d\\e F \d\\e Y") ;
            break;
        }

?>