<h1>Ejercicio 7</h1>

<form action="Ejercicio7.php" method="POST">
    <label>Nombre del juego: </label>
    <input type="text" name="nombre"><br>

    <label>Nombre de la consola: </label>
    <select name="consola">
        <option value="Switch">Switch</option>
        <option value="Ps4">Ps4</option>
        <option value="Ps5">Ps5</option>
    </select>
    <br>
    <label>Edicion Especial</label>
    <input type="checkbox" id="e1" name="edicion" >
    <label for="e1">Si</label>
    <br>
    <input type="submit" value="Enviar">

</form>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){


    $nombre = $_POST['nombre'];
    $nombreConsola = $_POST['consola'];

    $_Consolas = [
        "Switch" => 40,
        "Ps4" => 60,
        "Ps5" => 70
    ];

    $juego = $_Consolas[$nombreConsola];

    $precio = $juego + $juego*0.25;

    if(isset($_POST['edicion'])){

        echo "El videojuego $nombre cuesta $precio ";
    }
    else{
        echo "El videojuego $nombre cuesta $juego ";
    }

}
    
  
require "enlace.php";

?>
    
