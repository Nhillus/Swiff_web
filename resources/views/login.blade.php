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
    <title>Document</title>
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
        height: 1200px;
        margin: 0 auto;
        max-width: 1200px;
        background-color: #fd002f;
        box-shadow: 0 1px 9px rgb(0 0 0 / 8%);
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

    #container_email {
        margin-bottom: 0px!important;
        padding:0px 40px;
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
   .footer {
        position: relative;
        top: 600px;
        height: 60px;
        background-color: black;
    }
   .footer_text {
        padding-top:10px;
        bottom: 500px;
        font-size: 26px;
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
        <div class="container_login center-align">
            <div class="row">
                <div class="row">
                    <div class="container">
                        <h5 class="white-text left-align login_text">Login</h5>
                        <h5 class="right-align button_registrieren">Regiestrieren</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="container">
                        <p class="white-text left-align">Melden Sie sich mit lhren Zugangsdaten beim Swiffleads an:</p>
                    </div>
                </div>
                <form class="col s12 m12 l12">
                <div id="container_email" class="row">
                    <div class="input-field col s12">
                        <input placeholder="Benutzerma" id="email" type="email" class="black-text validate">
                        <label for="email"></label>
                    </div>
                </div>
                <div id="container_password" class="row">
                    <div class="input-field col s12">
                        <input placeholder="Password" id="password" type="password" class="black-text validate">
                        <label for="password"></label>
                    </div>
                </div>
                <div class="col s12">
                    <div class="center-align button_container">
                        <a class="button waves-effect waves-light btn">Login</a>
                        <p class="registrate">password vergessen? | Regiestrieren</p>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <div class="footer">
            <p class="white-text center-align footer_text">© 2021   Swiffleads.ch All rigths reserved | Impressum | AGB</p>
        </div>  
    </div>

    
</body>
</html>