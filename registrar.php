<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
include 'cn.php';
//Recibir los datos y almacenarlos en variables
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$telefono = $_POST["telefono"];
$direccion = $_POST["direccion"];
$correo = $_POST["correo"];
$edad = $_POST["edad"];
//Consulta para insertar
$insertar = "INSERT INTO clientes (nombre, apellido, telefono, direccion, correo, edad) VALUES('$nombre', '$apellido', '$telefono', '$direccion', '$correo', '$edad')";

//Ejecutar consulta
$resultado = mysqli_query($conexion, $insertar);
if(!$resultado){
    echo '<script>
    alert("Error al registrarse");
    </script>';
}  else{
    echo '<script>
    alert("Usted ha sido  registrado exitosamente");

    </script>';
}
//cerrar conexion
mysqli_close($conexion);

?>
    
</body>
</html>
