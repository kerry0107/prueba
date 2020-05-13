<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

$conexion = mysqli_connect("localhost", "root", "", "venta_online");

$salida = "";
$query = "SELECT * FROM usuarios ORDER By ID";

if(isset($_POST['consulta'])){
	$q = $mysqli->real_escape_string($_POST['consulta']);
	$query = "SELECT ID, nombre, apellido, telefono, direccion, correo, edad FROM usuarios WHERE nombre LIKE '%".$q."%' OR apellido LIKE '%".$q."%' OR telefono LIKE '%".$q."%' OR direccion LIKE '%".$q."%' OR correo LIKE '%".$q."%' OR edad LIKE '%".$q."%'";
}

//$resultado = $mysqli->query($query);

//if ($resultado->num_rows > 0) {

       $salida.="<table>
		<thead>
		<tr>
			<th>ID</th >
            <th>nombre</th >
            <th>apellido</th >
            <th>telefono</th >
            <th>direccion</th >
            <th>correo</th >
            <th>edad</th >

		</tr>
		</thead>
		<tbody>";
while($fila = $resultado->fetch_assoc()) {
	$salida.="<tr>
	<td>".$fila['ID']."</td>
	<td>".$fila['nombre']."</td>
	<td>".$fila['apellido']."</td>
	<td>".$fila['telefono']."</td>
	<td>".$fila['direccion']."</td>
	<td>".$fila['correo']."</td>
	<td>".$fila['edad']."</td>
</tr>";
}
$salida.="</tbody></table>";
 }
'else' {

$salida.="no hay datos :(";

}

echo $salida;
$mysqli->close();
?>

</body>
</html>
