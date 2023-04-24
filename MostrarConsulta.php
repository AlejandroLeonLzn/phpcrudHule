<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<table border="1">
<?php

include("config/conexion.php");
$comp = new conex();
$link = $comp->conectar();

$id=$_REQUEST['parametro'];

$comp->mostrarproce($link,$id);
?>
    </table>

</body>
</html>