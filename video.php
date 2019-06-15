
<html>
    <head>
    <title>Weplay-Lima2019</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    
    <link rel="stylesheet" href="css/foto.css" type="text/css">
<body style='background-image:url(fondo/wallpaper.jpg);background-attachment:fixed;background-repeat:no-repeat;background-position:50% 50%;'>
     
    
    
        <form action="valida_video.php" method="POST" enctype="multipart/form-data">
        <div class="from1">
                <p class="texto">Nombre:</p> <input class="label" type="text" name="txtnomb" value="">
            <p class="texto" >video:</p><input class="subir" type="file" name="video" id="video" accept=".mp4">
            <br>
            <br>
            <input class="btnenviar" type="submit" name="enviar" value="Enviar">
            <input class="btncancelar" type="submit" name="Cancelar" value="Cancelar">
            </div>
        </form>   
        
        
        <br><br>
      
<center>

<?php
          echo '<table id="customers">';
          echo '<tr class="ti">';
          
          echo '<td>Id<strong>';
          echo '<td>nombre<strong>';
          echo '<td>Imagen<strong>';
          echo '<td>Editar<strong>';
          echo '<td>Eliminar<strong>';
          echo '</tr>';
        include 'conexion.php';
        $sql = $con->query("CALL list_video()");
        while($res=  mysqli_fetch_array($sql)){
            echo '<tr>'; 
            echo '<td><strong>';
            echo '<p>'.$res["codigo"].'</p>';
            echo '</strong></td>';

            echo '<td><strong>';
            echo '<p>'.$res["nombre"].'</p>';
            echo '</strong></td>';

            echo '<td><strong>';
            echo '<video width="400" controls>';
            echo '<source src="'.$res["video"].'" type="video/mp4">';
            echo '<source src="mov_bbb.ogg" type="video/ogg">';
            echo '</video>';
            echo '</strong></td>';
            
            echo '<td style="text-align: center;">';
            echo '<span class="button"'; 
            echo '</span> Editar </span>';
    
            echo '<td style="text-align: center;">';
            echo '<span class="button1 "'; 
            echo '</span> Eliminar</span>';
       
            echo '</strong></td>';
            
            echo '</tr>';
        }
        echo '<td><strong>';
        echo '<td><strong>';
        echo '</table>';
        ?>
        </center>
    </body>
</html>
