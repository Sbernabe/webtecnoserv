<!DOCTYPE html>
<html lang="en">
<title>Galeria</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/css1.css" type="text/css">
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif;}
.w3-sidebar {
  z-index: 3;
  width: 250px;
  top: 43px;
  bottom: 0;
  height: inherit;
}
</style>

<body>

<div class="w3-top">
  <div class="w3-bar w3-theme w3-top w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-right w3-hide-large w3-hover-white w3-large w3-theme-l1" href="javascript:void(0)" onclick="w3_open()"><i class="fa fa-bars"></i></a>
    <a href="Home.php" class="w3-bar-item w3-button w3-theme-l1">Menu</a>
    <a href="Home.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Inicio</a>
    <a href="Home.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Los Panamericanos</a>
    <a href="Home.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Organizacion</a>
    <a href="a_uspiciadores.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Auspiciadores</a>
    <a href="Home.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white"> Vivo</a>
    <a href="Home.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white"> Voluntariado</a>
    <a href="Home.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white"> MarcoLegal</a>
    <a href="Home.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white"> MiPerfil</a>
    <a href="Home.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">CerrarSesion </a>
  
  </div>
</div>

<nav class="w3-sidebar w3-bar-block w3-collapse w3-large w3-theme-l5 w3-animate-left" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-right w3-xlarge w3-padding-large w3-hover-black w3-hide-large" title="Close Menu">
    <i class="fa fa-remove"></i>
  </a>
  <h4 class="w3-bar-item"><b>Menu</b></h4>
  <a class="w3-bar-item w3-button w3-hover-black" href="#">Galeria</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="#">Calendario</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="#">Entradas</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="#">Pagos</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="#">Resumen</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="#">Ranking</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="#">Hoja Infor</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="#">Historial</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="fotos.php">Reglamento</a>
</nav>

<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<div class="w3-main" style="margin-left:250px">

  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal">FOTOS</h1>
      <a>El derecho de autor es un conjunto de normas jurídicas que garantizan la propiedad intelectual tanto patrimonial como moral, que la legislación otorga al creador de una obra de
       cualquier tipo (sobre la misma o parte de ella), esté ya publicada o aún permanezca como inédita. </a>
                 
    </div>
    <div class="w3-third w3-container">
    <nav>
    <div clas="button2">
    
       <button class="button2" style="vertical-align:middle" href="foto.php"><span><a href="fotos.php">Ver Mas</a></span>
      </div> 
    </div>
  </div>

  <div class="w3-row">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal">VIDEOS</h1>
      <a>El derecho de autor es un conjunto de normas jurídicas que garantizan la propiedad intelectual tanto patrimonial como moral, que la legislación otorga al creador de una obra de
       cualquier tipo (sobre la misma o parte de ella), esté ya publicada o aún permanezca como inédita. </a>
       
    </div>
    <div class="w3-third w3-container">
    <div clas="button2">
                        <button class="button2" style="vertical-align:middle"><span><a href="videos.php">Ver Mas</a></span>
                  </div>
    </div>
  </div>

  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal">DOCUMENTOS</h1>
      <a>El derecho de autor es un conjunto de normas jurídicas que garantizan la propiedad intelectual tanto patrimonial como moral, que la legislación otorga al creador de una obra de
       cualquier tipo (sobre la misma o parte de ella), esté ya publicada o aún permanezca como inédita. </a>
    </div>
    <div class="w3-third w3-container">
    <div clas="button2">
                        <button class="button2" style="vertical-align:middle"><span><a href="documentos.php">Ver Mas</a> </span>
                  </div> 
    </div>
  </div>

  <!-- Pagination -->
  <div class="w3-center w3-padding-32">
    <div class="w3-bar">
      <a class="w3-button w3-black" href="#">1</a>
      <a class="w3-button w3-hover-black" href="#">2</a>
      <a class="w3-button w3-hover-black" href="#">3</a>
      <a class="w3-button w3-hover-black" href="#">4</a>
      <a class="w3-button w3-hover-black" href="#">5</a>
      <a class="w3-button w3-hover-black" href="#">»</a>
    </div>
  </div>


</div>

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
    overlayBg.style.display = "none";
  } else {
    mySidebar.style.display = 'block';
    overlayBg.style.display = "block";
  }
}

// Close the sidebar with the close button
function w3_close() {
  mySidebar.style.display = "none";
  overlayBg.style.display = "none";
}
</script>

</body>
</html>