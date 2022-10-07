<h1>Respuesta Formulario</h1>

<?php

    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];

    echo $nombre;
    echo "<br>";
    echo $edad;


    for($i=0;$i<=$_POST['num'];$i++){
        echo "<li color:red> $i </li>";
    }

?>