<?php

function Edad(int $a){

    $mensaje = match(TRUE){

        $a < 18 => "Menor de Edad",
        $a < 65 => "Mayor de Edad",
        $a >= 65 => "Jubilado",

    };

    return $mensaje;

}

$personas = [

    ["Juan", "Morales"],
    ["Alberto", "Bicicleta"],
    ["Maria", "Sevilla"],
    ["Gustavo", "Doce"],

];

for($i = 0; $i < count($personas); $i++){

    $personas[$i][2] = rand(0,100);

}

?>
<table>
    <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Edad</th>
        <th>Columna</th>
    </tr>
    <?php

foreach($personas as $persona){

    [$nombre, $apellido, $edad] = $persona;
    ?>
    <tr>
        <td><?php echo $nombre ?></td>
        <td><?php echo $apellido ?></td>
        <td><?php echo $edad ?></td>
        <td><?php echo Edad($edad) ?></td>
    </tr>
<?php
}

?>
</table>