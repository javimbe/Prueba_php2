<?php

$arrayNumAleatorio = [];


for($i = 0; $i < 10; $i++){

    array_push($arrayNumAleatorio,rand(0,100));

}

print_r($arrayNumAleatorio);

arsort($arrayNumAleatorio);
echo "<br> <br>";

foreach($arrayNumAleatorio as $a => $valor){

    echo $valor . "  ";

}

asort($arrayNumAleatorio);
echo "<br> <br>";

foreach($arrayNumAleatorio as $a => $valor){

    echo $valor . "  ";

}

?>