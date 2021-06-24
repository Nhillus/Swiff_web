<style>
        /* container defines margins and width */
    .container {
        margin: 60px 120px 0;
    }

    /* outer container will define aspect ratio */
    .outer {
        position: relative;
        width: 100%;
    }

    .outer.r4x3 {
        padding-top: 75%; /* "height" will be 3/4 of width */
    }

    .outer.r2x1 {
        padding-top: 50%; /* "height" will be 1/2 of width */
    }

    /* inner container positioned absolutely and holds content */
    .outer .inner {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        outline: 1px solid grey;
    }

    /* example content */
    .little-box {
        float: left;
        outline: 1px solid steelblue;
        width: 25%;
        height: 33.333%;
    }

    /* just for display purposes... */
    .inner::after {
        content: attr(data-size);
        position: absolute;
        left:0;
        top: -1em;
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
            <div class="col s12 m3 l3">
                <div class="container_paket_white">

                </div>
            </div>
            <div class="container_paket_blue col s12 m3 l3">
                <div class="container_text_standart">
                    <h3 class="Paketes_titulos" >STANDART</h3>
                </div>
                <div class="container_blue_down row">
                    
                </div>
            </div>
            <div class="container_paket_blue_ligth col s12 m3 l3">
                <div class="container_text_basis">
                    <h3 class="Paketes_titulos">BASIS</h3>
                </div>
                <div class="container_blue_light_down row">
                    
                </div>
            </div>
            <div class="container_paket_red_blood col s12 m3 l3">
                <div class="container_text_premium">
                    <h3 class="Paketes_titulos">PREMIUM</h3>
                </div>
                <div class="container_red_blood row"></div>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m3 l3">
                <h5>Region</h5>
                <p>Können bestimmt werden</p>
            </div>
            <div class="col s12 m3 l3">
                <img class="center_img img_incorrecto" src="/img/no correcto-icon.png" alt="">
            </div>
            <div class="col s12 m3 l3">
                <img class="center_img img_correcto" src="/img/correcto-icon.png" alt="">
            </div>
            <div class="col s12 m3 l3">
                <img class="center_img img_correcto" src="/img/correcto-icon.png" alt="">
            </div>
        </div>
        <div class="row_gris row">
            <div class="col s12 m3 l3">
                <h5>Digital</h5>
                <p>Termin auf eine Telefonische Beratung</p>
            </div>
            <div class="col s12 m3 l3">
                <img class="center_img img_correcto" src="/img/correcto-icon.png" alt="">
            </div>
            <div class="col s12 m3 l3">
                <img class="center_img img_correcto" src="/img/correcto-icon.png" alt="">
            </div>
            <div class="col s12 m3 l3">
                <img class="center_img img_correcto" src="/img/correcto-icon.png" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col s12 m3 l3">
                <h5>Absagen</h5>
                <p>Kunden die Abbsagen bel Teleleads werden ersetzt</p>
            </div>
            <div class="col s12 m3 l3">
                <img class="center_img img_correcto" src="/img/correcto-icon.png" alt="">
            </div>
            <div class="col s12 m3 l3">
                <img class="center_img img_correcto" src="/img/correcto-icon.png" alt="">
            </div>
            <div class="col s12 m3 l3">
                <img class="center_img img_correcto" src="/img/correcto-icon.png" alt="">
            </div>
        </div>
        <div class="row_gris row">
            <div class="col s12 m3 l3">
                <h5>Reklamationen</h5>
                <p>Maximal 10% der gelieferten Termine</p>
            </div>
            <div class="col s12 m3 l3">
                <img class="center_img img_incorrecto" src="/img/no correcto-icon.png" alt="">
            </div>
            <div class="col s12 m3 l3">
                <img class="center_img img_incorrecto" src="/img/no correcto-icon.png" alt="">
            </div>
            <div class="col s12 m3 l3">
                <img class="center_img img_correcto" src="/img/correcto-icon.png" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col s12 m3 l3">
                <h5>Checkliste Versicherung</h5>
                <p>.</p>
            </div>
            <div class="col s12 m3 l3">
                <img class="center_img img_correcto" src="/img/correcto-icon.png" alt="">
            </div>
            <div class="col s12 m3 l3">
                <img class="center_img img_correcto" src="/img/correcto-icon.png" alt="">
            </div>
            <div class="col s12 m3 l3">
                <img class="center_img img_correcto" src="/img/correcto-icon.png" alt="">
            </div>
        </div>
        <div class="row_gris row">
            <div class="col s12 m3 l3">
                <h5>Versicherungs -Produkt</h5>
                <p> Kunde hat min. Interesse an 1 Produkten</p>
            </div>
            <div class="col s12 m3 l3">
                <img class="center_img img_incorrecto" src="/img/no correcto-icon.png" alt="">
            </div>
            <div class="col s12 m3 l3">
                <img class="center_img img_correcto" src="/img/correcto-icon.png" alt="">
            </div>
            <div class="col s12 m3 l3">
                <img class="center_img img_correcto" src="/img/correcto-icon.png" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col s12 m3 l3">
                <h5>Versicherungs -Produkt</h5>
                <p> Kunde hat min. Interesse an 2 Produkten</p>
            </div>
            <div class="col s12 m3 l3">
                <img class="center_img img_incorrecto" src="/img/no correcto-icon.png" alt="">
            </div>
            <div class="col s12 m3 l3">
                <img class="center_img img_incorrecto" src="/img/no correcto-icon.png" alt="">
            </div>
            <div class="col s12 m3 l3">
                <img class="center_img img_correcto" src="/img/correcto-icon.png" alt="">
            </div>
        </div>
        <div class="row_gris row">
            <div class="col s12 m3 l3">
                <h5>QC Terminbestätigung</h5>
                <p>Termin wurde von Qualitäskontrolle Telefonisch bestätigt</p>
            </div>
            <div class="col s12 m3 l3">
                <img class="center_img img_correcto" src="/img/correcto-icon.png" alt="">
            </div>
            <div class="col s12 m3 l3">
                <img class="center_img img_correcto" src="/img/correcto-icon.png" alt="">
            </div>
            <div class="col s12 m3 l3">
                <img class="center_img img_correcto" src="/img/correcto-icon.png" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col s12 m3 l3">
                <h5>SMS Terminbestätigung</h5>
                <p>Kunde bekommt eine Terminbestätigung per SMS</p>
            </div>
            <div class="col s12 m3 l3">
                <img class="center_img img_correcto" src="/img/correcto-icon.png" alt="">
            </div>
            <div class="col s12 m3 l3">
                <img class="center_img img_correcto" src="/img/correcto-icon.png" alt="">
            </div>
            <div class="col s12 m3 l3">
                <img class="center_img img_correcto" src="/img/correcto-icon.png" alt="">
            </div>
        </div>
        <div class="row_gris row">
            <div class="col s12 m3 l3">
                <h5>SMS Termin Reminder</h5>
                <p>Kunde wird 3h vor dem Termin an den Termin erinnert</p>
            </div>
            <div class="col s12 m3 l3">
                <img class="center_img img_incorrecto" src="/img/no correcto-icon.png" alt="">
            </div>
            <div class="col s12 m3 l3">
                <img class="center_img img_incorrecto" src="/img/no correcto-icon.png" alt="">
            </div>
            <div class="col s12 m3 l3">
                <img class="center_img img_correcto" src="/img/correcto-icon.png" alt="">
            </div>
        </div>
        <div class="footer">
            <p class="white-text center-align footer_text">© 2021   Swiffleads.ch All rigths reserved | Impressum | AGB</p>
        </div>
    </div>
</body>

<div class="outer r4x3">
    <div class="inner">
        <div class="little-box">A</div>
        <div class="little-box">B</div>
        <div class="little-box">C</div>
        <div class="little-box">D</div>
        <div class="little-box">A</div>
        <div class="little-box">B</div>
        <div class="little-box">C</div>
        <div class="little-box">D</div>
        <div class="little-box">A</div>
        <div class="little-box">B</div>
        <div class="little-box">C</div>
        <div class="little-box">D</div>
    </div>
</div>
</div>

<div class="container">
<div class="outer r2x1">
    <div class="inner">
        <div class="little-box">A</div>
        <div class="little-box">B</div>
        <div class="little-box">C</div>
        <div class="little-box">D</div>
        <div class="little-box">A</div>
        <div class="little-box">B</div>
        <div class="little-box">C</div>
        <div class="little-box">D</div>
        <div class="little-box">A</div>
        <div class="little-box">B</div>
        <div class="little-box">C</div>
        <div class="little-box">D</div>
    </div>
</div>
</div>
<script>
    // this javascript is simply to display the size of the box
// you'll see some rounding errors from the percentage calculation in CSS

$(window).on('resize', function(){

    $('.inner').each(function(){

        var box = $(this);        
        var width = box.width();
        var height = box.height();        
        
        box.attr('data-size', width+'x'+height+' (r: '+(width/height).toFixed(2)+')');

    });
}).trigger('resize');
</script>
