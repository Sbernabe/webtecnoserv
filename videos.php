<!--DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/css1.css" type="text/css">
</head>
<body>

<div class="header">
<h1>Atletismo<a href="Galeria.php" class="home"> Home</a></h1>
</div>

<div class="row">
  <div class="col-3 col-s-3 menu">
    <ul>
      <li>Atletismo</li>
      <li > <a class="home1" href="natacion.php">Natacion</a></li>
      <li > <a class="home1" href="video.php">Gimnasia</a></li>
      <li><a class="home1" href="futbol.php">Futbol</a></li>
    </ul>
  </div>

  <div class="col-6 col-s-9">
    <h1>Atletismo</h1>
    <p> El campeon de los 100m es aclamado como el hombre mas rapido del plantea, y Usain Bolt ostenta
         actualmente este titulo con un record mundial de 9.63 segundos!</p>
    <video width="400" controls>
      <source src="video/atletismo.mp4" type="video/mp4">
      <source src="mov_bbb.ogg" type="video/ogg">
      
    </video>
  </div>

  <div class="col-3 col-s-12">
    <div class="aside">
    <h2> Que?</h2>
      <p>El XVII Campeonato Mundial de Natacion se celebro en Budapest.</p>
      <h2>Donde?</h2>
      <p>El XVII Campeonato Mundial de Natacion se celebro en Budapest.</p>
      <h2>Como?</h2>
      <p>El XVII Campeonato Mundial de Natacion se celebro en Budapest.</p>
    </div>
  </div>
</div>


</body>
</html-->
<!DOCTYPE html>
<html>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="css/css1.css" type="text/css">
<title>Weplay-Lima2019</title>
<body>

<div class="w3-container w3-teal">
<h1>VIDEOS<a href="Galeria.php" class="home"> Home</a></h1>
</div>

<div class="row">

<?php
        
        include 'conexion.php';
        $sql=  mysqli_query($con,"select * from video");
        while($res=  mysqli_fetch_array($sql)){
            
            echo '<div class="row2">';
            echo '<p class="te">'.$res["nombre"].'</p>';
            echo '<video width="400" controls>';
            echo '<source src="'.$res["video"].'" type="video/mp4">';
            echo '<source src="mov_bbb.ogg" type="video/ogg">';
            echo '</video>';
            
            echo '</div>';
        }
            
        ?>
    
    </div>
</body>
</html>