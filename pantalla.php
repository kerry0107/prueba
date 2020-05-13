<?php 

$conexion=mysqli_connect('localhost','root','','venta_online');



 ?>


<!DOCTYPE html>
<html lang="en">
  <head>
        <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>cliente</title>
   <link rel="stylesheet" href="css/bootstrap.min.css">
	
	<link rel="stylesheet" href="css/orlin.css">
	<link rel=icon href='img/logo-icon.png' sizes="32x32" type="image/png">  </head>
  <body>
		<nav class="navbar navbar-default ">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">venta online</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class=""><a href="facturas.php"><i class='glyphicon glyphicon-list-alt'></i> cliente<span class="sr-only">(current)</span></a></li>
        <li class="active"><a href="productos.php"><i class='glyphicon glyphicon-barcode'></i> producto</a></li>
		<li class=""><a href="clientes.php"><i class='glyphicon glyphicon-user'></i> medico</a></li>
		<li class=""><a href="usuarios.php"><i  class='glyphicon glyphicon-lock'></i> Especialidad</a></li>
		<li class=""><a href="perfil.php"><i  class='glyphicon glyphicon-cog'></i> Consultorio</a></li>
       </ul>
      <ul class="nav navbar-nav navbar-right">
      
		<li><a href="login.php?logout"><i class='glyphicon glyphicon-off'></i> Salir</a></li>
      </ul>
    </div>
  </div>
</nav>
<br>
		
    <br>
	<section>
    
	<div class="container">
	<div class="panel panel-info">
		<div class="panel-heading">
		    <div class="btn-group pull-right">
				<a href="index.html"><button type='button' class="btn btn-info" data-toggle="modal" data-target="#nuevoProducto"> Nuevo Usuario</button></a>
			</div>
			<h4>Lista Usuarios</h4>
		</div>
    <form class="form-horizontal" role="form" id="datos_cotizacion">
      <br>
      <br>
    
        
            <div class="form-group row">
              <label for="q" class="col-md-2 control-label">Código o nombre</label>
              <div class="col-md-5">
                <input type="text" class="form-control" id="q" placeholder="Código o nombre del producto" onkeyup='load(1);'>
              </div>
              <div class="col-md-3">
                <button type="button" class="btn btn-default" onclick='load(1);'>
                  <span class="glyphicon glyphicon-search" ></span> Buscar</button>
                <span id="loader"></span>
              </div>
              
            </div>
        


<div class="panel-body">
					<div class="table-responsive">
	<table class="table table-hover text-center">
		<thead>
		<tr>
			<th class="text-center">#</th >
            <th class="text-center">nombre</th >
            <th class="text-center">apellido</th >
            <th class="text-center">telefono</th >
            <th class="text-center">direccion</th >
            <th class="text-center">correo</th >
            <th class="text-center">edad</th >

		</tr>
</thead>
		<?php 

        $sql="SELECT * FROM clientes";
        $result=mysqli_query($conexion,$sql);

        while($mostrar=mysqli_fetch_array($result)){
        
        

		 ?>
		 <tbody>
		<tr>
			
			<td><?php echo $mostrar['ID'] ?></td>
			<td><?php echo $mostrar['nombre'] ?></td>
			<td><?php echo $mostrar['apellido'] ?></td>
			<td><?php echo $mostrar['telefono'] ?></td>
			<td><?php echo $mostrar['direccion'] ?></td>
			<td><?php echo $mostrar['correo'] ?></td>
			<td><?php echo $mostrar['edad'] ?></td>
		</tr>
</tbody>
		<?php 

}


		 ?>
	</table>
</div>
</div>
</div>
</div>
<br>
<br>

	<div class="navbar navbar-default navbar-fixed-bottom">
    <div class="container">
      <p class="navbar-text pull-left">&copy 2019 - Kerry Santana 
           
      </p>
   </div>
</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
  	<script type="text/javascript" src="js/productos.js"></script>
  </body>
</html>
