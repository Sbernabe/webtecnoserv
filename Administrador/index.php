<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link href="EstilosHome.css" rel="stylesheet" />
    <link href="style.css" rel="stylesheet" />

    <link rel="icon" type="" href="../img/icon_inicio.png"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Weplay-Lima2019</title>
</head>
<body>


    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="Galeria.php">Home</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="Home.php">Inicio</a></li>
                <li><a href="Fotos/index.php">Registrar Imagenes</a></li>
                <li><a href="videos/index.php">Registrar Videos</a></li>
                <li><a href="sistema/empleados/index.php">Participantes</a></li>
                <li><a href="master/index.php">Disciplinas</a></li>
                <li><a href="#">Vivo</a></li>
                <li><a href="#">Voluntariado</a></li>
                <li><a href="#">Marco legal</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="icon-user"></span>Mi Perfil</a></li>
                <li><a></a></li>
                <li><a href="index.php"><span class="icon-exit"></span>Cerrar Sesion</a></li>
            </ul>
        </div>
    </nav>
    <!--<nav>
        <ul>
            <li><a href="Home.html">Inicio</a></li>
            <li><a href="#news">Los Panamericanos</a></li>
            <li><a href="#contact">Organización</a></li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Organización<span class="caret"></span></a>

                <ul class="dropdown-menu">
                    <li><a href="ComiteOrganizador.html">Comite Organizador</a></li>
                    <li><a href="ceremonia.html">Ceremonias</a></li>
                </ul>

            <li><a href="Auspiciadores.html">Auspiciadores</a></li>
            <li><a href="Institucional.html">Institucional</a></li>
            <li><a href="#about">Vivo</a></li>
            <li><a href="#about">Voluntariado</a></li>
            <div class="menRight">
                <li><a href="#"><span class="icon-user"></span>Mi Perfil</a></li>
                <li><a></a></li>
                <li><a href="#"><span class="icon-exit"></span>Cerrar Sesion</a></li>
            </div>
        </ul>
    </nav>-->



    <div class="sliderC">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="img/slider/2.jpg" />
                </div>
                <div class="item">
                    <img src="img/slider/3.jpg" />
                </div>
                <div class="item">
                    <img src="img/slider/4.jpg" />
                </div>
                <div class="item">
                    <img src="img/slider/5.jpg" />
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</body>
</html>