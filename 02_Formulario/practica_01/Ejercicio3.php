<?php

for ($i = 1; $i<=10; $i++){

echo "<table id='tabla" . $i . "' style='border:solid 8px black'>";

    for($o = 1; $o <= 10; $o++){

            echo "<tr><td style='background-color:yellow; border:solid 1px'> $i X $o = " . $i*$o . " </td></tr>";

    }

    echo "</table>";

}

?>