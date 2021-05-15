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
    <title>Home</title>
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
    .container {
        width: 80% !important;
    }
    .box-red {
        height: 430px;
        margin: 0px 25px;
        background-color: #fd002f;
    }
    .container_h2_text {
        position: relative;
        top:30px
    }
    .container_parafo_redbox {
        padding-top: 125px;
    }
    .box-pink {
        background-color: #fd3957;
        margin: 0px 25px;
        height: 430px;
    }

    .container_h2_login {
        padding:0px 40px;
    }

    .container_p_login {
        padding: 0px 40px;
    }

    #container_email {
        margin-bottom: 0px!important;
        padding:0px 40px;
    }
    .input-field input[type=email] {
        background-color: #ff9997;
        border-radius: 10px; /* CSS3 */
    }

    #container_password {
        padding:0px 40px;
    }

    .input-field input[type=password] {
        background-color: #ff9997;
        border-radius: 10px; /* CSS3 */
    }
    /* label color */
   .input-field label {
     color: #000;
   }
   /* label focus color */
   .input-field input[type=text]:focus + label {
     color: #000;
   }
   /* label underline focus color */
   .input-field input[type=text]:focus {
     border-bottom: 1px solid #000;
     box-shadow: 0 1px 0 0 #000;
   }
   /* valid color */
   .input-field input[type=text].valid {
     border-bottom: 1px solid #000;
     box-shadow: 0 1px 0 0 #000;
   }
   /* invalid color */
   .input-field input[type=text].invalid {
     border-bottom: 1px solid #000;
     box-shadow: 0 1px 0 0 #000;
   }
   /* icon prefix focus color */
   .input-field .prefix.active {
     color: #000;
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
   .contenedor_SwiffLAD {
       margin: 0px 35px;
       background-color: #ebdabe;
   }


</style>
<body>
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
    <div class="grid">
        <div class="row">
            <div class="col s12 m12 l12">
                <div class="container">
                    <h1 class="center-align">Steigern Sie mit Swiffleads Ihren Umsatz!</h1>
                </div>
            </div>
            <div class="col s12 m12 l12">
                <div class="container">
                    <p class="center-align">Wir bieten exklusive, hochwertige Kundentermine für alle Arten von Versicherungen. Nutzen auch Sie das potenzial der für Ihren Vertrieb oder Aussendienst und steigern Sie Ihre Verkaufszahlen! </p>
                </div>
            </div>
        </div>
        <!--Caja roja con texto de registro -->
        <div class="row">
            <div class="col s12 m8 l7">
                <div class="box-red">
                    <div class="container_h2_text">
                        <h2 class="white-text center-align">WAS IST EIN SWIFFLEAD?</h2>
                    </div>
                    <div class="container_parafo_redbox">
                        <h5 class="container white-text center-align"> Ein Swifflead ist die Kombination einer Online-Versicherungsanfrage und einem Telefonkontakt</h5>
                    </div>
                </div>
            </div>
            <!-- Caja rosada con formulario login -->
            <div class="col s12 m4 l5">
                <div class="box-pink">
                    <div class="container_h2_login">
                        <h2 class="left-align white-text">Login</h2>
                    </div>
                    <div class="container_p_login">
                        <p class="left-align white-text">Melden Sie sich mit Ihren Zugangsdaten beim Swiffelads an:</p>
                    </div>
                    <div class="row">
                        <form class="col s12 m12 l12">
                          <div id="container_email" class="row">
                            <div class="input-field col s12 m12 l12">
                              <input id="email" type="email" class="validate">
                              <label for="email">Benutzerma</label>
                              <span class="helper-text" data-error="wrong" data-success="right"></span>
                            </div>
                          </div>
                          <div id="container_password" class="row">
                            <div class="input-field col s12 m12 l12">
                              <input id="password" type="password" class="validate">
                              <label for="password">Password</label>
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
            </div>
        </div>
        <div class="contenedor_SwiffLAD row">
            <div class="col s12 m12 l12">
                <h1 class="center-align">WIE ENTSTEHT EN  SwiffLAD?</h1>
                <div class="col s3 m3 l3">

                </div>

                <div class="col s3 m3 l3">
                    
                </div>

                <div class="col s3 m3 l3">
                    
                </div>

                <div class="col s3 m3 l3">
                    
                </div>
            </div>
        </div>
    </div>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>