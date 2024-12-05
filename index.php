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

<link rel="stylesheet" type="text/css" href="CSS/style.css">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&display=swap" rel="stylesheet">
<link rel="stylesheet" href=" https://use.fontawesome.com/releases/v5.2.0/css/all.css"> 
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">

	<title>RentaTüPeli</title>
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
<div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="img/1.JPG" alt="...">
    </div>

    <div class="item">
      <img src="img/2.JPG" alt="...">
    </div>

    <div class="item">
      <img src="img/3.JPG" alt="...">
    </div>
      <div class="item">
      <img src="img/4.JPG" alt="...">
    </div>
      <div class="item">
      <img src="img/5.JPG" alt="...">
    </div>
      <div class="item">
      <img src="img/6.JPG" alt="...">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<br><br>
<div class="exp-card1">
      <hr>
        <p>EN  CARTELERA</p>
        <hr>
  </div>
    <div class="container">
<div class="row">
<div class="col-md-6"> 
<div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters" style="border: 0.5px solid #ddd;">
    <div class="col-md-4">
      <img src="img/pe1.jpg" width="100%">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><strong>TOM Y JERRY</strong></h5>
        <p class="card-text">

Fecha de estreno: 11/febrero/2021<br>
Clasificación: Todos<br>
Duración: 102 minutos<br>
Genero: Animación. Comedia. Aventuras<br>
País: Estados Unidos</p> 
        <input type="submit" name="" class="btn btn-primary" value="Alquilar">
      </div>
    </div>
  </div>
</div>
</div>
<div class="col-md-6"> 
<div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters" style="border: 0.5px solid #ddd;">
    <div class="col-md-4">
      <img src="img/pe2.jpg" width="100%">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><strong>TERROR EN EL AIRE</strong></h5>
        <p class="card-text">
Título original: THE CAPTAIN<br>
Fecha de estreno: 18/marzo/2021<br>
Clasificación: 7 Años<br>
Duración: 86 minutos<br>
Genero: Acción, Aventura, Drama.<br>
País: China</p>
        <input type="submit" name="" class="btn btn-primary" value="Alquilar">
      </div>
    </div>
  </div>
</div>
</div>
</div>
<br>
<div class="row">
<div class="col-md-6"> 
<div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters" style="border: 0.5px solid #ddd;">
    <div class="col-md-4">
      <img src="img/pe3.jpg" width="100%">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><strong>RAYA</strong></h5>
        <p class="card-text">
          Título original: RAYA AND THE LAST DRAGON<br>
Fecha de estreno: 04/marzo/2021<br>
Clasificación: Todos<br>
Duración: 116 minutos<br>
Genero: Animado<br>
País: Estados Unidos</p>
        <input type="submit" name="" class="btn btn-primary" value="Alquilar">
      </div>
    </div>
  </div>
</div>
</div>
<div class="col-md-6"> 
<div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters" style="border: 0.5px solid #ddd;">
    <div class="col-md-4">
      <img src="img/pe4.jpg" width="100%">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><strong>EN GUERRA CON MI ABUELO</strong></h5>
        <p class="card-text">Título original: THE WAR WITH GRANDPA<br>
Fecha de estreno: 25/marzo/2021<br>
Clasificación: 7 Años<br>
Duración: 98 minutos<br>
Genero: Comedia<br>
País: Estados Unidos</p>
        <input type="submit" name="" class="btn btn-primary" value="Alquilar">
       
      </div>
    </div>
  </div>

</div>
</div>
</div>
<br>
<div class="row">
<div class="col-md-6"> 
<div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters" style="border: 0.5px solid #ddd;">
    <div class="col-md-4">
      <img src="img/pe5.jpg" width="100%">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><strong>GODZILLA VS KONG</strong></h5>
        <p class="card-text">Título original: GODZILLA VS KONG<br>
Fecha de estreno: 25/marzo/2021<br>
Clasificación: 12 Años<br>
Duración: 113 minutos<br>
Genero: Acción. Fantástico | Monstruos. Secuela<br>
País: Estados Unidos</p>
        <input type="submit" name="" class="btn btn-primary" value="Alquilar">
       
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
<br><br>
<div class="centro">
				<p>OFERTAS Y PROMOCIONES</p>
	</div>
	<div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="img/ca1.JPG" alt="...">
    </div>

    <div class="item">
      <img src="img/ca2.JPG" alt="...">
    </div>

    <div class="item">
      <img src="img/ca3.JPG" alt="...">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<br><br>
<div class="container">
 <div class="row">
  <div class="col-md-6">
   
      <a href="img/c1.jpg">
        <img src="img/c1.jpg" alt="" style="width:70%">
        
      </a>
  </div>
  <div class="col-md-6">
      <a href="img/c2.jpg">
        <img src="img/c2.jpg" alt="" style="width:70%">
        
      </a>
  </div>
  
</div>
  </div>
<div class="pie">
    
    <hr>
    
<table>
<tr>
  <td><strong><p class="text-1">Acerca de</p></strong></td>
  <td><strong><p class="text-1">Legal</p></strong></td>
  <td><strong><p class="text-1">Contacto</p></strong></td>
</tr>

<tr>
  <td><a href="">Aplicaciones moviles</a></td>
  <td><a href="">Terminos y Condiciones</a></td>
  <td><a href="">Dejanos tus Comentarios</a></td>
</tr>

<tr>
  <td><a href="">Consulte Aquí Cines Abiertos</a></td>
  <td><a href="">Politica de Privacidad</a></td>
   <td><select name="Pais">
  <option value="value1">Colombia</option>
  <option value="value2" selected>Argentina</option>
  <option value="value3">Mexico</option>
</select></td>
 
</tr>
<tr>
  <td></td>
   <td><a href="">Estatuto del Consumidor</a></td>
   <td></td>
 </tr>  
</table>
<hr>

<p class="text-2">Content of the site 2021© OPERADORA COLOMBIANA DE PELICULAS S.A.</p>
  	
</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>