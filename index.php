<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Crud 1</h1>

    <form action="MostrarConsulta.php" method="post">
    <table width="300px">
    <tr><td><input type="text" name="parametro" class="form-control" required placeholder="parametro"></td>
      </tr>
      <tr><td align="center">
      <input type="submit" value="Enviar" class="btn btn-primary"></td>
      </tr>
      </table>
    </form>

    <table border="1">
<?php

include("config/conexion.php");
$comp = new conex();
$link = $comp->conectar();


$comp->mostrartodo($link);
?>
    </table>
</body>
</html>