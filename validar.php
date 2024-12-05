<?php
	include 'conexion.php';
	$usuario=$_POST['usuario'];
	$clave=$_POST['clave'];
	$validar=$conectar_bd->query("SELECT * FROM usuario where documento='$usuario' and clave ='$clave' ");

	if ($fila =mysqli_fetch_array($validar)) {
		
		session_start();
		$_SESSION['usuario']=$_POST['usuario'];
		
		header("location:inicio.php");
	}
	else{

		echo '<script type="text/javascript">
	alert("Error de usuario o contraseña");
</script>';

		header("refresh:1; url = login.php");
	}

 ?>
 