<?php
$host_db="127.0.0.1:1246";
$user_db="estudiante";
$pass_db="estudiante";
$db_name="cwgames";

$conexion = new mysqli($host_db,$user_db,$pass_db,$db_name);

if($conexion->connect_error){
    echo"<h1>MySQL no le  esta dando permisos para ejecutar consultas verificar error</h1>";
} else {
	echo "<h4> La conexión a la base de datos esta funcionando </h4>";
}


?>