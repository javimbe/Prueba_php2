<form action="Ejercicio1.php" method="POST">

<label>Introduce un numero: </label>
<input type="text" name="num1">

<label>Introduce un numero: </label>
<input type="text" name="num2">
<input type="submit" value="Enviar">

</form>

<?php

    if($_SERVER['REQUEST_METHOD'] == "POST"){

        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $contador = 0;
        $sumatorio = 2;

        while($contador < $num1){

            if ($sumatorio==$num2){
                echo "$num2";
                $num2++;
                $sumatorio = 2;
                $contador++;
            }
            else if($num2%$sumatorio==0){
                $num2++;
                $sumatorio = 2;
            }

            $sumatorio++;

        }

    }

?>