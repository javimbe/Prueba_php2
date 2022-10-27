<?php

$juegos = [

    ["Dark soul","ps4","40"],
    ["Uncharted","ps3","50"],
    ["Zelda","switch","60"],
    ["LOL","pc","0"],
    ["Halo","xbox","54"]

];

echo "Tabla por defecto.";
?>

<table style="border:solid black 2px">
    <tr>
        <th>Titulo</th>
        <th>Consola</th>
        <th>Precio</th>
    </tr>
<?php 
foreach($juegos as $juego){

    [$titulo, $consola, $precio] = $juego;

    ?>
    <tr>
        <td style="border:solid black 2px"><?php echo $titulo; ?></td>
        <td style="border:solid black 2px"><?php echo $consola; ?></td>
        <td style="border:solid black 2px"><?php echo $precio; ?></td>
    </tr><?php
}
?>
</table>

<?php

echo "<br><br>";
echo "Ordenado por Precio.";
//Ordenar por precio.

$columna_precio = array_column($juegos, 2);
array_multisort($columna_precio, SORT_ASC, $juegos);

?>

<table style="border:solid black 2px">
    <tr>
        <th>Titulo</th>
        <th>Consola</th>
        <th>Precio</th>
    </tr>
<?php 
foreach($juegos as $juego){

    [$titulo, $consola, $precio] = $juego;

    ?>
    <tr>
        <td style="border:solid black 2px"><?php echo $titulo; ?></td>
        <td style="border:solid black 2px"><?php echo $consola; ?></td>
        <td style="border:solid black 2px"><?php echo $precio; ?></td>
    </tr><?php
}
?>
</table>

<?php

echo "<br><br>";
echo "Ordenado por Consola.";
//Ordenar por consola.

$columna_consola = array_column($juegos, 1);
array_multisort($columna_consola, SORT_ASC, $juegos);

?>

<table style="border:solid black 2px">
    <tr>
        <th>Titulo</th>
        <th>Consola</th>
        <th>Precio</th>
    </tr>
<?php 
foreach($juegos as $juego){

    [$titulo, $consola, $precio] = $juego;

    ?>
    <tr>
        <td style="border:solid black 2px"><?php echo $titulo; ?></td>
        <td style="border:solid black 2px"><?php echo $consola; ?></td>
        <td style="border:solid black 2px"><?php echo $precio; ?></td>
    </tr><?php
}
?>
</table>

<?php

echo "<br><br>";
?>