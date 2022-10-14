<?php

function potencia(int $base, int $exponente){

    $resultado = -1;
    $auxiliar = 1;

    if($exponente < 0){
        return $resultado;
    }
    else if($exponente == 0){
        return 1;
    }
    else{

    

    for ($i = 1; $i<=$exponente;$i++){

        $auxiliar *= $base;

    }
    return $auxiliar;
    }
}

?>