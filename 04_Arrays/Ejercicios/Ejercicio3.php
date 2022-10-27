<?php

$paises = ["Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw"] ;

asort($paises);
?>

<table>
    <tr>
        <th>Pais</th>
        <th>Capital</th>
    </tr>
<?php
    foreach($paises as $pais => $capital){
?>
        <tr>
            <td style="border:solid black 2px"><?php echo $pais; ?></td>
            <td style="border:solid black 2px"><?php echo $capital; ?></td>
        </tr>
    <?php
    }
?>