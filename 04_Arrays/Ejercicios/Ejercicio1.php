<?php

$arrayNumPares = [];

for($i = 0; $i<=50;$i+=2){

    array_push($arrayNumPares, $i);

}

print_r($arrayNumPares);

echo "<br><br>";

arsort($arrayNumPares);

print_r($arrayNumPares);

?>