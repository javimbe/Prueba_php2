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
        $estudiantes[$i][2] = rand(0,10);
        $estudiantes[$i][3] = rand(0,10);

    }

    function calificacion($nota1,$nota2,$nota3){

        $nota  = $nota1 + $nota2 + $nota3;

        $calificacion = match(TRUE){

            $nota < 15 => "Suspenso",
            $nota < 21 => "Aprobado",
            $nota < 27 => "Notable",
            default => "Sobresaliente"

        };

        return $calificacion;

    }
    
    ?>

    <table>
        <tr>
            <th>Nombre</th>
            <th>Nota 1</th>
            <th>Nota 2</th>
            <th>Nota 3</th>
            <th>Calificacion</th>
        </tr>
<?php
    foreach($estudiantes as $alumno){

        [$nombre, $nota1, $nota2, $nota3] = $alumno;

?>  
        <tr>
            <td><?php echo $nombre; ?></td>
            <td><?php echo $nota1; ?></td>
            <td><?php echo $nota2; ?></td>
            <td><?php echo $nota3; ?></td>
            <td><?php echo calificacion($nota1, $nota2, $nota3); ?></td>
        </tr>
        <?php
    }

?>

    </table>