<?php

include 'sesion.php';
include 'conexion.php';
 $conectar_usuario=$conectar_bd->query("SELECT * FROM usuario WHERE documento = '$usuario_conectado'");
  if ($fila=mysqli_fetch_array($conectar_usuario)) {
    
    $nombre=$fila['nombre'];
  }
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel="icon" href="img/logo.png">
<link rel="stylesheet" type="text/css" href="CSS/style.css">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&display=swap" rel="stylesheet">
<link rel="stylesheet" href=" https://use.fontawesome.com/releases/v5.2.0/css/all.css"> 
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
<style type="text/css">
  .foto{
    width: 100px;
    border-radius:30px; 
  }
</style>

	<title></title>
</head>
<body>
	<div class="cabecera">
			
				<p>RentaTüPeli</p>
        <select name="cuidad">
  <option value="value1">Seleccione ciudad</option>
  <option value="value2" selected>Barranquilla</option>
  <option value="value3">Bogotá</option>
  <option value="value4">Santa Marta</option>
</select>

			
	</div>
	<div class="menu">
<ul class="nav nav-pills" role="tablist">
  <li role="presentation"><a href="index.php">INICIO</a></li>
  <li role="presentation"><a href="estrenos.php">ESTRENOS</a></li>
  <li role="presentation"><a href="alquiler.php">ALQUILER</a></li>
  <li role="presentation"><a href="login.php">INGRESAR</a></li>
</ul>
	</div>




<h1 class="text-center">Bienvenido, <?php echo"$nombre";?></h1>


<div class="container">
  <?php
 $mostrar=$conectar_bd->query("SELECT*FROM reservas");
 $fila=mysqli_fetch_array($mostrar);
 $total=mysqli_num_rows($mostrar); 
 ?>
  <h3 class="text"><strong>Todas las reservas: </strong><b><?php echo $total; ?></b></h3>
  <table class="table table-bordered table-hover">
  <tr class="primary">
    <td><strong>Código de reservas</strong></td>
    <td><strong>Peliculas reservadas</strong></td>
    <td><strong>Documento cliente</strong></td>
    <td><strong>Nombre cliente</strong></td>
    <td><strong>Fecha reserva</strong></td>
    <td><strong>Valor alquiler</strong></td>
    <td><strong>Foto usuario</strong></td>
  </tr>
  <?php 
  foreach ($mostrar as $fila) {
   ?>
  <tr class="primary">
    <td><?php echo $fila['id_reserva']; ?></td>
    <td><?php echo $fila['nombre_pelicula']; ?></td>
    <td><?php echo $fila['documento_usuario']; ?></td>
    <td><?php echo $fila['nombre_usuario']; ?></td>
    <td><?php echo $fila['tiempo_prestamo']; ?></td>
    <td><?php echo $fila['valor_alquiler']; ?></td>
    <td><img class="foto" src="<?php echo $fila['foto_usuario']?>"></td>
  </tr>
<?php
 }
 ?>
</table>
</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>