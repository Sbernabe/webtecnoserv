<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="css/foto.css" type="text/css">
    </head>

<body style='background-image:url(fondo/wallpaper.jpg);background-attachment:fixed;background-repeat:no-repeat;background-position:50% 50%;'>
    
        <form action="valida_documento.php" method="POST" enctype="multipart/form-data">
                <div class="from1">  
                <p class="texto">Nombre:</p><input class="label" type="text" name="txtnomb" value="">
            <p class="texto">archivo:</p><input class="subir" type="file" name="archivo" id="archivo" accept=".pdf">
            
            <input class="btnenviar"type="submit" name="enviar" value="Enviar">
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
        $sql = $con->query("CALL list_documento()");
        while($res=  mysqli_fetch_array($sql)){
            echo '<tr>'; 
            echo '<td><strong>';
            echo '<p>'.$res["id"].'</p>';
            echo '</strong></td>';

            echo '<td><strong>';
            echo '<p class="te">'.$res["nombre"].'</p>';
            echo '</strong></td>';
            
            echo '<td><strong>';
            echo '<embed src="'.$res["archivo"].' " width="300" height="100">';
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