<!doctype html>
<html >
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript">
      $(document).ready(inicio)
       function inicio() {
        $("select").change(cambiacss)
        }
        function cambiacss(){
            var plantilla=$("select").attr("value");
        $("plantilla").html('<link rel="stylesheet" href="css/'+plantilla+'.css" type="text/css">')
     }
</script>
<link rel="stylesheet" href="css/css.css" type="text/css">

</head>
<body>
        <div id="titulo">
                <h1> EL COMITE ORGANIZADOR </h1>
                </div>
    <div id="contenedor">
        <header>
            
        </header>
        <section>
            <div id="contieneformulario">
           <p> Acto o serie de actos públicos y formales de acuerdo con 
               reglas o ritos fijados por la ley o por la costumbre.ewe
            fefefefef fefeerer rererere rererere rererer rerer erererer 
        rerererer wrer ere  re rererreerre</p>
            </div>

        </section>
        <br/>
        <br/>
        <section>
        <div class="gallery">
            <div class="im1"></div>
                  <img class="img1" id="img1" width="600" height="400">
                  <div clas="button2">
                        <button class="button2" style="vertical-align:middle"><span>CARGO </span>
                  </div>  </div>
                
              <div class="gallery">
                    <div class="im2"></div>
                    <img class="img1" id="img1" width="600" height="400">
                    <div clas="button2">
                            <button class="button2" style="vertical-align:middle"><span>CARGO </span>
                      </div> 
                  </div>
              
              <div class="gallery">
                    <div class="im3"></div>
                    <img class="img1" id="img1" width="600" height="400">
                    <div clas="button2">
                            <button class="button2" style="vertical-align:middle"><span>CARGO</span>
                      </div> 
                  </div>
              
              <div class="gallery">
                    <div class="im4"></div>
                    <img class="img1" id="img1" width="600" height="400">
                    <div clas="button2">
                            <button class="button2" style="vertical-align:middle"><span>CARGO</span>
                      </div> 
                  </div>
                </section>
        <div style="clear:both;"></div>
        <br/>
      
        <footer>
            <h6>(c)2019 Juegos Panamericanos</h6>
        </footer>
    </div>
</body>
</html>