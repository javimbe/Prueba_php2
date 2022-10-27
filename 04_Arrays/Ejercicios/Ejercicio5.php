<?php

    $estudiantes = [

        ["Juan"],
        ["David"],
        ["Maria"],
        ["Alex"],
        ["Mario"]

    ];


    for($i = 0; $i < count($estudiantes);$i++){

        $estudiantes[$i][1] = rand(0,10);

    }

    for($i = 0; $i < count($estudiantes);$i++){

        if($estudiantes[$i][1]<5){

            $estudiantes[$i][2] = "Suspenso";
        }
        else if($estudiantes[$i][1]<7){

            $estudiantes[$i][2] = "Aprobado";
        }
        else if($estudiantes[$i][1]<9){
            $estudiantes[$i][2] = "Notable";
        }else{
            $estudiantes[$i][2] = "Sobresaliente";
        }
        

    }
    

    foreach($estudiantes as $alumno){

        [$nombre, $nota, $calificacion] = $alumno;

        echo $nombre . " y su nota es: " . $nota . " y está: " . $calificacion . "<br>";
    }

?>