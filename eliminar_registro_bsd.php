<?php
    require "conexion.php";
    mysqli_set_charset($conexion, 'utf8');

    $registro=$_POST['id'];

    $consulta_bsd = "DELETE FROM jugados WHERE id = ";

    mysqli_query($conexion, $consulta_bsd . $registro);
    
    mysqli_close($conexion);

    echo "<h2>Registro eliminado</h2>";

    echo "<a href='consulta_bsd.php'> Inicio </a>";

?>
