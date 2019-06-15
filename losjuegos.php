<!doctype html>
<html >
<head>
    <link href="EstilosLosJuegos.css" rel="stylesheet" />
    <link rel="icon" type="" href="../img/icon_inicio.png" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title></title>

    <meta http-equiv="content-type" content="text/html;charset=UTF-8">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript">
        $(document).ready(inicio)
        function inicio() {
            $("select").change(cambiacss)
        }
        function cambiacss() {
            var plantilla = $("select").attr("value");
            $("plantilla").html('<link rel="stylesheet" href="css/' + plantilla + '.css" type="text/css">')
        }
    </script>
    <link rel="stylesheet" href="css/css.css" type="text/css">

</head>
<body>
    <!--inicio de menu-->
   
        
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Weplay</a>
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
                <li><a href="#"><span class="icon-exit"></span>Cerrar Sesion</a></li>
            </ul>
        </div>
    </nav>

    <!--fin de menu-->

    <div id="titulo">
        <h1> LOS JUEGOS LIMA 2019 </h1>
    </div>
    <div id="contenedor">
        <header></header>
        <section>
            <div id="contieneformulario">
                <p>
                    Los Juegos Panamericanos son el mayor evento deportivo internacional multidisciplinario en el que participan atletas de América. La competición se celebra entre deportistas de los países del continente americano, cada cuatro
                    años en el año anterior a los Juegos Olímpicos de Verano.
                </p>
            </div>

        </section>
        <br />
        <br />

        <section> <div class="logo1" id="logo1"></div></section>
        <br />
        <br />
        <section>
            <button class="button button1">Dato1</button>
            <button class="button button2">Dato2</button>
            <button class="button button3">Dato3</button>
            <button class="button button4">Dato4</button>
            <button class="button button5">Dato5</button>
        </section>

        <br />
        <br />
        <div style="clear:both;"></div>
        <footer>
            <h6>(c)2019 Juegos Panamericanos</h6>
        </footer>
    </div>
</body>
</html>