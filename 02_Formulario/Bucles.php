<form action="Bucles.php" method="post">

    <label>Introduce un numero: </label>
    <input type="text" name="num">
    <input type ="submit" value="Enviar">

</form>

<?php

if($_SERVER['REQUEST_METHOD']=="POST"){


    $num = $_POST['num'];
    $resultado = 1;
    echo "<table style='border:1px solid black'>";

    for($i = 1; $i <= 10; $i++){

        $resultado = $num * $i;
        echo "<tr>";
        echo "<td style='border:1px solid black'> $num x $i =  </td>";
        echo "<td style='border:1px solid black'> $resultado </td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "<p><a href='Bucles.php'>Recargar la pagina</a></p>";
}

?>

