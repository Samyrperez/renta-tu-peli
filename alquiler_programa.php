<?php
include "conexion.php";

  $doc=$_POST['documento'];
  $tipo_doc=$_POST['tipo_doc'];
  $nombre=$_POST['nombre'];
  $telefono=$_POST['telefono'];
  $direccion=$_POST['direccion'];
  $mail=$_POST['correo'];
  $pelicula=$_POST['pelicula'];
  $fecha=$_POST['tiempo'];
  $foto=$_FILES['foto']['name'];
  $valor_alqui=$fecha*500;
  $carpeta='perfil/';
  $foto2=$carpeta.$foto;

  move_uploaded_file($_FILES['foto']['tmp_name'],$carpeta.$foto );
    
    $guardar=$conectar_bd->query("INSERT INTO `reservas`(`id_reserva`, `documento_usuario`, `tipo_documento`, `nombre_usuario`, `telefono`, `direccion`, `email`, `nombre_pelicula`, `tiempo_prestamo`, `valor_alquiler`, `foto_usuario`) VALUES (null,'$doc','$tipo_doc','$nombre','$telefono','$direccion','$mail','$pelicula', '$fecha','$valor_alqui','$foto2') ");
if ($guardar) {
    echo '<script type="text/javascript">alert("Registro exitoso ");</script>';
  header("refresh:1; url=alquiler.php");
}
 else {
  echo '<script type="text/javascript">alert("Error al registrar");</script>';
  header("refresh:1; url=alquiler.php");
 }
 
 ?>
