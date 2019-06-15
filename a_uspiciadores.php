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
    <link rel="stylesheet" href="css/css3.css" type="text/css">
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
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Los Panamericanos<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="losjuegos.php">Los Juegos</a></li>
                    </ul>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Organización<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="ComiteOrganizador.php">Comite Organizador</a></li>
                        <li><a href="ceremonia.html">Ceremonias</a></li>

                    </ul>
                </li>
                <li><a href="Auspiciadores.php">Auspiciadores</a></li>
                <li><a href="Institucional.php">Institucional</a></li>
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

    <div class="principal">


<?php
        
        include 'conexion.php';
        $sql=  mysqli_query($con,"select * from auspiciador");
        while($res=  mysqli_fetch_array($sql)){
            echo '<div class="vergaleria">';
            echo '<p class="nomb">'.$res["nombre"].'</p>';
        ?>
            <img class="imagen" src="<?php echo $res["foto"];?>" width="100" heigth="100"><br>
        <?php
        echo '<p class="des">'.$res["descripcion"].'</p>';
        echo '</div>';
        }
        
        ?>
    </div>
</body>
</html>