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

    foreach($estudiantes as $alumno){

        [$nombre, $nota] = $alumno;

        echo $nombre . " y su nota es: " . $nota . "<br>";
    }

?>