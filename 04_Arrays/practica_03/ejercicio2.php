<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

<?php

$productos = [

    ["2","piña", 3],
    ["3.5" , "limon",5],
    ["7" , "carne", 8],
    ["4" , "naranja",2],
];

$contador = 0;

?>

<table class="table table-striped">
    <tr>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Cantidad</th>
        <th>Total</th>
        <th>Precio Total</th>
    </tr>
    <?php
foreach($productos as $producto){
    [$precio,$nombre,$cantidad] = $producto;
    $contador += $precio*$cantidad;
    ?>
    <tr>
        <td><?php echo $nombre ?></td>
        <td><?php echo $precio ?></td>
        <td><?php echo $cantidad ?></td>
        <td><?php echo $precio*$cantidad ?></td>
        <td></td>
    </tr><?php

}
?>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td><?php echo $contador ?></td>
    </tr>
</table>
</body>
</html>