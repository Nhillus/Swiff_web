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
    <title>Impressum</title>
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
        height: fit-content;
        position: relative;
        overflow: hidden;
    }
    .impressum {
        background-color: #fff3d4;
        padding:50px;
        margin: 100px;
        border: 2px solid black;
        height: fit-content;
    }
    .first_p {
        margin-bottom: 60px;
    }
    .second_p {
        margin-bottom: 60px;
    }
    .third_p {
        margin-bottom: 60px;
    }
    .fourth_p {
        margin-bottom: 60px;
    }
    .footer {
        height: 60px;
        background-color: black;
    }
    .footer_text {
        padding-top:10px;
        font-size: 26px;
    }
    @media only screen and (max-width: 690px){ 
        .footer_text {
            font-size: 20px;
        }
    }
    @media only screen and (max-width: 600px)
    {
        .phone_text_tittle {
            font-size: 16px
        }
        .phone_text {
            font-size: 14px
        }
        .impressum {
            padding: 25px;
        }
        
    }
    @media only screen and (max-width: 580px){
        .footer_text {
            font-size: 16px;
        }
    }
    @media only screen and (max-width: 550px) {
        .phone_text_tittle {
            font-size: 14px
        }
        .phone_text {
            font-size: 12px
        }
        .impressum {
            padding: 18px;
        }
    }
    @media only screen and (max-width: 430px) {
        .phone_text_tittle {
            font-size: 12px
        }
        .phone_text {
            font-size: 10px
        }
        .impressum {
            padding: 15px;
            margin: 50px;
        }
        .first_p {
            margin-bottom: 30px;
        }
        .second_p {
            margin-bottom: 30px;
        }
        .third_p {
            margin-bottom: 30px;
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
        <div class="impressum">
            <div class="impressum_tittle">
                <h3 class="phone_text_tittle center-align impressum_tittle_h3">Impressum</h3>
            </div>
            <div class="impressum_text">
                <div class="first_p">
                    <h4 class="phone_text flow-text">Swiffleads.ch ist ein Angebot der</h4>
                    <h4 class="phone_text flow-text">Bluestone Finance GmbH</h4>
                </div>
                <div class="second_p">
                    <h4 class="phone_text flow-text">Unsere Postanschrft</h4>
                    <h4 class="phone_text flow-text">Bluestone Finance Gmbh</h4>
                    <h4 class="phone_text flow-text">Regina-Kagi-Hof 8</h4>
                    <h4 class="phone_text flow-text">8050 Zürich</h4>
                </div>
                <div class="third_p">
                    <h4 class="phone_text flow-text">Unsere Emailadresse:</h4>
                    <h4>
                        <a class="phone_text flow-text" href="">support@Swiffleads.ch</a>
                    </h4>
                </div>
                <h4 class="phone_text flow-text">Handelsregistermummer:CHE-,,,-,,,-,,,</h4>
                <h4 class="phone_text flow-text">UBS-Konto</h4>
                <h4 class="phone_text flow-text">Finanzinstitut: UBS Bank</h4>
                <h4 class="phone_text flow-text">IBAN: CH</h4>
                <h4 class="phone_text flow-text">UBS Konto-Nr.:</h4>
                <h4 class="phone_text flow-text">SWIFFT-Adr.(BIC):</h4>
            </div>
        </div>
        <div class="footer">
            <p class="white-text center-align footer_text">© 2021   Swiffleads.ch All rigths reserved | Impressum | AGB</p>
        </div>
    </div>
</body>
</html>