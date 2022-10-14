<?php

function factorial(int $factorial){

    $result = 1;

    if ($factorial < 0){
        return -1;
    }
    else{
        for($i=1;$i<=$factorial;$i++){
            $result *= $i;
        }
    }
    return $result;
}

?>