<?php 
require "conexion.php";
mysqli_set_charset($conexion,'utf8');

$consulta_bsd = "SELECT * FROM jugados";

$resultado = $conexion -> query ($consulta_bsd);

$count = mysqli_num_rows($resultado);

echo "<a href='vista_agregar.php'> Agregar registro </a> <br><br>";

echo "<table border='2' >
	<tr>
		<th> ID </th>
		<th> Nombre </th>
		<th> Horas jugadas </th>
		<th> Logros </th>
	</tr>";

if($count > 0) {
	while($registro = mysqli_fetch_assoc($resultado)) {
		echo "<tr>";
		echo "<td>" . $registro['id'] . "</td>";
		echo "<td>" . $registro['nombre'] . "</td>";
		echo "<td>" . $registro['horas_jugadas'] . "</td>";
		echo "<td>" . $registro['logros'] . "</td>";

	}
	echo "</table>";
} else {
	echo "<h1 style='color:red'> Sin registros </h1>";
}

echo "<br> <a href='vista_eliminar.php'> Eliminar registro </a> <br><br>";

?>