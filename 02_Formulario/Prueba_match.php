<?php

$d = date("l");

$dia = match($d)
{
    "Monday" => "Lunes",
    "Tuesday" => "Martes",
    "Wednesday" => "Miercoles",
    "Thursday" => "Jueves"
};

echo "$dia";
?>