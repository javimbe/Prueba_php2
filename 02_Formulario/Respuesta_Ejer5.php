<?php

    $base = $_POST['num1'];
    $exponente = $_POST['num2'];
    $auxiliar = 1;

    for ($i = 0; $i<$exponente;$i++){

        $auxiliar *= $base;

    }
    echo "$auxiliar";

    echo "<br>";
    echo "<br>";
    echo "<br>";

    $vectorial = $_POST['num3'];
    $result = 1;

    for($i=1;$i<=$vectorial;$i++){
        $result *= $i;
    }
    echo "$result";

    echo "<br>";
    echo "<br>";
    echo "<br>";

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


    echo "<br>";
    echo "<br>";
    echo "<br>";

    for($i=1;$i<=100;$i++){

        if($i<3){
            echo "$i ";
        }
        else if($i>=3){
        
        for($o=2;$o<=$i;$o++){

            if($o==$i){
                echo "$i ";
            }
            else if($i%$o==0){
                $o = $i+1;
            }

        }
    }

    }

    
?>