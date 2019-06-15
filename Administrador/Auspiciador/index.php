<?php
require 'auspiciador.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registroimagenes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>

</head>
<body>
<br>
<br>
    <div class="container">
    <form action="" method="post" enctype="multipart/form-data">
    <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Empleados</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="modal-row">
        <input type="hidden" required name="txtID" value="<?php echo $txtID;?>" placeholder="" id="txtID" require="">
    

    <label for="">Nombre (S):</label>
    <input type="text" class="form-control" name="txtNombre" required value="<?php echo $txtNombre;?>"  placeholder="" id="txtNombre" require="">
    <br>

    <label for="">Descripcion :</label>
    <input type="text" class="form-control" name="txtdescripcion" required value="<?php echo $txtdescripcion;?>"  placeholder="" id="txtdescripcion" require="">
    <br>

    
    <label for="">Foto:</label>
    <input type="file" accept="image/*" name="txtFoto" value="<?php echo $txtFoto;?>"  placeholder="" id="txtFoto" require="">
    <br>
        </div>
      </div>
      <div class="modal-footer">
      <button value="btnAgregar" <?php echo $accionAgregar; ?> class="btn btn-success" type="submit" name="accion">Agregar</button>
      <button value="btnModificar" <?php echo $accionModificar; ?>  class="btn btn-warning" type="submit" name="accion">Modificar</button>
      <button value="btnEliminar" <?php echo $accionEliminar; ?>  class="btn btn-danger" type="submit" name="accion">Eliminar</button>
      <button value="btnCancelar" <?php echo $accionCancelar; ?>  class="btn btn-primary" type="submit" name="accion">Cancelar</button>
      </div>
    </div>
  </div>
</div>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Agregar registro +
</button>

    

    </form>
    <br>
    <br>

    <div class="row">
    <table class="table table-hover table-bordered">
        <thead class="thead-dark">
            <tr>
            <th>Foto</th>
            <th>Auspiciador</th>
            <th>Descripcion</th>
            <th>Acciones</th>
            </tr>
        </thead>
        <?php foreach($listaEmpleados as $empleado){?>
        <tr>
            <td><img class="img-thumbnail" width="100px" src="../Auspiciado/<?php echo $empleado['Foto']; ?>"/> </td>
            <td><?php echo $empleado['Nombre']; ?> </td>
            <td><?php echo $empleado['descripcion']; ?></td>


            <td>
            <form action="" method="post">

            <input type="hidden" name="txtID" value="<?php echo $empleado['ID']; ?>">
            <input type="hidden" name="txtNombre" value="<?php echo $empleado['Nombre']; ?>">
            <input type="hidden" name="txtdescripcion" value="<?php echo $empleado['descripcion']; ?>">
            <input type="hidden" name="txtFoto" value="<?php echo $empleado['Foto']; ?>">

            <input type="submit" value="Seleccionar" class="btn btn-info"name="accion">
            <button value="btnEliminar" type="submit" class="btn btn-danger" name="accion">Eliminar</button>
            </form>
            
            </td>
        </tr>
        
        <?php } ?>


    </table>
    
    </div>

    <?php if($mostrarModal){?>
    
    <script>
    $('#exampleModal').modal('show');
</script>

  <?php }?>

    
    </div>
</body>
</html>