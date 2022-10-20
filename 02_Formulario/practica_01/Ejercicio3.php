<head>
<link rel="stylesheet" href="estilos.css">
</head>

<body id="body_Ejer3">
<?php

for ($i = 1; $i<=10; $i++){

echo "<table id='tabla" . $i . "'>";
echo "<tr><td id='td_" . $i . "'><h3>Tabla del " . $i ."</h3></td></tr>";

    for($o = 1; $o <= 10; $o++){

            echo "<tr><td> $i X $o = " . $i*$o . " </td></tr>";

    }

    echo "</table>";

}

?>
<button type="button" id="volver"><a href="index.php">Volver</a></button>
</body>