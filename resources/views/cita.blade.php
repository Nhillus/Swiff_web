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
    <title>Cita</title>
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
        background-color: #edf2f5;
    }
    .grid {
        margin: 0 auto;
        max-width: 1200px;
        background-color:white; 
        box-shadow: 0 1px 9px rgb(0 0 0 / 8%);
        height: 1650px;
    }
    .container {
        width: 80% !important;
    }
    .box-red {
        height: 580px;
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
        height: 540px;
        padding-top: 40px;
    }
    .box-pink-citas {
        background-color: #fd3957;
        height: 400px;
        padding-top: 40px;
    }

    .img_compartir {
        width:350px
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

    ::placeholder { /* Most modern browsers support this now. */
        color:black;
    }
    .input-field input[type=text] {
        background-color: #ff9997;
        border-radius: 10px; /* CSS3 */
        margin-top: 10px !important;
        margin-bottom: 0px !important;
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
   .button_compare_register {

   }
   .button_compare {
       color:#fffcdc;
       background-color: #9065b8;
       width: 90%;
       border-radius: 10px;
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
       position: relative;
       top: 30px;
       height: 550px;
       margin: 0px 35px;
       background-color: #ebdabe;
   }
   .container_item_SwiffLAD {
       height: 370px;
       border-right: 3px solid grey;
   }

   .img_container {
       text-align: center;
   }
   .text_container {
       text-align:left;
   }

   #Familia {
       width: 500px;
       height: 200px;
   }

   #Celebracion {
       width: 500px;
       height: 200px;
   }

   #Amigas {
       width: 500px;
       height: 200px;
   }

   #Familia2 {
       width: 500px;
       height: 200px;
   }
   #perfil {
       width: 300px;
       height: 150px;
   }

   #lupa {
       width: 200px;
       height: 150px;
   }

   #consola {
       position: relative;
       right: 20px;
       width: 300px;
       height: 150px;
   }
   #calendario {
       position: relative;
       right: 20px;
       width: 200px;
       height: 150px;
   }

   .box-red-large {
        height: 460px;
        margin: 0px 25px;
        background-color: #fd002f;
    }

    .box_red_large_text{
        padding-top: 15px;
    }

    .container_icon_beneficios {
        margin-right: 10px;
        margin-top: 3px;
        float: left;
        position: relative;
        bottom: 15px;
        color:white;
    }
    .container_text_beneficios {
       display: flex;
    }
    .linea_blanca {
        border-bottom: 2px solid grey;
        width: 90%;
    }
    .button_container_registro {
        height: 50px;
    }

    .button_registro {
       color:#fffddd;
       background-color: black ;
       width: 90%;
       border-radius: 10px;
    }
    .button_registro_ventajas {
       color:black;
       background-color:#fffddd ;
       width: 50%;
       border-radius: 10px;
       position: relative;
       bottom: 10px;
    }

    .box_white_container_support {
        border: 1px solid black;
        border-radius: 10px;
        background-color: aliceblue;
        display: flex;
        float: left;
        height: 50px;
        width: 100px;

    }
    .container_whatsappbutton {
        width: 50px;
        height: 50px;
    }
    .container_tipo_seguros {
        margin: 0px 35px;
    }
    .container_icon_tipo_seguros {
        margin-right: 10px;
        margin-top: 3px;
        float: left;
        position: relative;
        bottom: 15px;
        color: #fd002e;
    }
    .container_tipo_seguros {

    }

    .linea_gris {
        border-bottom: 2px solid grey;
    }
    .suiza_map {
        width: 550px;
        height: 500px;
    }

    .box_ligth_pink {
        position:relative;
        bottom: 25px;
        margin: 0px 25px;
        height: 680px;
        background-color: #fcebce
    }

    .asesoriamiento_text {
        padding-top: 20px;
    }

    .linea_punteada {
        border-bottom: 3px solid black;
        border-style:dashed;
    }
    .container_ahorro {
        margin: 70px 0px 50px 0px;
    }
    .ahorro_text {
        color: #ec0019;
    }

    .button_precios {
       color:white;
       background-color: #fe4847;
       width: 20%;
       border-radius: 10px;
       height: 60px;
    }

    .container_button_precios_text {
        font-size: 18px;
        padding-top:15px;
    }

    .contenedor_servicios {
        margin:0px 25px;
    }

    .box-red-servicios {
        background-color: #fc001a;
        padding:0px 25px;
        height: 265px;

    }
    .container_servicios_adicionales {

    }

    .container_img_perfil_teclado {

    }
    .img_perfil_teclado {
        width: 180px;
        height: 180px;
    }
    .box-blue-servicios {
        background-color: #56a0dd;
        padding:0px 25px;
        height: 265px;
    }
    .button_registro2 {
       color:black;
       background-color:#fffddd;
       width: 90%;
       border-radius: 10px;
    }
    .box_red_blood {
        margin-top: 20px;
        background-color: #97001f;
        margin : 20px 25px 0px 25px;
        height: 920px;
    }

    .small_box_blue {
        background-color: #5d69c9;
        margin: 0px 12px 0px 10px;;
        
    }
    .small_box_pink {
        background-color: #fd3957;
        margin: 0px 10px;
        height: 250px;
    }
    .containers_container_pink {
        position: relative;
        bottom: 35px;
    }
    .container_pink_up {
        
    }
    .container_pink_down {
    
 
    }
    .box_blue_ligth {
        background-color: #80d0cd;
    }
    .box_grey_ligth {
        background-color: #ebdabe;
        padding-bottom: 25px;
    }
    .img_incorrecto {
        width: 40px;
        height: 40px;
        margin-right: 10px;
        margin-top: 3px;
        float: left;
        position: relative;
        bottom: 10px;
    }
    .img_correcto {
        width: 40px;
        height: 40px;
        margin-right: 10px;
        margin-top: 3px;
        float: left;
        position: relative;
        bottom: 10px;
    }
    .container_large {
        width: 85%;
        margin-right: 20px;
        margin-left: 20px;
        margin-bottom: 45px;
    }
    .box_pink_large {
        background-color: #fd3957;
        margin : 0px 25px 0px 25px;
    }
    .small_box_pink_klassiche_lead {
        background-color: #fd3957;
        margin: 0px 10px;
        height: 385px;
    }
    .small_box_white {
        position: relative;
        bottom: 40px;
        background-color: white;
        width: 100%;
    }
    .tachado {
        text-decoration:line-through;
        font-size: 16px;
    }
    .flotar_derecha {
        display: flex;
        float: right;
        position: relative;
        padding-left: 5px;
        top: 10px;
    }
     .small_box_pink_paket {
        background-color: #fd3957;
        position:relative;
        bottom: 28px;
    }
    .container_large_paket {
        width: 85%;
        margin-right: 20px;
        margin-left: 20px;
    }
    .linea_gris_paket {
        border-bottom: 2px solid grey;
    }
    .containers_large_paket {
        position: relative;
        bottom: 40px;
    }
    .container_large_paket_text {
        display: flex;
    }

    .iva {
        position: relative;
        right: 90px;
    }
    .footer {
        height: 60px;
        background-color: black;
    }
    .footer_text {
        padding-top:10px;
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
        <div class="row">
            <h3 class="center-align">Persönliche oder digitale Beratung</h3>
        </div>
        <div class="row">
            <div class="col s12 m8 l8">
                <img class="responsive-img" src="/img/citas.png" > 
                <h5>Wir helfen Ihnen die Krankenkasse zu wechseln</h5>
                <p>Wer kennt es nicht? Lästige ungewünschte Telefonanrufe, aufdringliche Berater oder stundenlange 
                    Recherchen auf Webseiten der Krankenkassen.
                </p>
                <p>
                    Wenn Sie genau wissen mochten, welche Krakenkasse oder Zusatzversicherung lhren Bedurfnissen 
                    entspricht, sind Sie bei uns genau richtig. Unsere Experten sind Cicero zerifiziert (klicken Sie hier fur mehr Informationen) un helfen 
                    lhnen das beste Angebot zu finden.
                </p>
                <p>
                    Ruckruf von Montag 08:00 bis 20:00 Uhr bis Samstag 09:00 bis 16:00 Uhr. Teilen Sie uns lhre 
                    kotaktdaten mit und wir werden uns umgehend bei lhnen melden.
                </p>
                <p>
                    Wieso soll ich mich beraten lassen? - Viele unserer Interssenten wunschen 
                    eine Beratung, im die individuellen Leistugen und Services der Krakenkasse zu 
                    verstegen und die richtigen Produkte abzurchliessen.
                </p>
                <div class="col s12 m12 l12">
                    <div class="box-pink-citas">
                        <div class="container_h2_login"><!-- -->
                            <h4 class="left-align white-text">Krakenkassenprämien 2021 vergleichen</h2>
                        </div>
                        <div class="row">
                            <div class="col s12 m12 l12">
                                <div class="left-align container">
                                    <div class="container_large left-align ">
                                        <img class="img_correcto" src="/img/correcto-icon.png" alt="">
                                        <h5 class="white-text">Prämien BAG 2021 vergleichen</h5> 
                                    </div>
                                </div>
                                <div class="left-align container">
                                    <div class="container_large left-align ">
                                        <img class="img_correcto" src="/img/correcto-icon.png" alt="">
                                        <h5 class="white-text">Unverbindlich Top-Offerte einholen</h5> 
                                    </div>
                                </div>
                                <div class="left-align container">
                                    <div class="container_large left-align ">
                                        <img class="img_correcto" src="/img/correcto-icon.png" alt="">
                                        <h5 class="white-text">Bis 4`000 Franken pro Jahr sparen</h5> 
                                    </div>
                                </div>
                                <div class="left-align container">
                                    <div class="container_large left-align ">
                                        <img class="img_correcto" src="/img/correcto-icon.png" alt="">
                                        <h5 class="white-text">Optimieren und Geld sparen</h5> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="text_cita">
                            <p> Welche Vorteile bringt mir eine solche Beratung? - Es gibt viele 
                                Vorteile bei einer personlichen Beratung, Nebst der Grundversicherung, Hier
                                zahlen nebst den finanziellen Theme vor allem auch die Leistungen im 
                                Hintergrund zu den wichtigen Entscheidungen.
                            </p>
                            <p> 
                                Warum soil ich mich beraten lassen? - Jeder hat das Recht auf eine individuelle, 
                                auf sich abgestimmte Krakenkassenversicherung, Nur mit einer personlich abgestim
                                mten Versicherung profitieren Sie von Leistungen sowie Kosten und sind korrekt versichert.
                            </p>
                            <p>   
                                Wer Soli am Beratungsterminen dabei seins? - Wir empfehlen lhnen, dass alle Familienangehorige
                                dabei sind Nicht nir wegen den Familienrabatten und Konditionen, sondern auch um ein Gesamtpaket 
                                Auszuarbeiten, welches fur die ganze Familie zugeschnitten ist.
                            </p>    
                                Wie kann ich einen Termin vereinbaren und wie lange dauert dieser? - Unsere Erfahrungen zeigen, das jeweils 30-60
                                Minuten gerechnet werden sollte. In dieser Zeit wird eine IST-Analyse gemacht und danach die
                                verschiedenen Angebote und Moglichkeiten vorgestellt und verglichen.
                            <p>    
                                Einen Termin vereinbaren Sie ganz einfach mit dem Formular oben. Sobald wir lhre Kontaktdaten haben,
                                melden wir uns unverzuglich bei lhnen.
                            </p>
                        </div>
                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="box_ligth_pink">
                    <div class="container_h2_login">
                        <h4 class="asesoriamiento_text center-align black-text">Krankenkassen-Beratung</h4>
                    </div>
                    <div class="linea_gris"></div>
                    <div class="container_p_login">
                        <h5 class="left-align black-text">Sie haben Fragen zu lher Versicherung oder möchten mehr einsparen?</h5>
                    </div>
                    <div class="row">
                        <div class="container_p_login">
                            <h5 class="left-align black-text">Hier können Sie die Krankenkasse ganz einfach wechsein oder vergleichen</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="container_p_login">
                            <h5 class="left-align black-text">Jetzt von Einzel- und Familienrabatt profitieren</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="container_p_login">
                            <h5 class="left-align black-text">Schreiben Sie uns und Sie erhalten eine Rückmeldung am selben Tag</h5>
                        </div>
                    </div>
                    <div class="linea_punteada"></div>
                </div>
            </div>
        </div>
        <div class="footer">
            <p class="white-text center-align footer_text">© 2021   Swiffleads.ch All rigths reserved | Impressum | AGB</p>
        </div>
    </div>
</body>
</html>