<form action="Ejercicio7_hidden.php" method="post">

    <label>Nombre</label>
    <input type="hidden" name="f" value="f_nombre"><br>
    <input type="submit" value="enviar">

</form>

<form action="Ejercicio7_hidden.php" method="post">

    <label>Numero</label>
    <input type="hidden" name="f" value="f_numero"><br>
    <input type="submit" value="enviar">

</form>

<?php

if($_SERVER['REQUEST_METHOD'] == "POST"){
    if($_POST["f"] == "f_nombre"){
        echo "hola";
    }
    else if($_POST["f"] == "f_numero"){
        echo "adios";
    }
}


?>