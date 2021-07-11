<?php
    require "conexion.php";
    mysqli_set_charset($conexion, 'utf8');

    //$nombre = $_POST['nombre'];
    //$horas_jugadas = $_POST['horas_jugadas'];
    //$logros = $_POST['logros'];

    $datos = array(
    	'nombre' => $_POST['nombre'], 
    	'horas_jugadas' => $_POST['horas_jugadas'], 
    	'logros' => $_POST['logros'], 
	);

    $consulta_bsd = "INSERT INTO jugados (`nombre`,`horas_jugadas`,`logros`) VALUES ('".$datos['nombre']."','".$datos['horas_jugadas']."','".$datos['logros']."')";

    mysqli_query($conexion, $consulta_bsd);
    
    mysqli_close($conexion);

    echo "<h2>Registro agregado</h2>";

    echo "<a href='consulta_bsd.php'> Inicio </a>";

?>

