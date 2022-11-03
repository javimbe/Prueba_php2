<?php

function comprobar(String $a){

    $dni_num = substr($a , 0, strlen($a)-1);
    $dni_letra = substr($a ,strlen($a)-1 , strlen($a));
    $mensaje;

    $letra = match($dni_num%23){
        0 => "T",
        1 => "R",
        2 => "W",
        3 => "A",
        4 => "G",
        5 => "M",
        6 => "Y",
        7 => "F",
        8 => "P",
        9 => "D",
        10 => "X",
        11 => "B",
        12 => "N",
        13 => "J",
        14 => "Z",
        15 => "S",
        16 => "Q",
        17 => "V",
        18 => "H",
        19 => "L",
        20 => "C",
        21 => "K",
        22 => "E",
        default => "DNI no valido",

     };

    if($dni_letra === $letra){

        $mensaje = "Correcto";

    }
    else{
        $mensaje = "Incorrecto";
    }

     return $mensaje;

}

$personas = [

    "12345678A" => "Jairo",
    "87654321B" => "Marta",
    "76644052W" => "Javi"

];
?>
<table>
    <tr>
        <th>Nombre</th>
        <th>DNI</th>
        <th>Comprobacion</th>
    </tr>
    <?php

    foreach($personas as $dni => $nombre){

        ?>
        <tr>
            <td><?php echo $nombre; ?></td>   
            <td><?php echo $dni; ?></td>
            <td><?php echo comprobar($dni); ?></td>     
        </tr>
        <?php
    }
?>
</table>