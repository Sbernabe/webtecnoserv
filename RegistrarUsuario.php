<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Resgistrarse</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0,
          maximun-scale=1.0, minium-scale=1.0" />
    <link href="estilos/EstilosRegUsuario.css" rel="stylesheet" />
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>
<body>
    <div class="contenedor">
        <form action="" class="form">
            <div class="form-header">
                <h1 class="form-title">
                    <label>REGISTRARSE</label><br />
                </h1>
            </div>

            <label for="nombre" class="form-label">Nombres:</label>
            <input type="text" id="nombre" class="form-input" placeholder="Escriba sus Nombres" />

            <label for="apellido" class="form-label">Apellidos:</label>
            <input type="text" id="apellido" class="form-input" placeholder="Escriba sus Apellidos" />

            <label for="email" class="form-label">Email:</label>
            <input type="text" id="email" class="form-input" placeholder="Escriba su Email" />

            <label for="celular" class="form-label">Celular:</label>
            <input type="text" id="celular" class="form-input" placeholder="Escriba su numero de celular" />

            <label for="password" class="form-label">Password:</label>
            <input type="text" id="password" class="form-input" placeholder="Escriba su Password" />

            <label for="pass" class="form-label">Password:</label>
            <input type="text" id="pass" class="form-input" placeholder="Confirme su Password" />

            <div class="checkbox">
                <h3>Seleciona tus categorias de interes:</h3>
                <input type="checkbox" id="cbox1" /><label for="cbox1">Futbol</label>
                <input type="checkbox" id="cbox2" /><label for="cbox2">Basquet</label>
                <input type="checkbox" id="cbox3" /><label for="cbox3">Voley</label>
                <input type="checkbox" id="cbox4" /><label for="cbox4">Golf</label>
                <input type="checkbox" id="cbox5" /><label for="cbox5">Remo</label>
                <input type="checkbox" id="cbox6" /><label for="cbox6">Natacion</label>
            </div>

            <div class="g-recaptcha" data-sitekey="6LdadKAUAAAAAGjRDGec5Y_rwkHOlxwFUKwCbihV"></div>

            <div class="btns">
                <input type="submit" class="btn-submit" value="Aceptar" />
                <input type="submit" class="btn-submit2" value="Cancelar" />
            </div>


        </form>

    </div>




</body>
</html>