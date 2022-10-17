<form action="Ejercicio2.php" method="post">

    <label>Introduce tu DNI: </label>
    <input type="text" name="dni"><br>
    <input type="submit">

</form>

<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $dni = $_POST['dni'];
    $num_dni = (int)substr($dni,0,8);
    $letra_dni = strtoupper(substr($dni,8,1));

    if(strlen($dni)!=9){
        echo "DNI no valido, introducelo de nuevo.";
    }
    else {

        if(strlen($num_dni) != 8){
            echo "DNI no valido, introducelo de nuevo.";
        }
        
        else{

            $mensaje = match($letra_dni){
                            "T" => "DNI correcto",
                            "R" => "DNI correcto",
                            "W" => "DNI correcto",
                            "A" => "DNI correcto",
                            "G" => "DNI correcto",
                            "M" => "DNI correcto",
                            "Y" => "DNI correcto",
                            "F" => "DNI correcto",
                            "P" => "DNI correcto",
                            "D" => "DNI correcto",
                            "X" => "DNI correcto",
                            "B" => "DNI correcto",
                            "N" => "DNI correcto",
                            "J" => "DNI correcto",
                            "Z" => "DNI correcto",
                            "S" => "DNI correcto",
                            "Q" => "DNI correcto",
                            "V" => "DNI correcto",
                            "H" => "DNI correcto",
                            "L" => "DNI correcto",
                            "C" => "DNI correcto",
                            "K" => "DNI correcto",
                            "E" => "DNI correcto",
                            default => "DNI no valido",

                         };
                echo "$mensaje";

        }

    }
}

?>