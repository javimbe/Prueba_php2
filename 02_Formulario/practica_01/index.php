<head>
<link rel="stylesheet" href="estilos.css">
</head>

<body>

<div id="div1">

<h1>Ejercicio 1</h1>
<h4>Muestra una cantidad de números primos y desde donde empieza a mostrar.</h4>

<form action="#result" method="POST">

<label>Introduce la cantidad de números que apareceran: </label>
<input type="text" name="num1"><br><br>

<label>Introduce desde que número empezarán a salir: </label>
<input type="text" name="num2"><br><br>

<input type="submit" value="Enviar" id="Enviar1">
<input type="hidden" name="f" value="f_Ejer1">

</form>

</div>

<div id="div2">

<h1>Ejercicio 2</h1>
<h4>Introduce un DNI y el programa indicará si es o no valido.</h4>

<form action="#result" method="post">

    <label>Introduce tu DNI: </label>
    <input type="text" name="dni"><br><br>
    <input type="submit" value="Enviar Consulta" id="Enviar2">
    <input type="hidden" name="f" value="f_Ejer2">

</form>

</div>

<div id="div3">

    <h1><a href="Ejercicio3.php">Ejercicio 3</a></h1>
    <h4>Muestra las tablas de multiplicar del 1 al 10.</h4>

</div>

<div id="div4">

<h1>Resultado</h1>

    <div id="div5">
    <br>
    <h3 id="result"> </h3>




<?php

    if($_SERVER['REQUEST_METHOD'] == "POST"){

        if($_POST['f']=="f_Ejer1"){

            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $contador = 0;
            $sumatorio = 2;
            echo "<p id='p1'>";
            while($contador < $num1){
            
                if($sumatorio>=$num2 && $contador==0){
                    echo "$num2 ";
                    $num2++;
                    $sumatorio = 2;
                    $contador++;
             }
                else if ($sumatorio>=$num2){
                    echo "- $num2 ";
                    $num2++;
                    $sumatorio = 2;
                    $contador++;
                }
                else if($num2%$sumatorio==0){
                    $num2++;
                    $sumatorio = 2;
                }
                else{
                    $sumatorio++;
                }
                

            }
            echo "</p>";

        }

        else if($_POST['f']=="f_Ejer2"){


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

                        $comprobacionDNI = $num_dni%23;
            
                        $mensaje = match($comprobacionDNI){
                                        0 => "T",
                                        1 => "R",
                                        2 => "W",
                                        3 => "A",
                                        4 => "G",
                                        5 => "M",
                                        6 => "Y",
                                        7 => "F",
                                        8 => "P",
                                        9 => "D",
                                        10 => "X",
                                        11 => "B",
                                        12 => "N",
                                        13 => "J",
                                        14 => "Z",
                                        15 => "S",
                                        16 => "Q",
                                        17 => "V",
                                        18 => "H",
                                        19 => "L",
                                        20 => "C",
                                        21 => "K",
                                        22 => "E",
                                        default => "DNI no valido",
            
                                     };

                                     if($letra_dni == $mensaje){
                                        echo "El DNI es correcto.";
                                     }
                                     else{
                                        echo "El DNI no es valido.";
                                     }
                            
            
                    
            
                }
            }
            
        }

    }

?>

</div>
</div>

</body>