<?php
require 'videos.php';
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
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"/>
<link rel="stylesheet" href="css/css.css" type="text/css">

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
        <h5 class="modal-title" id="exampleModalLabel">Fotos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="modal-row">
        <input type="hidden" required name="txtcodigo" value="<?php echo $txtcodigo;?>" placeholder="" id="txtcodigo" require="">
    

    <label for="">Nombre :</label>
    <input type="text" class="form-control" name="txtnombre" required value="<?php echo $txtnombre;?>"  placeholder="" id="txtnombre" require="">
    <br>
    
    <label for="">Foto:</label>
    <input type="file" accept=".mp4" name="txtvideo" value="<?php echo $txtvideo;?>"  placeholder="" id="txtvideo" require="">
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
            <th>Codigo</th>
            <th>Video</th>
            <th>Nombre</th>
            <th>Acciones</th>
            </tr>
        </thead>
        <?php foreach($listaEmpleados as $empleado){?>
        <tr>
            <td><?php echo $empleado['codigo']; ?> </td>
            <td>
            <video width="100" height="50" >
            <source type="video/mp4" src="../Video/<?php echo $empleado['video']; ?>"/>
            <source src="mov_bbb.ogg" type="video/ogg">
            </video>
            </td>

            


            <td><?php echo $empleado['nombre']; ?> </td>
            <td>
            <form action="" method="post">

            <input type="hidden" name="txtcodigo" value="<?php echo $empleado['codigo']; ?>">
            <input type="hidden" name="txtnombre" value="<?php echo $empleado['nombre']; ?>">
            <input type="hidden" name="txtvideo" value="<?php echo $empleado['video']; ?>">

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