<?php

$numeros = [];

for ($i = 1; $i <= 50; $i++){

    $numeros[$i] = $i;

}

foreach($numeros as $key => $value){

    if($key%3==0){
        unset($numeros[$value]);
    }
    
}
    
    foreach($numeros as $key => $value){
    
    echo  $value . " ";
    
}

?>