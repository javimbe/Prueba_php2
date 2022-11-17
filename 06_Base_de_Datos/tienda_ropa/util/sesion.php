<?php

session_start();

if(!isset($_SESSION['usuario'])){

    header("location: http://localhost/06_Base_de_Datos/tienda_ropa/");

}

?>