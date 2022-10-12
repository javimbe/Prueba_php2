<h1>Ejercicio Prueba </h1>

<form action="Ejercicio_Prueba.php" method="post">
    <label> </label>
    <input type="text" name="numero"><br><br>
    <input type="submit" value="Enviar">
</form>

<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        echo $_POST['numero'];
    }

?>


