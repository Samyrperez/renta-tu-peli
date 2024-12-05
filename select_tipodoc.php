 <?php 
      $tipodoc=$conectar_bd->query("SELECT * FROM tipo_documento");

      while ($fila=mysqli_fetch_array($tipodoc)) { ?>
      <select class="form-control" name="formacion">
            <option>Seleccionar</option>
      <?php foreach ($tipodoc as $fila) {?>
    
      <option value="<?php echo $fila['IdDoc']; ?>"><?php echo $fila['Nombre'];}} ?> 
      
    </option>
      </select> 
      
   