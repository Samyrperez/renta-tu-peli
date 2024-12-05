<?php
		include"cabeza.php";
		include("menu.php");

		?>
<div class="container">
 <div class="formularios">
      <div class="row">
         <div class="col-md-8">
             <div class="card">
                <div class="card-header">
                   <h3 class="text-center"><strong>Alquilar peliculas</strong></h3>
                </div>
            <div class="card-body">
                <form action="alquiler_programa.php" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6 pr-1">
                            <div class="form-group">
                                <label>Numero de Documento </label>
                                    <input type="text" class="form-control"  name="documento">
                            </div>
                        </div>
                        <div class="col-md-6 pl-1">
                            <div class="form-group">
                                <label>Tipo de documento</label>
                                    <select class="form-control" name="tipo_doc">
                                        <option value="cedula"> CEDULA DE CIUDADANIA</option>
                                        <option value="Pasaporte">PASAPORTE</option>
                                        <option value="Cedula de extrangeria">CEDULA DE EXTRANJERIA</option>                    
                                    </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 pr-1">
                            <div class="form-group">
                                <label>Nombre usuario</label>
                                    <input type="text" class="form-control" name="nombre">
                            </div>
                        </div>
                        <div class="col-md-6 pl-1">
                            <div class="form-group">
                                <label>Telefono:</label>
                                    <input type="number" class="form-control" name="telefono">
                            </div>
                        </div>
                    </div>
                                                           
                    <div class="row">
                        <div class="col-md-6 pr-1">
                            <div class="form-group">
                                <label>Dirección</label>
                                    <input type="text" class="form-control" name="direccion">
                            </div>
                        </div>
                        <div class="col-md-6 pl-1">
                            <div class="form-group">
                                <label>Correo Electronico</label>
                                    <input type="email" class="form-control" name="correo">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 pr-1">
                            <div class="form-group">
                                <label>Nombre de pelicula</label>
                                    <select class="form-control" name="pelicula">
                                        <option value="Raya"> RAYA</option>
                                        <option value="CROCS 2">CROCS 2</option>
                                        <option value="MORTAL KOMBAT">MORTAL KOMBAT</option>                    
                                    </select>
                            </div>
                        </div>
                        <div class="col-md-6 pl-1">
                            <div class="form-group">
                                <label>Tiempo de prestamo</label>
                                    <select class="form-control" name="tiempo">
                                        <option value="2">2 Dias</option>
                                        <option value="5">5 Dias</option>
                                        <option value="15">15 Dias</option>                    
                                    </select>
                            </div>
                        </div>
                                            
                    </div>
                    <div class="row">
                        <div class="col-md-6 pr-1">
                            <div class="form-group">
                                <label>Valor por dia </label>
                                    <input type="text" disabled value="500" class="form-control" id="inptzip">
                            </div>
                        </div>
                        <div class="col-md-6 pl-1">
                            <div class="form-group">
                                <label>Foto de usuario</label>
                                <input type="file" name="foto" id="inputstate" class="btn btn-secondary">
                                    
                            </div>
                        </div>
                    </div>
                                         <button type="reset" class="btn  btn-fill pull-right" >Cancelar</button>
                                        <div class="clearfix">

                                        <button type="submit" class="btn btn-primary btn-fill pull-right" style="padding-left: 12px;">Registrar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                      </div>
                  </div>
                </div>


 <?php 
		 include("pie.php");
		   ?>