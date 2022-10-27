<?php

$personas = [

"23242627F" => "Albertiño",
"95542627T" => "Armando",
"87234455G" => "Pepe"

];

$personas["12345678D"] = "Rodolfo";
$personas["76644052W"] = "Javi";

//unset($personas["23242627F"]);

//$personas = array_values($personas);

print_r($personas);
echo "<br><br>";

echo "Hay " . count($personas) . " personas";


$series = [

    'El juego del calamar',
    'La casa de papel',
    'Alice in borderland',
    'The witcher'

];

echo "<ul>";
for($i = 0; $i < count($series);$i++){

    echo "<li>" . $series[$i] . "</li>";

}
echo "</ul>";
$i = 0;
echo "<br><br>";

echo "<ul>";
while($i < count($series)){

    echo "<li>" . $series[$i] . "</li>";
    $i++;
}
echo "</ul>";

echo "<br><br>";

foreach ($series as $serie => $indice){

    echo $indice . " => " . $serie . "<br>";

}

echo "<br><br>";

?>
<table style="border:solid black 2px; background-color:orange; border-radius:4px;">
<tr>
<th>Nombre</th>
<th>Dni</th>
</tr>
<?php
foreach($personas as $persona => $valor){

    ?> <tr><td style="border:solid black 2px; background-color:pink; border-radius:4px;">
    <?php echo $valor;?>
    </td><td style="border:solid black 2px; background-color:lightblue; border-radius:4px;">
    <?php echo $persona;?>
    </td></tr><?php

}
?>
</table>

<?php

//Comparacion de arrays

$fruta1 = [1 => "Melocoton", 0 => "Manzana",2 =>"kiwi"];
$fruta2 = ["Manzana", "Melocoton","kiwi"];

if($fruta1 == $fruta2){
    echo "Los arrays tienen los mismos elementos";
}
else{
    echo "Las arrays no tienen los mismos elementos";
}

echo "<br>";

if($fruta1 === $fruta2){
    echo "Las frutas son las mismas";
}
else{
    echo "Las frutas no son las mismas";
}

echo "<br><br>";

if($fruta1 === $fruta2){

    echo "Los arrays estan en el mismo orden y tienen los mismos elementos";
    
}
else if($fruta1 == $fruta2){
    echo "Los arrays tienen los mismos elementos";
}
else{
    echo "Los arrays no tienen los mismos elementos";
}
echo "<br><br>";
ksort($personas);//Orden de menor a mayor por clave

foreach($personas as $persona => $valor){

    echo $valor . " => " . $persona . "<br>";
}
echo "<br><br>";
//ARRAY MULTIDIMENSIONAL

$juegos =[
    ["Ps4" , "Dark soul","8"],
    ["ps5" , "Uncharted","7"],
    ["xbox" , "Halo","9"],
    ["switch" , "Zelda","4"]
];

foreach($juegos as $a){

    [$x, $y, $z] = $a;
    echo "Consola: " . $x . ", Videojuego: " . $y . ", Nota: " . $z . "<br>";

}

echo "<br><br>";

?>

<table style="border:solid black 2px">
    <tr>
        <th>Consola</th>
        <th>Juego</th>
        <th>Nota</th>
    <tr>
<?php
foreach($juegos as $a){

    [$x, $y, $z] = $a;
?>
    <tr>
        <td style="border:solid black 2px">
        <?php echo $x; ?>
        </td>
        <td style="border:solid black 2px">
        <?php echo $y; ?>
        </td>
        <td style="border:solid black 2px">
        <?php echo $z; ?>
        </td>
    </tr>
<?php
}
?>
</table>
<?php
echo "<br><br>";
$titulo = array_column($juegos, 1);
array_multisort($titulo, SORT_ASC, $juegos);




?>

<table style="border:solid black 2px">
    <tr>
        <th>Consola</th>
        <th>Juego</th>
        <th>Nota</th>
    <tr>
<?php
foreach($juegos as $a){

    [$x, $y, $z] = $a;
?>
    <tr>
        <td style="border:solid black 2px">
        <?php echo $x; ?>
        </td>
        <td style="border:solid black 2px">
        <?php echo $y; ?>
        </td>
        <td style="border:solid black 2px">
        <?php echo $z; ?>
        </td>
    </tr>
<?php
}

?>
