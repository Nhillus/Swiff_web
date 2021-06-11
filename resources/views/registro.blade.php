<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Icons of materialize-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Registrieren</title>
</head>
<style>
    .navbar {
        background-color:#ffefd0
    }

    .contenedor_logo {
        padding-left: 20px;
    }

    .logo {
        color:#fd002e !important;
        font-size: 50px !important;
    }

    ul li a {
        padding:0px 50px;
        font-size: 21px;
        color: black;
        transform: scale(1.1, 1);
    }
    body {
        position: relative;
        background-color: #edf2f5;
    }
    .grid {
        height: fit-content;
        margin: 0 auto;
        max-width: 1200px;
        background-color: #fd002f;
        box-shadow: 0 1px 9px rgb(0 0 0 / 8%);
        position: relative;
        overflow: hidden;
    }
    .container_login {
        position: relative;
        top: 400px;
        background-color: #fd3957;
        margin: 0 auto;
        width: 35%;
        height: 450px;
    }
    .login_text {
        float: left;
    }
    .button_registrieren {
        float: right;
        background-color: #ff9997;
        border-radius: 10px; /* CSS3 */
        padding: 5px;
    }
    #container_password {
        padding:0px 40px;
    }
    #container_email {
        margin-bottom: 0px!important;
        padding:0px 40px;
    }
    .input-field input[type=email] {
        background-color: #ff9997;
        border-radius: 10px; /* CSS3 */
    }
    .input-field input[type=password] {
        background-color: #ff9997;
        border-radius: 10px; /* CSS3 */
    }
    .button_container {
       position:relative;
       bottom: 20px;
       text-align: right;
       margin-bottom: 0px!important;
       padding:0px 40px;
    }
    .button {
       color:black;
       background-color: #fffddd;
       width: 87%;
       border-radius: 10px;
   }
    .registrate {
       color: #fffddd;
       font-size: 11px;
   }
   ::placeholder { /* Most modern browsers support this now. */
        color:black;
   }
   .inputs {
        background-color: #ff9997;
        border-radius: 10px; /* CSS3 */
   }
   .footer {
        position: relative;
        height: 60px;
        background-color: black;
   }
   .footer_text {
        padding-top:10px;
        bottom: 500px;
        font-size: 26px;
   }
    textarea.materialize-textarea{
        height: 200px;
   }
   @media only screen and (max-width: 690px){ 
        .footer_text {
            font-size: 20px;
        }
    }
    @media only screen and (max-width: 580px){
        .footer_text {
            font-size: 16px;
        }
    }
</style>
<body>
    <div class="grid">
        <!--Navegador de Swiffleads -->
        <nav class="navbar " >
            <div class="nav-wrapper">
            <div class="contenedor_logo">
                <a href="#" class="logo brand-logo">Swiffleads</a>
            </div>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="sass.html">VERSICHERUNGSARTEN</a></li>
                <li><a href="badges.html">KOTENVERGLEICH</a></li>
                <li><a href="collapsible.html">KONTAKT</a></li>
            </ul>
            </div>
        </nav>
        <div id="container_email" class="row">
            <div class="inputs input-field col s12">
                <input placeholder="Email" id="Email" type="text" class="black-text validate">
                <label for="Email"></label>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m6 l6">
                <div id="container_email" class="row">
                    <div class="inputs input-field col s12">
                        <input placeholder="vorname" id="nombre" type="text" class="inputs black-text validate">
                        <label for="nombre"></label>
                    </div>
                </div>
                <div id="container_email" class="row">
                    <div class="inputs input-field col s12">
                        <input placeholder="Firma" id="empresa" type="text" class="inputs black-text validate">
                        <label for="empresa"></label>
                    </div>
                </div>
                <div id="container_email" class="row">
                    <div class="inputs input-field col s12">
                        <input placeholder="Strasse" id="Camino" type="text" class="inputs black-text validate">
                        <label for="Camino"></label>
                    </div>
                </div>
                <div id="container_email" class="row">
                    <div class="inputs input-field col s12">
                        <input placeholder="Postleitzahl" id="Código postal" type="text" class="inputs black-text validate">
                        <label for="Código postal"></label>
                    </div>
                </div>
                <div id="container_email" class="row">
                    <div class="inputs input-field col s12">
                        <input placeholder="Geburtstag" id="email" type="text" class="inputs black-text validate">
                        <label for="email"></label>
                    </div>
                </div>
            </div>
            <div class="col s12 m6 l6">
                <div id="container_email" class="row">
                    <div class="inputs input-field col s12">
                        <input placeholder="Nachname" id="nombre" type="text" class="inputs black-text validate">
                        <label for="nombre"></label>
                    </div>
                </div>
                <div id="container_email" class="row">
                    <div class="inputs input-field col s12">
                        <input placeholder="Position" id="empresa" type="text" class="inputs black-text validate">
                        <label for="empresa"></label>
                    </div>
                </div>
                <div id="container_email" class="row">
                    <div class="inputs input-field col s12">
                        <input placeholder="Postfach/Zusatz" id="Camino" type="text" class="inputs black-text validate">
                        <label for="Camino"></label>
                    </div>
                </div>
                <div id="container_email" class="row">
                    <div class="inputs input-field col s12">
                        <input placeholder="Ort" id="Código postal" type="text" class="inputs black-text validate">
                        <label for="Código postal"></label>
                    </div>
                </div>
                <div id="container_email" class="row">
                    <div class="inputs input-field col s12">
                        <input placeholder="Telefon" id="email" type="text" class="inputs black-text validate">
                        <label for="email"></label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12 m12 l12">
                    <div id="container_email" class="row">
                        <div class="inputs input-field col s12">
                            <input placeholder="Webseite" id="website" type="text" class="inputs black-text validate">
                            <label for="website"></label>
                        </div>
                    </div>
                </div>
            </div>
            <div id="container_email" class="row">
                <form class="col s12">
                    <div class="row">
                        <div class="inputs input-field col s12">
                            <textarea placeholder="lhre Nachricht" id="mensaje" class="materialize-textarea"></textarea>
                            <label for="mensaje"></label>
                        </div>
                    </div>
                </form>
            </div>
            <div id="container_email">
                <p>
                    <label>
                    <input type="checkbox" class="filled-in" checked="checked" />
                    <span class="black-text">Ich bestätige die AGB gelesen zu haben und stimme dieser zu.</span>
                    </label>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="button_container">
                <a class="waves-effect waves-light btn">REGISTRIEREN</a>
            </div>
        </div>
        <div class="footer">
            <p class="white-text center-align footer_text">© 2021   Swiffleads.ch All rigths reserved | Impressum | AGB</p>
        </div>  
    </div>
</body>
</html>