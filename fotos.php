<!DOCTYPE html>
<html>
<title>Galeria</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="css/css1.css" type="text/css">
<body>

<div class="w3-container w3-teal">
<h1>FOTOS<a href="Galeria.php" class="home"> Home</a></h1>
</div>
<div class="principal">


<?php
        
        include 'conexion.php';
        $sql=  mysqli_query($con,"select * from foto");
        while($res=  mysqli_fetch_array($sql)){
            echo '<div class="vergaleria">';
            echo '<p>'.$res["nombre"].'</p>';
        ?>
            <img src="<?php echo $res["foto"];?>" width="100" heigth="100"><br>
        <?php
        
        echo '</div>';
        }
        
        ?>
    </div>
</body>
</html>