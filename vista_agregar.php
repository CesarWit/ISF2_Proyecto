<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Agregar registro </title>
</head>
<body>

    <h1 align="center"; > Agregar juego jugado </h1>

    <form  align="center"; method="POST" action="agregar_registro_bsd.php">
        <input type="text" name="nombre" placeholder="Nombre del juego">
        <br>
        <input type="text" name="horas_jugadas" placeholder="Horas jugadas">
        <br>
        <input type="text" name="logros" placeholder="Logros obtenidos/totales">
        <br>
        <button type="submit"> Agregar registro </button>    
    </form>
</body>