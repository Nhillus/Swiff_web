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
    body {
        background-color: #edf2f5;
    }
    .grid {
        margin: 0 auto;
        max-width: 1200px;
        background-color:white; 
        box-shadow: 0 1px 9px rgb(0 0 0 / 8%);
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
        top:12px;
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
        <div class="home1">
            <div class="row">
                <div class="col s12 m12 l12">
                    <div class="container">
                        <h1 class="center-align">Krakenkassen-Vergleich</h1>
                        <h5>Krakenkassenvergleich & kompetente Beratung vom Portal für unabhängige Versicherungsleistugen</h5>
                    </div>
                </div>
                <div class="col s12 m12 l12">
                    <div class="container">
                        <p class="center-align">Die Wahl der richtigen Krankenkasse in der Schwiez gilt als eine der wichtigsten Aufgaben, da zahllose Faktoren im Hinblick auf das bestmögliche individuelle Angebot berücksichtigt werden müssen. Ob Arcosana AG, Auxilia, Agrisano, Intras, Sodalis, Sangate oder  Groupe Mutuel - ein Krankenkassenvergleich aller Leistungspakete sowie der finanziellen montalichen belastungen, die auf den  Versicherten zukommen werder, gilt als grungdlegend elementar für die Suche nach der richtigen Krankenkassen </p>
                    </div>
                </div>
            </div>
            <!--Caja roja con texto de registro -->
            <div class="row">
                <div class="col s12 m8 l7">
                    <div class="box-red">
                        <div class="col s12 m6 l6">
                            <div id="container_email" class="row">
                                <div class="input-field col s12">
                                    <input placeholder="Bereits versichert?" id="asegurado_pregunta" type="text" class="black-text validate">
                                    <label for="asegurado_pregunta"></label>
                                </div>
                            </div>
                            <div id="container_email" class="row">
                                <div class="input-field col s12">
                                    <input placeholder="unfallversicherung" id="Seguro_accidente" type="text" class="black-text validate">
                                    <label for="Seguro_accidente"></label>
                                </div>
                            </div>
                            <div id="container_email" class="row">
                                <div class="input-field col s12">
                                    <input placeholder="Vorname" id="nombre" type="text" class="black-text validate">
                                    <label for="nombre"></label>
                                </div>
                            </div>
                            <div id="container_email" class="row">
                                <div class="input-field col s12">
                                    <input placeholder="Geburtsdatum" id="nacimiento" type="text" class="black-text validate">
                                    <label for="nacimiento"></label>
                                </div>
                            </div>
                            <div id="container_email" class="row">
                                <div class="input-field col s12">
                                    <input placeholder="Kanton Wählen" id="elija_canton" type="text" class="black-text validate">
                                    <label for="elija_canton"></label>
                                </div>
                            </div>
                            <div id="container_email" class="row">
                                <div class="input-field col s12">
                                    <input placeholder="Benutzerma" id="email" type="text" class="black-text validate">
                                    <label for="email"></label>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m6 l6">
                            <div id="container_email" class="row">
                                <div class="input-field col s12">
                                    <input placeholder="Anzahl Personen" id="Numero_personas" type="text" class="black-text validate">
                                    <label for="Numero_personas"></label>
                                </div>
                            </div>
                            <div id="container_email" class="row">
                                <div class="input-field col s12">
                                    <input placeholder="Zusatzversicherung?" id="Seguro_coplementario" type="text" class="black-text validate">
                                    <label for="Seguro_coplementario"></label>
                                </div>
                            </div>
                            <div id="container_email" class="row">
                                <div class="input-field col s12">
                                    <input placeholder="Nachname" id="Apellido" type="text" class="black-text validate">
                                    <label for="Apellido"></label>
                                </div>
                            </div>
                            <div id="container_email" class="row">
                                <div class="input-field col s12">
                                    <input placeholder="Aktuelle Kasse Wählen" id="selecionar_pago_actual" type="text" class="black-text validate">
                                    <label for="selecionar_pago_actual"></label>
                                </div>
                            </div>
                            <div id="container_email" class="row">
                                <div class="input-field col s12">
                                    <input placeholder="Postleitzahi (PLZ)" id="codigo_postal" type="text" class="black-text validate">
                                    <label for="codigo_postal"></label>
                                </div>
                            </div>
                            <div id="container_email" class="row">
                                <div class="input-field col s12">
                                    <input placeholder="Telefon" id="Telefono" type="text" class="black-text validate">
                                    <label for="Telefono"></label>
                                </div>
                            </div>
                        </div>
                        <div class="col s12">
                            <div class="center-align button_container_register">
                                <a class="button_compare waves-effect waves-light btn">Vergleichen sie Jetzt</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Caja rosada con formulario login -->
                <div class="col s12 m4 l5">
                    <div class="box-pink">
                        <div class="container_h2_login"><!-- -->
                            <h4 class="left-align white-text">Krakenkassenprämien 2021</h2>
                        </div>
                        <div class="container_p_login">
                            <p class="left-align white-text">Prämie ab 179CHF pro Monat Erwachsene kinderprämie ab 60 CHF pro Monat Familienrabatt bis zu CHF 4`000 im Jahr!</p>
                        </div>
                        <div class="row">
                            <div class="col s12 m12 l12">
                                <div class="center-align container">
                                   <img class="img_compartir" src="/img/compartir.png" alt="" sizes="" srcset="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contenedor_SwiffLAD row">
                <div class="col s12 m12 l12">
                    <h1 class=" center-align">Krankenkassenvergleich</h1>
                    <div class="container_item_SwiffLAD col s3 m3 l3">
                        <div class="img_container">
                            <img id="Familia" class="center-align responsive-img" src="/img/Familia.png" alt=""> 
                        </div>
                        <h6>Alle Krankenkassen vergleichen</h6>
                        <div class="text_container">
                            <p>In der Schweiz gibt es über 60 Krankenkassen, daher lohnt sich ein Krankenkassenvergleich mit  Krakenkassencompare. Die Prämien sind nach Kanton unterschiedlich und es lohnt sich auf jedenfall zu sparen.</p>
                        </div>
                    </div>

                    <div class="container_item_SwiffLAD col s3 m3 l3">
                        <div class="img_container">
                            <img id="Celebracion" class="center-align responsive-img" src="/img/Celebracion.png" alt=""> 
                        </div>
                        <h6>Unkompliziert sparen</h6>
                        <div class="text_container">
                            <p>Der unkompliziertes Krankenkassenvergleich der Schweiz mit wenigen Klicks, Sie erhalten unkimpliziert neutral und schnell lhre Angebot in ihrem Wohnkaton.</p>
                        </div>
                    </div>

                    <div class="container_item_SwiffLAD col s3 m3 l3">
                        <div class="img_container">
                            <img id="Amigas" class="center-align responsive-img" src="/img/Amigas.png" alt=""> 
                        </div>
                        <h6>Individueller Vergleich</h6>
                        <div class="text_container">
                            <p>Wir vergleichen Jugendliche wie Paare oder Familien. lhre Wünsche und Bedüfnisse stehen im Vordergrund. Ob ein Wechsel oder eine Anpassung, wir helfen lhnen das passende Angebot zu finden.</p>
                        </div>
                    </div>

                    <div class="col s3 m3 l3">
                        <div class="img_container">
                            <img id="Familia2" class="center-align responsive-img" src="/img/Familia2.png" alt=""> 
                        </div>
                        <h6>Famillienvergleich</h6>
                        <div class="text_container">
                            <p>Wir helfen ignen die günstigste Zahnzusatzversicherung für kinder. Nutzen Sie unseren Krankenkassevergleich.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fixed-action-btn">
                    <div class="box_white_container_support">
                        <p>Support/Chat</p>
                    </div>
                <img class="container_whatsappbutton" src="/img/social_whatsapp.png" alt=""> 
            </div>
        </div>
        <div class="container_tipo_seguros">
            <div class="row">
                <h1 class="center-align" >VERSICHERUNGSARTEN</h1>
                <div class="col s12 m6 l6">
                    <div class="row">
                        <i class="container_icon_tipo_seguros medium material-icons">chevron_right</i>
                            <div>
                                <h4 class="container_tipo_seguros black-text">Krankenkassen</h4>
                            </div>
                            <div class="linea_gris"></div>
                    </div>
                    <div class="row">
                        <i class="container_icon_tipo_seguros medium material-icons">chevron_right</i>
                            <div>
                                <h4 class="container_tipo_seguros black-text">Retchtsschutz</h4>
                            </div>
                            <div class="linea_gris"></div>
                    </div>
                    <div class="row">
                        <i class="container_icon_tipo_seguros medium material-icons">chevron_right</i>
                            <div>
                                <h4 class="container_tipo_seguros black-text">Zusatzversicherung</h4>
                            </div>
                            <div class="linea_gris"></div>
                    </div>
                    <div class="row">
                        <i class="container_icon_tipo_seguros medium material-icons">chevron_right</i>
                            <div>
                                <h4 class="container_tipo_seguros black-text">Lebensversicherung</h4>
                            </div>
                            <div class="linea_gris"></div>
                    </div>
                    <div class="row">
                        <i class="container_icon_tipo_seguros medium material-icons">chevron_right</i>
                            <div>
                                <h4 class="container_tipo_seguros black-text">Autoversicherung</h4>
                            </div>
                            <div class="linea_gris"></div>
                    </div>
                    <div class="row">
                        <i class="container_icon_tipo_seguros medium material-icons">chevron_right</i>
                            <div>
                                <h4 class="container_tipo_seguros black-text">Hausrat & Privathaftpflitcht</h4>
                            </div>
                            <div class="linea_gris"></div>
                    </div>
                    <div class="row">
                        <i class="container_icon_tipo_seguros medium material-icons">chevron_right</i>
                            <div>
                                <h4 class="container_tipo_seguros black-text">Krakentaggeld</h4>
                            </div>
                            <div class="linea_gris"></div>
                    </div>
                </div>
                <div class="col s12 m6 l6">
                    <img class="suiza_map" src="/img/suisse map.jpg" >
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m8 l8">
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
            <div class="col s12 m4 l4">
                <div class="box_ligth_pink">
                    <div class="container_h2_login">
                        <h4 class=" asesoriamiento_text center-align black-text">Krankenkassen-Beratung</h4>
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
        <div class="contenedor_SwiffLAD row">
            <div class="col s12 m12 l12">
                <h1 class=" center-align">WIE ENTSTEHT EN  SwiffLAD?</h1>
                <div class="container_item_SwiffLAD col s3 m3 l3">
                    <div class="img_container">
                        <img id="perfil" class="center-align responsive-img" src="/img/perfil_logo.png" alt="">
                    </div>
                    <div class="text_container">
                        <p>Ein potenzieller Kunde übermittelt uns aif einer themenspezifischen Internetseite seine kompletten Kontaktangaben sowie weitere versicherungsrelevante Informationen.</p>
                    </div>
                </div>

                <div class="container_item_SwiffLAD col s3 m3 l3">
                    <div class="img_container">
                        <img id="lupa" class="center-align responsive-img" src="/img/lupa_logo.png" alt="">
                    </div>
                    <div class="text_container">
                        <p>Nach Eingang des so entstandenen Versicherungsleads nehmen wir mit dem Kunden Kontakt auf, prüfen die Angaben aus dem Lead und besprechen mit ihm sein Versicherungsbedurfnis. </p>
                    </div>
                </div>

                <div class="container_item_SwiffLAD col s3 m3 l3">
                    <div class="img_container">
                        <img id="consola" class="center-align responsive-img" src="/img/consola.png" alt="">
                    </div>
                    <div class="text_container">
                        <p>Mit unserem Versicherungscheck entdecken wir weiter Versicherungslücken und sprechen diese direkt an.</p>
                    </div>
                </div>

                <div class="col s3 m3 l3">
                    <div class="img_container">
                        <img id="calendario" class="center-align responsive-img" src="/img/calendario_logo.png" alt="">
                    </div>
                    <div class="text_container">
                        <p>Schlussendilich vereinbaren wir einen Beratungstermin und leiten diesen an unsere Kunden witer.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class=" center-align container_ahorro">
                <h4 class="ahorro_text">SPAREN SIE PRO KUNDENTERMIN VIS 90% AKQUISEKOSTEN!</h4>
            </div>
        </div>
        <div class="row">
             <div class="col s12">
                <div class="center-align button_container">
                    <a class="button_precios waves-effect waves-light btn">
                        <div class="container_button_precios_text">
                            PREISE UND PAKETE
                        </div>
                    </a>
                </div>
             </div>
        </div>
        <div class="contenedor_servicios row">
            <div class="box-red-servicios col s12 m8 l8">
                <div class="row">
                    <div class="container container_servicios_adicionales">
                        <h4 class="left-align"> WEITERE DIENSTLEISTUNGEN: </h4>
                    </div>
                </div>
                <div class="row">
                    <div class=" container container_servicios_adicionales_text">
                        <p>Sie haben Leads und inhnen fehlen die Ressourcen diese zu bearbeiten? Unsere Spezialisten Telefoniere ihre Leads ab und setzen für Sie Terminen. Kontaktieren Sie uns per Email an:
                        projekt@tswiffeads.ch  </p>
                    </div>

                </div>
            </div>
            <div class="box-blue-servicios col s12 m4 l4">
                <div class="containe    º   ºr_img_perfil_teclado row">
                    <div class="img_container">
                        <img class="center-aling img_perfil_teclado" src="/img/icono_perfil_teclado.png" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <div class="center-align button_container_registro">
                            <a class="button_registro  waves-effect waves-light btn">
                                JETZT GRATIS & UNVERBINDLICH REGIESTRIEREN! 
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contenerdor_beneficios">
            <div class="row box-red-large">
                <h4 class="box_red_large_text white-text center-align"> WAS ERWARTET SIE NACH EFOLGREICHER ANDMELDUN?</h4>
                <div class="col s12 m6 l6">
                    <div class="row">
                    <i class="container_icon_beneficios medium material-icons">chevron_right</i>
                    <div>
                            <h5 class="container_text_beneficios white-text">Täglich neue Swiffleads</h5>
                    </div>
                    <div class="linea_blanca"></div>

                    </div>
                    <div class="row">
                        <i class="container_icon_beneficios medium material-icons">chevron_right</i>
                        <div>
                            <h5 class="container_text_beneficios white-text">Geprüfte Kundenangaben</h5>
                        </div>
                        <div class="linea_blanca"></div>

                    </div>
                    <div class="row">
                        <i class="container_icon_beneficios medium material-icons">chevron_right</i>
                        <div>
                            <h5 class="container_text_beneficios white-text">Keina Grundgebühren oder Kündigungsfristen</h5>
                        </div>
                        <div class="linea_blanca"></div>

                    </div>
                    <div class="row">
                        <i class="container_icon_beneficios medium material-icons">chevron_right</i>
                        <div>
                            <h5 class="container_text_beneficios white-text">Automatisierter Einkauf</h5>
                        </div>
                        <div class="linea_blanca"></div>

                    </div>
                </div>
                <div class="col s12 m6 l6">
                    <div class="row">
                        <i class="container_icon_beneficios medium material-icons">chevron_right</i>
                        <div>
                            <h5 class="container_text_beneficios white-text">Einfache Übersicht aller gekauften Swiffleads</h5>
                        </div>
                        <div class="linea_blanca"></div>

                    </div>
                    <div class="row">
                        <i class="container_icon_beneficios medium material-icons">chevron_right</i>
                        <div>
                            <h5 class="container_text_beneficios white-text">Garantierte Termine (kein Risiko)</h5>
                        </div>
                        <div class="linea_blanca"></div>

                    </div>
                    <div class="row">
                        <i class="container_icon_beneficios medium material-icons">chevron_right</i>
                        <div>
                            <h5 class="container_text_beneficios white-text">Diskretion: Ihre Anmeldung, Aktivitäten und Interessen werden vertraulich behandelt!</h5>
                        </div>
                        <div class="linea_blanca"></div>

                    </div>
                    <div class="row">
                        <i class="container_icon_beneficios medium material-icons">chevron_right</i>
                        <div>
                            <h5 class="container_text_beneficios white-text">Exklusivität: Daten werden exklusiv verkak</h5>
                        </div>
                        <div class="linea_blanca"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <div class="center-align button_container_registro">
                            <a class="button_registro_ventajas waves-effect waves-light btn">
                                JETZT GRATIS & UNVERBINDLICH REGIESTRIEREN! 
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box_red_blood row">
            <div class="row">
                <div class="center-align col s12">
                    <h3 class="white-text" >DIE VORTEILE GEGENÜBER KLASSISCHEN LEADS</h2>
                </div>
            </div>
            <div class="row">
                <div class="center-align col s12">
                    <h6 class="white-text">Telleads sind persölicher, reifer und terminiert Teleleads decken mehrere Versicherungsbedurfnisse wodurch aus einem Termin mehrere Versicherungsabschlüsse möglich sind.</h6>
                </div>
            </div>
            <div class="row">
                <div class="center-align col s12">
                    <h2 class="white-text">POTENTIALVERGLEICH</h2>
                </div>
            </div>
            <div class="row">
                <div class=" col s12 m6 l6">
                    <div class="small_box_pink">
                        <div class="center-align row">
                            <div class="small_box_blue">
                                <h2 class="white-text">KLASSICHE LEADS</h2>
                            </div>
                        </div>
                        <div class="rigth-align container container_pink_up">
                                <h5 class="white-text"> 3 Leads = max 1 Kundentermin</h5>
                        </div>
                        <div class="linea_gris"></div>
                        <div class="rigth-align container container_pink_down">
                                <h5 class="white-text"> Pro Kundentermin = 1 Versicherungsabschluss</h5>
                        </div>
                    </div>
                </div>
                <div class=" col s12 m6 l6">
                    <div class="box_grey_ligth">
                        <div class="center-align ">
                            <div class="box_blue_ligth">
                                <h2>SWIFFLEAD</h2>
                            </div>
                        </div>
                        <div class="container_large left-align ">
                            <img class="img_incorrecto" src="/img/no correcto-icon.png" alt="">
                            <h5>1 Telelad = 1 Kundentermin</h5> 
                        </div>
                        <div class="linea_gris"></div>
                        <div class="container_large left-align ">
                            <img class="img_correcto" src="/img/correcto-icon.png" alt="">
                            <h5>1 Kundentermin = mehrere Versicherungsabschlüsse</h5>
                        </div>
                        <div class="linea_gris"></div>
                        <div class="container_large left-align ">
                            <img class="img_correcto" src="/img/correcto-icon.png" alt="">
                            <h5> Krankenkasse</h5>
                        </div>
                        <div class="linea_gris"></div>
                        <div class="container_large left-align ">
                            <img class="img_correcto" src="/img/correcto-icon.png" alt="">
                            <h5>Retchtsschutz</h5>
                        </div>
                        <div class="linea_gris"></div>
                        <div class="container_large left-align ">
                            <img class="img_correcto" src="/img/correcto-icon.png" alt="">
                            <h5>Lebensversicherung</h5>
                        </div>
                        <div class="linea_gris"></div>
                        <div class="container_large left-align ">
                            <img class="img_correcto" src="/img/correcto-icon.png" alt="">
                            <h5>Autoversicherung</h5>
                        </div>
                        <div class="linea_gris"></div>
                        <div class="container_large left-align ">
                            <img class="img_correcto" src="/img/correcto-icon.png" alt="">
                            <h5>Hausrat & Privathaftpflitcht</h5>
                        </div>
                        <div class="linea_gris"></div>
                        <div class="container_large left-align ">
                            <img class="img_correcto" src="/img/correcto-icon.png" alt="">
                            <h5>Krakenktaggeld</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box_pink_large">
            <div class="row">
                <div class="col s12">
                    <div class="container">
                        <p class="white-text">Ein gekaufter Lead ist keine Abschlussagarantie, denn die Beratungsqualität und -kompetenz spielt auch bei online generierten Kontakten eine entscheidende Rolle.</p>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="row">
                <h1 class="center-align">KOSTENVERGLEICH</h1>
            </div>
            <div class="row">
                <p class="center-align">Analog dazu der Kostenvergleich</p>
                <div class="col s12 m8 l8">
                    <p class="right-align">Erfahrungsgemäss resultieren aus 10 klassischen Leads im Durchschnitt 3 Kundentermine. Berechnnungsbeispiel:</p>
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
        </div>
        <div class="row">
            <div class=" col s12 m6 l6">
                <div class="small_box_pink_klassiche_lead">
                    <div class="center-align row">
                        <div class="small_box_blue">
                            <h4 class="white-text">KLASSICHE LEADS</h4>
                        </div>
                    </div>
                    <div class="small_box_white center-align ">
                        <div class="container">
                            <h3>310 CHF,-</h3>
                        </div>
                    </div>
                    <div class="containers_container_pink">
                        <div class="rigth-align container container_pink_up">
                                <h6 class="white-text">Krankenkassen-Lead: 50 CHF,-</h6>
                        </div>
                        <div class="linea_gris"></div>
                        <div class="rigth-align container container_pink_down">
                                <h6 class="white-text">Rechtsschutz-Lead: 45 CHF,- </h6>
                        </div>
                        <div class="linea_gris"></div>
                        <div class="rigth-align container container_pink_up">
                            <h6 class="white-text">Zusatzversicherungs-Lead: 50 CHF,- </h6>
                        </div>
                        <div class="linea_gris"></div>
                        <div class="rigth-align container container_pink_down">
                                <h6 class="white-text">Lebensversicherungs-Lead: 85 CHF,-</h6>
                        </div>
                        <div class="linea_gris"></div>
                        <div class="rigth-align container container_pink_up">
                            <h6 class="white-text">Hausrat & Pirvathafpflicht-Lead: 40 CHF,-</h6>
                        </div>
                        <div class="linea_gris"></div>
                        <div class="rigth-align container container_pink_down">
                                <h6 class="white-text">Krakentaggeld-Lead: 40 CHF,-</h6>
                        </div>
                        <div class="linea_gris"></div>
                    </div>
                </div>
            </div>
            <div class=" col s12 m6 l6">
                <div class="box_grey_ligth">
                    <div class="center-align ">
                        <div class="box_blue_ligth">
                            <h4>SWIFFLEAD PAKET STANDARD</h2>
                        </div>
                    </div>
                    <div class="small_box_pink_paket center-align ">
                        <div class="container">
                            <p class="white-text flotar_derecha iva " >exkl.Mwst.</p>
                            <h3 class="white-text" >99 CHF,-</h3>
                        </div>
                    </div>
                    <div class="containers_large_paket">
                        <div class="container container_large_paket_text center-align ">
                            <h6 class="center-align">Krankenkassen-Lead:</h6>
                            <div class="red-text tachado flotar_derecha">50 CHF,</div>
                        </div>
                        <div class="linea_gris_paket"></div>

                        <div class="container container_large_paket_text center-align">
                            <h6 class="center-align ">Rechsschutz-Lead:</h6>
                            <div class="red-text tachado flotar_derecha">45 CHF,</div>
                        </div>
                        <div class="linea_gris_paket"></div>

                        <div class="container container_large_paket_text center-align">
                            <h6 class="center-align"> Zusatzversicherungs-Lead:</h6>
                            <div class="red-text tachado flotar_derecha"> 50 CHF,</div>
                        </div>
                        <div class="linea_gris_paket"></div>

                        <div class="container container_large_paket_text center-align">
                            <h6 class="center-align">Lebensversicherungs-Lead:</h6>
                            <div class="red-text tachado flotar_derecha">85 CHF,</div>
                        </div>
                        <div class="linea_gris_paket"></div>

                        <div class="container container_large_paket_text center-align">
                            <h6 class="center-align">Hausrat & Provathaftpflicht-Lead:</h6>
                            <div class="red-text tachado flotar_derecha">40 CHF,</div>
                        </div>
                        <div class="linea_gris_paket"></div>

                        <div class="container container_large_paket_text center-align">
                            <h6 class="center-align">Krakentaggeld-Lead:</h6>
                            <div class="red-text tachado flotar_derecha"> 40 CHF,</div>
                        </div>
                        <div class="linea_gris_paket"></div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <p class="white-text center-align footer_text">© 2021   Swiffleads.ch All rigths reserved | Impressum | AGB</p>
    </div>  
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>