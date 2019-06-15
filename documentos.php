<!DOCTYPE html>
<html>
<title>Videos</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="css/css1.css" type="text/css">
<body>

<div class="w3-container w3-teal">
<h1>DOCUMENTOS<a href="Galeria.php" class="home"> Home</a></h1>
</div>

<div class="row">

<?php
        
        include 'conexion.php';
        $sql=  mysqli_query($con,"select * from documentos");
        while($res=  mysqli_fetch_array($sql)){
            
            echo '<div class="row2">';
            echo '<p class="te">'.$res["nombre"].'</p>';
            echo '<embed src="'.$res["archivo"].' " width="410" height="350">';
            echo '</div>';
           
        }

        
            
        ?>
    
    </div>
</body>
</html>