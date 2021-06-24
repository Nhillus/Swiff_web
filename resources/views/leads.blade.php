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
    <title>Paket Leads</title>
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
    p {
        font-size: 11px;
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
        background-color: white;
        box-shadow: 0 1px 9px rgb(0 0 0 / 8%);
    }
    .container_paket_blue {
        margin-top: 200px;  
        background-color:#355f8f;
        height: 200px;
    }
    .container_blue_down {
        height: 105px;
        background-color: #5290de;
    }
    .container_paket_blue_ligth {
        margin-top: 200px;  
        background-color: #4aa594;
        height: 200px;
    }
    .container_blue_light_down {
        background-color: #84ffff;
        height: 105px;
    }
    .container_paket_red_blood {
        margin-top: 200px;  
        background-color: #a00020;
        height: 200px;
    }
    .container_red_blood {
        background-color: #fe2c4f;
        height: 105px;  
    }
    .img_incorrecto {
        width: 60px;
        height: 60px;
        margin-right: 10px;
        margin-top: 3px;
        float: left;
        text-align: center;
        position: relative;
    }
    .img_correcto {
        width: 60px;
        height: 60px;
        margin-right: 10px;
        margin-top: 3px;
        float: left;
        position: relative;
    }
    .container_login {
        position: relative;
        top: 400px;
        background-color: #fd3957;
        margin: 0 auto;
        width: 35%;
        height: 450px;
    }
    .center_img {
        position: relative;
        top: 10px;
        left: 70px;
    }
    .row_gris {
        background-color:#cdbfa7;
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
        bottom: 0px;
        height: 80px;
        background-color: black;
   }
   .footer_text {
        padding-top:20px;
        bottom: 500px;
        font-size: 26px;
   }
    textarea.materialize-textarea{
        height: 200px;
   }
   @media only screen and (max-width : 865px) {
        .Paketes_titulos{
            font-size: 32px;
        }
        .caracteristicas_text {
            font-size: 20px;
        }
        
    }
    @media only screen and (max-width : 805px) {
        .caracteristicas_text {
            font-size: 18px;
        }
        .Paketes_titulos{
            font-size: 24px;
        }
        .img_correcto {
            width: 45px;
            height: 45px;
        }
        .img_incorrecto {
            width: 45px;
            height: 45px;
        }
    }
    @media only screen and (max-width: 690px){ 
        .footer_text {
            font-size: 20px;
        }
    }
    @media only screen and (max-width : 600px) {
        .caracteristicas_text {
            font-size: 16px;
        }
        .caracteristicas_parraf {
            font-size: 10px;
        }
        .Paketes_titulos{
            font-size: 18px;
        }
        .center_img {
            left: 35px;
        }
    }
    @media only screen and (max-width: 580px){
        .footer_text {
            font-size: 16px;
        }
    }
    @media only screen and (max-width : 525px) {
        .caracteristicas_text {
            font-size: 14px;
        }
        .caracteristicas_parraf {
            font-size: 8px;
        }
        
        .Paketes_titulos{
            font-size: 16px;
        }
        .center_img {
            left: 17px;
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
        <div class="row">
            <div class="col s3 m3 l3">
                <div class="container_paket_white">

                </div>
            </div>
            <div class="container_paket_blue col s3 m3 l3">
                <div class="container_text_standart">
                    <h3 class="Paketes_titulos" >STANDART</h3>
                </div>
                <div class="container_blue_down row">
                    
                </div>
            </div>
            <div class="container_paket_blue_ligth col s3 m3 l3">
                <div class="container_text_basis">
                    <h3 class="Paketes_titulos">BASIS</h3>
                </div>
                <div class="container_blue_light_down row">
                    
                </div>
            </div>
            <div class="container_paket_red_blood col s3 m3 l3">
                <div class="container_text_premium">
                    <h3 class="Paketes_titulos">PREMIUM</h3>
                </div>
                <div class="container_red_blood row"></div>
            </div>
        </div>
        <div class="row">
            <div class="col s3 m3 l3">
                <h5 class="caracteristicas_text">Region</h5>
                <p class="caracteristicas_parraf" >Können bestimmt werden</p>
            </div>
            <div class="col s3 m3 l3">
                <img class="center_img img_incorrecto" src="/img/no correcto-icon.png" alt="">
            </div>
            <div class="col s3 m3 l3">
                <img class="center_img img_correcto" src="/img/correcto-icon.png" alt="">
            </div>
            <div class="col s3 m3 l3">
                <img class="center_img img_correcto" src="/img/correcto-icon.png" alt="">
            </div>
        </div>
        <div class="row_gris row">
            <div class="col s3 m3 l3">
                <h5 class="caracteristicas_text" >Digital</h5>
                <p class="caracteristicas_parraf" >Termin auf eine Telefonische Beratung</p>
            </div>
            <div class="col s3 m3 l3">
                <img class="center_img img_correcto" src="/img/correcto-icon.png" alt="">
            </div>
            <div class="col s3 m3 l3">
                <img class="center_img img_correcto" src="/img/correcto-icon.png" alt="">
            </div>
            <div class="col s3 m3 l3">
                <img class="center_img img_correcto" src="/img/correcto-icon.png" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col s3 m3 l3">
                <h5 class="caracteristicas_text">Absagen</h5>
                <p class="caracteristicas_parraf" >Kunden die Abbsagen bel Teleleads werden ersetzt</p>
            </div>
            <div class="col s3 m3 l3">
                <img class="center_img img_correcto" src="/img/correcto-icon.png" alt="">
            </div>
            <div class="col s3 m3 l3">
                <img class="center_img img_correcto" src="/img/correcto-icon.png" alt="">
            </div>
            <div class="col s3 m3 l3">
                <img class="center_img img_correcto" src="/img/correcto-icon.png" alt="">
            </div>
        </div>
        <div class="row_gris row">
            <div class="col s3 m3 l3">
                <h5 class="caracteristicas_text" >Reklamationen</h5>
                <p class="caracteristicas_parraf" >Maximal 10% der gelieferten Termine</p>
            </div>
            <div class="col s3 m3 l3">
                <img class="center_img img_incorrecto" src="/img/no correcto-icon.png" alt="">
            </div>
            <div class="col s3 m3 l3">
                <img class="center_img img_incorrecto" src="/img/no correcto-icon.png" alt="">
            </div>
            <div class="col s3 m3 l3">
                <img class="center_img img_correcto" src="/img/correcto-icon.png" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col s3 m3 l3">
                <h5 class="caracteristicas_text" >Checkliste Versicherung</h5>
                <p>.</p>
            </div>
            <div class="col s3 m3 l3">
                <img class="center_img img_correcto" src="/img/correcto-icon.png" alt="">
            </div>
            <div class="col s3 m3 l3">
                <img class="center_img img_correcto" src="/img/correcto-icon.png" alt="">
            </div>
            <div class="col s3 m3 l3">
                <img class="center_img img_correcto" src="/img/correcto-icon.png" alt="">
            </div>
        </div>
        <div class="row_gris row">
            <div class="col s3 m3 l3">
                <h5 class="caracteristicas_text" >Versicherungs -Produkt</h5>
                <p class="caracteristicas_parraf"> Kunde hat min. Interesse an 1 Produkten</p>
            </div>
            <div class="col s3 m3 l3">
                <img class="center_img img_incorrecto" src="/img/no correcto-icon.png" alt="">
            </div>
            <div class="col s3 m3 l3">
                <img class="center_img img_correcto" src="/img/correcto-icon.png" alt="">
            </div>
            <div class="col s3 m3 l3">
                <img class="center_img img_correcto" src="/img/correcto-icon.png" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col s3 m3 l3">
                <h5 class="caracteristicas_text" >Versicherungs -Produkt</h5>
                <p class="caracteristicas_parraf"> Kunde hat min. Interesse an 2 Produkten</p>
            </div>
            <div class="col s3 m3 l3">
                <img class="center_img img_incorrecto" src="/img/no correcto-icon.png" alt="">
            </div>
            <div class="col s3 m3 l3">
                <img class="center_img img_incorrecto" src="/img/no correcto-icon.png" alt="">
            </div>
            <div class="col s3 m3 l3">
                <img class="center_img img_correcto" src="/img/correcto-icon.png" alt="">
            </div>
        </div>
        <div class="row_gris row">
            <div class="col s3 m3 l3">
                <h5 class="caracteristicas_text" >QC Terminbestätigung</h5>
                <p class="caracteristicas_parraf">Termin wurde von Qualitäskontrolle Telefonisch bestätigt</p>
            </div>
            <div class="col s3 m3 l3">
                <img class="center_img img_correcto" src="/img/correcto-icon.png" alt="">
            </div>
            <div class="col s3 m3 l3">
                <img class="center_img img_correcto" src="/img/correcto-icon.png" alt="">
            </div>
            <div class="col s3 m3 l3">
                <img class="center_img img_correcto" src="/img/correcto-icon.png" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col s3 m3 l3">
                <h5 class="caracteristicas_text" >SMS Terminbestätigung</h5>
                <p class="caracteristicas_parraf">Kunde bekommt eine Terminbestätigung per SMS</p>
            </div>
            <div class="col s3 m3 l3">
                <img class="center_img img_correcto" src="/img/correcto-icon.png" alt="">
            </div>
            <div class="col s3 m3 l3">
                <img class="center_img img_correcto" src="/img/correcto-icon.png" alt="">
            </div>
            <div class="col s3 m3 l3">
                <img class="center_img img_correcto" src="/img/correcto-icon.png" alt="">
            </div>
        </div>
        <div class="row_gris row">
            <div class="col s3 m3 l3">
                <h5 class="caracteristicas_text" >SMS Termin Reminder</h5>
                <p class="caracteristicas_parraf" >Kunde wird 3h vor dem Termin an den Termin erinnert</p>
            </div>
            <div class="col s3 m3 l3">
                <img class="center_img img_incorrecto" src="/img/no correcto-icon.png" alt="">
            </div>
            <div class="col s3 m3 l3">
                <img class="center_img img_incorrecto" src="/img/no correcto-icon.png" alt="">
            </div>
            <div class="col s3 m3 l3">
                <img class="center_img img_correcto" src="/img/correcto-icon.png" alt="">
            </div>
        </div>
        <div class="footer">
            <p class="white-text center-align footer_text">© 2021   Swiffleads.ch All rigths reserved | Impressum | AGB</p>
        </div>
    </div>
</body>
</html>