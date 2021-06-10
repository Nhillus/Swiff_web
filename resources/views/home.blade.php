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
    <!-- Jquery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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
        position: relative;
        margin: 0 auto;
        max-width: 1200px;
        background-color:white; 
        box-shadow: 0 1px 9px rgb(0 0 0 / 8%);
        overflow: hidden;
    }
    .container {
        width: 80% !important;
    }
    .box-red {
        background-color: #fd002f;
        height: 600px;
    }
    .container_input {
        margin: 0px 25px;
        background-color: #fd002f;
        height: fit-content;
        padding-bottom: 570px;
    }

    .container_container_button {
        background-color:  #fd002f;
    }
    .container_izq_inputs {
        background-color: #fd002f;
    }
    .container_der_inputs {
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

    .Premios {
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
    .contenedor_SwiffLAD {
        background-color: #ebdabe;
        margin: 30px 35px;
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
   .Comparacion_seguros_medicos_container {
       position: relative;
       top: 30px;
       height: fit-content;
       margin: 0px 35px;
       padding-bottom: 30px;
       background-color: #ebdabe;
   }
   .Comparacion_seguros_medicos_item {
       height: 370px;
       border-right: 3px solid grey;
   }

   .Comparacion_seguros_medico_img_container {
       text-align: center;
   }
   .Comparacion_seguros_medicos_item_text {
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
        height: 730px;
        background-color: #fcebce
    }

    .asesoriamiento_text {
        padding-top: 20px;
    }

    .linea_punteada {
        border-bottom: 3px dashed black;
    }
    .container_ahorro {
        margin: 70px 30px 50px 30px;
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
    .precio_swifflead {
        background-color: #fd3957;
        display: flex;
        flex-direction: row;
        flex-wrap: nowrap;
        align-content: stretch;
        justify-content: space-around;
        align-items: flex-end;
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
        
    }
    .small_box_pink {
        background-color: #fd3957;
        margin: 0px 10px;
        height: 250px;
    }
    .containers_container_pink {
        padding-bottom: 25px;
    }
    
    
    .img_container_jetzt {
        text-align: center;
    } 
    .box_blue_ligth {
        background-color: #80d0cd;
    }
    .box_grey_ligth {
        background-color: #ebdabe;
        padding-bottom: 25px;
        margin :10px 10px;
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
    .img_incorrecto_leads {
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
    .img_correcto_leads {
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
        height: fit-content;
    }
    .small_box_white {
        display: flex;
        background-color: white;
        width: 100%;
    }
    .tachado {
        text-decoration:line-through;
        font-size: 16px;
    }

    .precio_leads_text {
        background-color: #fd3957;
        text-align: left;
    }
    .contenedor_iva {

    }
    .flotar_derecha {
        position: relative;
        left:20px;
    }
    .flotar_derecha_iva {
        position: relative;
        left:20px;
    }
    .precio_leads {
        text-align: left;
    }
     .small_box_pink_paket {
        background-color: #fd3957;
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
    }
    .container_large_paket_text {
        display: flex;
        flex-direction: row;
        flex-wrap: nowrap;
        align-content: stretch;
        justify-content: flex-start;
        align-items: center;
    }
    .precio_lead {
        position:relative;
    }
    .sin_iva {
        position: absolute;
        right: 0px;
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
    /* Media Queries */
    /*Diferencia entre 247px en un sml6*/
    /*Diferencia entre 28px en un sml3*/
    @media only screen and (max-width: 1132px)
    {
        /*Equivale a 850 width*/
        
        .Comparacion_seguros_medicos_container
        {
            height: 600px;
        }
        .Comparacion_seguros_medicos_item {
            height: 470px;
        }
        .container_button_precios_text {
            font-size: 12px;
         }
    }
    @media only screen and (max-width: 1025px)
    {
        
        .container_tipo_seguros_tittles {
            font-size: 24px;
        }
        .box_ligth_pink {
            height: 780px;
        }
    }
    @media only screen and (max-width: 1000px)
    {
        .box_ligth_pink {
            height: 800px;
        }
    }
    @media only screen and (max-width: 995px)
    {
        .box_ligth_pink {
            height: 860px;
        }
        .container_button_precios_text {
            font-size: 9px;
         }
        .button_container_registro {
            height: 30px;
        }
        
    }
    @media only screen and (max-width: 990px)
    {
        .box_ligth_pink {
            height: 720px;
        }
        .button_registro {
            font-size: 9px;
        }
    }
    @media only screen and (max-width : 987px) {
       
        #container_email {
            padding: 0px 0px;
        }
        .asesoriamiento_tittle {
            font-size: 34px;
        }
        .asesoriamiento_text {
            font-size:21px;
        }
        .box_ligth_pink {
            height: 700px;
        }
        .button_registro {
            font-size: 8px;
        }
        
    }
    @media only screen and (max-width : 950px) {
        .box_ligth_pink {
            height: 760px;
        }
        .container_button_precios_text {
            font-size: 7px;
         }
        .classic_leads {
            font-size: 26px;
        }
        .swifflead {
            font-size: 26px;
        }
        .classic_leads_text {
            font-size: 16px;
        }
        .small_box_pink {
            height: fit-content;
            padding-bottom: 15px;
        }
        .swifflead_text {
            font-size: 16px;
        }
        .img_incorrecto_leads {
            width: 20px;
            height: 20px;
        }
        .img_correcto_leads {
            width: 20px;
            height: 20px;
            position: relative;
            top: 2px;
        }
        .paquete_standart {
            font-size: 20px;
        }
        .classic_leads_precio {
            font-size: 20px;
        }
       
    }

    @media only screen and (max-width : 900px) {
        
        .asesoriamiento_tittle {
            font-size: 28px;
        }
        .asesoriamiento_text {
            font-size:18px;
        }
        .box_ligth_pink {
            height: 640px;
        }
        .box_red_large_text {
            font-size: 24px;
        }
        .SWIFFLEAD_tittle {
            font-size: 40px;
        }
        .SWIFFLEAD_text {
            font-size:12.8px;
        }

        .box-red {
            height: 450px;
        }
        
        .container_que_es_SWIFFLEAD {
        }
    }
    @media only screen and (max-width : 890px) {
        .ahorro_text {
            font-size: 24px;
        }
       
    }
    @media only screen and (max-width : 870px) {
        .SwiffLAD_tittle {
            font-size: 32px;
        }
        .ahorro_text {
            font-size: 18px;
        }
        .paquete_standart {
            font-size: 20px;
        }
        .container_text_beneficios {
            font-size: 18px;
        }
        .SWIFFLEAD_tittle {
            font-size: 38px;
        }
        
    }
    @media only screen and (max-width : 859px) {
        .SwiffLAD_tittle {
            font-size: 32px;
        }
        .container_tipo_seguros_tittles {
            font-size: 16px;
        }
        .asesoriamiento_tittle {
            font-size: 24px;
        }
        .asesoriamiento_text {
            font-size:17px;
        }
        .box_ligth_pink {
            height: 670px;
        }
       
    }
    @media only screen and (max-width : 822px) {
        
        .input-field input[type=text] {
            font-size: 11px;
        }
        .Premios_text_tittle {
            font-size: 16px;
        }
        .asesoriamiento_tittle {
            font-size: 18px;
        }
        .asesoriamiento_text {
            font-size:16px;
        }
        .box_ligth_pink {
            height: 620px;
        }
        .comparacion_pulpo_tittle {
            font-size: 25px;
        }
         .SWIFFLEAD_tittle {
            font-size: 36px;
        }
        
    }
    @media only screen and (max-width : 800px) {
        
        .Premios_text_tittle {
            font-size: 14px;
        }
        .Premios_text {
            font-size: 10px;
        }
        .box_ligth_pink {
            height: 620px;
        }
        
        .comparacion_pulpo_text {
            font-size: 13px;
        }

        .SWIFFLEAD_tittle {
            font-size: 34px;
        }

        .box-red {
            height: 300px;
        }
       
    }
    @media only screen and (max-width : 790px) {
        .Premios_text_tittle {
            font-size: 12px;
        }
        .Premios_text {
            font-size: 9px;
        }
        .Comparacion_seguros_medicos_tittle {
            font-size: 57px;
        }
        .comparacion_item_text {
            font-size: 11px;
        }
        .img_comparacion {
            width: 250px !important;
            height: 150px !important;
        }
        .Comparacion_seguro_titulos {
            font-size: 14px;
        }
        .asesoriamiento_text {
            font-size:14px;
        }
        .box_ligth_pink {
            height: 510px;
        }
        .costos_comparacion_tittle {
            font-size: 32px; 
        }
       .costos_comparacion_texto {
           font-size:12px;
           margin: 0px 35px;  
       }
       .SWIFFLEAD_tittle {
            font-size: 24px;
        }
    }
    @media only screen and (max-width : 780px) {
        .box_ligth_pink {
            height: 550px;
        }
        .SWIFFLEAD_tittle {
            font-size: 22px;
        }
        
    }
    @media only screen and (max-width : 760px) {
        .box_ligth_pink {
            height: 580px;
        }
        .box_red_large_text {
            font-size: 24px;
        }
        .SWIFFLEAD_tittle {
            font-size: 20px;
        }
        
    }
    @media only screen and (max-width : 740px) {
        .box_ligth_pink {
            height: 600px;
        }
        .container_text_beneficios {
            font-size: 16px;
        }
        
    }
    @media only screen and (max-width : 728px) {
        .Comparacion_seguros_medicos_tittle {
            font-size: 47px;
        }
        .asesoriamiento_text {
            font-size:9px;
        }
        .box_ligth_pink {
            height: 380px;
        }
        .container_p_login {
            padding: 0px 20px;
        }
        .text_container {
            font-size: 12px;
        }
        .button_registro {
            font-size: 6px;
        }
        .box_red_large_text {
            font-size: 22px;
        }
        
    }

    @media only screen and (max-width : 672px) {
        .container_tipo_seguros_tittles {
            font-size: 14px;
        }
        .container_tipo_seguros_tittle {
            font-size: 42px;
        }
        .box_ligth_pink {
            height: 380px;
        }
    }
    @media only screen and (max-width : 650px) {
        .box_ligth_pink {
            height: 390px;
        }
        .SWIFFLEAD_tittle {
            font-size: 18px;
        }
    }

    @media only screen and (max-width : 600px) {
        .Comparacion_seguros_medicos_container {
            height: 1500px;
        }
        .box-red {
            height: 1800px;
            margin-bottom: 500px;
        }
        .servicios_adicionales {
            font-size: 24px;
        }
        .Comparacion_seguros_medicos_tittle {
            font-size: 37px;
        }
        .container_tipo_seguros_tittle {
            font-size: 28px;
        }
        .container_tipo_seguros_tittles {
            font-size: 26px;
        }
        .Comparacion_seguros_medicos_item {
            border-right: 0px;
            border-bottom: 3px solid grey;
            margin-bottom: 10px;
            height: 350px;
        }
        .container_button_precios_text {
            font-size: 18px;
        }
        .button_registro {
            font-size: 12px;
        }
        .button_precios {
            width: 50%;
        }
        .Comparacion_seguro_titulos {
            font-size: 18px;
        }
        .img_container {
            position: relative;
            left: 90px;
        }
        .img_container_2 {
            position:relative;
            left: 135px;
        }
        .img_container_3 {
            position:relative;
            left: 110px;
        }
        .img_container_4 {
            position: relative;
            left: 160px;
        }
        .comparacion_item_text {
            font-size: 14px;
        }
        .SWIFFLEAD_tittle {
            font-size: 32px;
        }
        .SWIFFLEAD_text {
            font-size: 20px;
        }
        .input-field input[type=text] {
            font-size:16px;
        }
        .Premios_text_tittle {
            font-size: 26px;
        }
        .Premios_text {
            font-size: 16px;
        }
        .box-red {
            height: 480px;
            margin-left: 25px;
            margin-right: 25px;
        }
        .box_ligth_pink {
            height: fit-content;
            padding-bottom: 10px;
        }
        .asesoriamiento_tittle {
            font-size: 64px;
        }
        .asesoriamiento_text {
            font-size:24px;
        }
        .ahorro_text {
            font-size: 18px;
        }
        .box-red-large {
            height: 780px;
        }
        .button_registro_ventajas {
            font-size:8px;
        }
        .box_red_blood {
            height: fit-content;
        }
        .comparacion_potencial { 
            font-size: 26px;
        }
        .ventajas_comparacion {
            font-size: 26px;
        }
        .Elegir_seguro_text {
            font-size:11px;
        }
        .container_input {
         margin-bottom: 20px;
         padding-bottom: 1050px;
        }
        .container_que_es_SWIFFLEAD {
            margin-bottom: -500px;
        }
        .costos_comparacion_texto {
            text-align: center;
        }
    }
    @media only screen and (max-width : 550px) {

    .ahorro_text {
            font-size: 16px;
        }
        .container_button_precios_text {
            font-size: 14px;
        }
        .button_registro_ventajas {
            font-size:8px;
            width: 80%;
        }
    }
    @media only screen and (max-width : 530px) {
        .Comparacion_seguros_medicos_tittle {
            font-size: 27px;
        }
        .Premios_text_tittle {
            font-size: 24px;
        }
        .Premios_text {
            font-size: 14px;
        }
        .asesoriamiento_tittle {
            font-size: 32px;
        }
        .img_container {
            position: relative;
            left: 45px;
        }
        .img_container_2 {
            position:relative;
            left: 85px;
        }
        .img_container_3 {
            position:relative;
            left: 55px;
        }
        .img_container_4 {
            position: relative;
            left: 90px;
        }
        
    }
    @media only screen and (max-width : 515px) {
        .img_container { 
            position: relative;
            left: 5px;
        }
        .img_container_2 {
            position:relative;
            left: 50px;
        }
        .img_container_3 {
            position:relative;
            left: 22px;
        }
        .img_container_4 {
            position: relative;
            left: 50px;
        }
    }
    @media only screen and (max-width : 500px) {
        .Comparacion_seguros_medicos_tittle {
            font-size: 20px;
        }
        .Premios_text_tittle {
            font-size: 18px;
        }
        .Premios_text {
            font-size: 12px;
        }
        .img_container {
            position: relative;
            left: 5px;
        }
        .img_container_2 {
            position:relative;
            left: 15px;
        }
        .img_container_3 {
            position:relative;
            left: 22px;
        }
        .img_container_4 {
            position: relative;
            left: 20px;
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
        <div class="home1">
            <div class="row">
                <div class="col s12 m12 l12">
                    <div class="container">
                        <h1 class="comparacion_pulpo_tittle center-align">Krakenkassen-Vergleich</h1>
                        <h5 class="comparacion_pulpo_text center-align">Krakenkassenvergleich & kompetente Beratung vom Portal für unabhängige Versicherungsleistugen</h5>
                    </div>
                </div>
                <div class="col s12 m12 l12">
                    <div class="container">
                        <p class="Elegir_seguro_text center-align">Die Wahl der richtigen Krankenkasse in der Schwiez gilt als eine der wichtigsten Aufgaben, da zahllose Faktoren im Hinblick auf das bestmögliche individuelle Angebot berücksichtigt werden müssen. Ob Arcosana AG, Auxilia, Agrisano, Intras, Sodalis, Sangate oder  Groupe Mutuel - ein Krankenkassenvergleich aller Leistungspakete sowie der finanziellen montalichen belastungen, die auf den  Versicherten zukommen werder, gilt als grungdlegend elementar für die Suche nach der richtigen Krankenkassen </p>
                    </div>
                </div>
            </div>
            <!--Caja roja con texto de registro -->
            <div class="row">
                <div class="col s12 m7 l7">
                    <div class="container_input">
                        <div class="col s12 m6 l6 container_izq_inputs">
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
                        <!-- hasta aqui -->
                        <div class="col s12 m6 l6 container_der_inputs">
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
                        <div class="col s12 container_container_button">
                            <div class="center-align button_container_register">
                                <a class="button_compare waves-effect waves-light btn">Vergleichen sie Jetzt</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Caja rosada con formulario login -->
                <div class="col s12 m5 l5">
                    <div class="box-pink">
                        <div class="Premios"><!-- -->
                            <h4 class="Premios_text_tittle flow-text left-align white-text">Krakenkassenprämien 2021</h2>
                        </div>
                        <div class="container_p_login">
                            <p class="Premios_text left-align white-text">Prämie ab 179CHF pro Monat Erwachsene kinderprämie ab 60 CHF pro Monat Familienrabatt bis zu CHF 4`000 im Jahr!</p>
                        </div>
                        <div class="row">
                            <div class="col s12 m12 l12">
                                <div class="center-align container container_compartir">
                                   <img class="img_compartir responsive-img" src="/img/compartir.png" alt="" sizes="" srcset="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="Comparacion_seguros_medicos_container row">
                <div class="col s12 m12 l12">
                    <h1 class="Comparacion_seguros_medicos_tittle center-align">Krankenkassenvergleich</h1>
                    <div class="Comparacion_seguros_medicos_item col s12 m3 l3">
                        <div class="Comparacion_seguros_medico_img_container">
                            <img id="Familia" class="img_comparacion center-align responsive-img" src="/img/Familia.png" alt=""> 
                        </div>
                        <h6 class="Comparacion_seguro_titulos">Alle Krankenkassen vergleichen</h6>
                        <div class="Comparacion_seguros_medicos_item_text">
                            <p class="comparacion_item_text">In der Schweiz gibt es über 60 Krankenkassen, daher lohnt sich ein Krankenkassenvergleich mit  Krakenkassencompare. Die Prämien sind nach Kanton unterschiedlich und es lohnt sich auf jedenfall zu sparen.</p>
                        </div>
                    </div>

                    <div class="Comparacion_seguros_medicos_item col s12 m3 l3">
                        <div class="Comparacion_seguros_medico_img_container">
                            <img id="Celebracion" class="img_comparacion center-align responsive-img" src="/img/Celebracion.png" alt=""> 
                        </div>
                        <h6 class="Comparacion_seguro_titulos" >Unkompliziert sparen</h6>
                        <div class="Comparacion_seguros_medicos_item_text">
                            <p class="comparacion_item_text">Der unkompliziertes Krankenkassenvergleich der Schweiz mit wenigen Klicks, Sie erhalten unkimpliziert neutral und schnell lhre Angebot in ihrem Wohnkaton.</p>
                        </div>
                    </div>

                    <div class="Comparacion_seguros_medicos_item col s12 m3 l3">
                        <div class="Comparacion_seguros_medico_img_container">
                            <img id="Amigas" class="img_comparacion center-align responsive-img" src="/img/Amigas.png" alt=""> 
                        </div>
                        <h6 class="Comparacion_seguro_titulos" >Individueller Vergleich</h6>
                        <div class="Comparacion_seguros_medicos_item_text">
                            <p class="comparacion_item_text">Wir vergleichen Jugendliche wie Paare oder Familien. lhre Wünsche und Bedüfnisse stehen im Vordergrund. Ob ein Wechsel oder eine Anpassung, wir helfen lhnen das passende Angebot zu finden.</p>
                        </div>
                    </div>

                    <div class="Comparacion_seguros_medicos_item_last col s12  m3 l3">
                        <div class="Comparacion_seguros_medico_img_container">
                            <img id="Familia2" class="img_comparacion center-align responsive-img" src="/img/Familia2.png" alt=""> 
                        </div>
                        <h6 class="Comparacion_seguro_titulos" >Famillienvergleich</h6>
                        <div class="Comparacion_seguros_medicos_item_text">
                            <p class="comparacion_item_text" >Wir helfen ignen die günstigste Zahnzusatzversicherung für kinder. Nutzen Sie unseren Krankenkassevergleich.</p>
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
                <h1 class="container_tipo_seguros_tittle center-align" >VERSICHERUNGSARTEN</h1>
                <div class="col s12 m6 l6">
                    <div class="row">
                        <i class="container_icon_tipo_seguros medium material-icons">chevron_right</i>
                            <div>
                                <h4 class="container_tipo_seguros_tittles black-text">Krankenkassen</h4>
                            </div>
                            <div class="linea_gris"></div>
                    </div>
                    <div class="row">
                        <i class="container_icon_tipo_seguros medium material-icons">chevron_right</i>
                            <div>
                                <h4 class="container_tipo_seguros_tittles black-text">Retchtsschutz</h4>
                            </div>
                            <div class="linea_gris"></div>
                    </div>
                    <div class="row">
                        <i class="container_icon_tipo_seguros medium material-icons">chevron_right</i>
                            <div>
                                <h4 class="container_tipo_seguros_tittles black-text">Zusatzversicherung</h4>
                            </div>
                            <div class="linea_gris"></div>
                    </div>
                    <div class="row">
                        <i class="container_icon_tipo_seguros medium material-icons">chevron_right</i>
                            <div>
                                <h4 class="container_tipo_seguros_tittles black-text">Lebensversicherung</h4>
                            </div>
                            <div class="linea_gris"></div>
                    </div>
                    <div class="row">
                        <i class="container_icon_tipo_seguros medium material-icons">chevron_right</i>
                            <div>
                                <h4 class="container_tipo_seguros_tittles black-text">Autoversicherung</h4>
                            </div>
                            <div class="linea_gris"></div>
                    </div>
                    <div class="row">
                        <i class="container_icon_tipo_seguros medium material-icons">chevron_right</i>
                            <div>
                                <h4 class="container_tipo_seguros_tittles black-text">Hausrat & Privathaftpflitcht</h4>
                            </div>
                            <div class="linea_gris"></div>
                    </div>
                    <div class="row">
                        <i class="container_icon_tipo_seguros medium material-icons">chevron_right</i>
                            <div>
                                <h4 class="container_tipo_seguros_tittles black-text">Krakentaggeld</h4>
                            </div>
                            <div class="linea_gris"></div>
                    </div>
                </div>
                <div class="col s12 m6 l6">
                    <img class="responsive-img suiza_map" src="/img/suisse map.jpg" >
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m8 l8 container_que_es_SWIFFLEAD">
                <div class="box-red">
                    <div class="container_h2_text">
                        <h2 class="SWIFFLEAD_tittle white-text center-align">WAS IST EIN SWIFFLEAD?</h2>
                    </div>
                    <div class="container_parafo_redbox">
                        <h5 class="SWIFFLEAD_text container white-text center-align"> Ein Swifflead ist die Kombination einer Online-Versicherungsanfrage und einem Telefonkontakt</h5>
                    </div>
                </div>
            </div>
            <!-- Caja rosada con formulario login -->
            <div class="col s12 m4 l4">
                <div class="box_ligth_pink">
                    <div class="container_h2_login">
                        <h4 class=" asesoriamiento_tittle center-align black-text">Krankenkassen-Beratung</h4>
                    </div>
                    <div class="linea_gris"></div>
                    <div class="row">
                        <div class="container_p_login">
                            <h5 class="asesoriamiento_text left-align black-text">Sie haben Fragen zu lher Versicherung oder möchten mehr einsparen?</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="container_p_login">
                            <h5 class="asesoriamiento_text left-align black-text">Hier können Sie die Krankenkasse ganz einfach wechsein oder vergleichen</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="container_p_login">
                            <h5 class="asesoriamiento_text left-align black-text">Jetzt von Einzel- und Familienrabatt profitieren</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="container_p_login">
                            <h5 class="asesoriamiento_text left-align black-text">Schreiben Sie uns und Sie erhalten eine Rückmeldung am selben Tag</h5>
                        </div>
                    </div>
                    <div class="linea_punteada"></div>
                </div>
            </div>
        </div>
        <div class="contenedor_SwiffLAD row">
            <div class="col s12 m12 l12">
                <h1 class="SwiffLAD_tittle center-align">WIE ENTSTEHT EN  SwiffLAD?</h1>
                <div class="container_item_SwiffLAD col s12 m3 l3">
                    <div class="img_container">
                        <img id="perfil" class="center-align responsive-img" src="/img/perfil_logo.png" alt="">
                    </div>
                    <div class="text_container">
                        <p>Ein potenzieller Kunde übermittelt uns aif einer themenspezifischen Internetseite seine kompletten Kontaktangaben sowie weitere versicherungsrelevante Informationen.</p>
                    </div>
                </div>

                <div class="container_item_SwiffLAD col s12 m3 l3">
                    <div class="img_container_2">
                        <img id="lupa" class="center-align responsive-img" src="/img/lupa_logo.png" alt="">
                    </div>
                    <div class="text_container">
                        <p>Nach Eingang des so entstandenen Versicherungsleads nehmen wir mit dem Kunden Kontakt auf, prüfen die Angaben aus dem Lead und besprechen mit ihm sein Versicherungsbedurfnis. </p>
                    </div>
                </div>

                <div class="container_item_SwiffLAD col s12 m3 l3">
                    <div class="img_container_3">
                        <img id="consola" class="center-align responsive-img" src="/img/consola.png" alt="">
                    </div>
                    <div class="text_container">
                        <p>Mit unserem Versicherungscheck entdecken wir weiter Versicherungslücken und sprechen diese direkt an.</p>
                    </div>
                </div>

                <div class="col s12 m3 l3">
                    <div class="img_container_4">
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
                        <h4 class="servicios_adicionales left-align"> WEITERE DIENSTLEISTUNGEN: </h4>
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
                <div class="container_img_perfil_teclado row">
                    <div class="img_container_jetzt">
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
                    <h3 class="ventajas_comparacion white-text" >DIE VORTEILE GEGENÜBER KLASSISCHEN LEADS</h2>
                </div>
            </div>
            <div class="row">
                <div class="center-align col s12">
                    <h6 class="white-text">Telleads sind persölicher, reifer und terminiert Teleleads decken mehrere Versicherungsbedurfnisse wodurch aus einem Termin mehrere Versicherungsabschlüsse möglich sind.</h6>
                </div>
            </div>
            <div class="row">
                <div class="center-align col s12">
                    <h2 class="comparacion_potencial white-text">POTENTIALVERGLEICH</h2>
                </div>
            </div>
            <div class="row">
                <div class=" col s12 m6 l6">
                    <div class="small_box_pink">
                        <div class="center-align row">
                            <div class="small_box_blue">
                                <h2 class="classic_leads white-text">KLASSICHE LEADS</h2>
                            </div>
                        </div>
                        <div class="rigth-align container container_pink_up">
                                <h5 class="classic_leads_text white-text"> 3 Leads = max 1 Kundentermin</h5>
                        </div>
                        <div class="linea_gris"></div>
                        <div class="rigth-align container container_pink_down">
                                <h5 class="classic_leads_text white-text"> Pro Kundentermin = 1 Versicherungsabschluss</h5>
                        </div>
                    </div>
                </div>
                <div class=" col s12 m6 l6">
                    <div class="box_grey_ligth">
                        <div class="center-align row">
                            <div class="box_blue_ligth">
                                <h2 class="swifflead" >SWIFFLEAD</h2>
                            </div>
                        </div>
                        <div class="container_large left-align ">
                            <img class="img_incorrecto_leads" src="/img/no correcto-icon.png" alt="">
                            <h5 class="swifflead_text">1 Telelad = 1 Kundentermin</h5> 
                        </div>
                        <div class="linea_gris"></div>
                        <div class="container_large left-align ">
                            <img class="img_correcto_leads" src="/img/correcto-icon.png" alt="">
                            <h5 class="swifflead_text">1 Kundentermin = mehrere Versicherungsabschlüsse</h5>
                        </div>
                        <div class="linea_gris"></div>
                        <div class="container_large left-align ">
                            <img class="img_correcto_leads" src="/img/correcto-icon.png" alt="">
                            <h5 class="swifflead_text" > Krankenkasse</h5>
                        </div>
                        <div class="linea_gris"></div>
                        <div class="container_large left-align ">
                            <img class="img_correcto_leads" src="/img/correcto-icon.png" alt="">
                            <h5 class="swifflead_text" >Retchtsschutz</h5>
                        </div>
                        <div class="linea_gris"></div>
                        <div class="container_large left-align ">
                            <img class="img_correcto_leads" src="/img/correcto-icon.png" alt="">
                            <h5 class="swifflead_text">Lebensversicherung</h5>
                        </div>
                        <div class="linea_gris"></div>
                        <div class="container_large left-align ">
                            <img class="img_correcto_leads" src="/img/correcto-icon.png" alt="">
                            <h5 class="swifflead_text">Autoversicherung</h5>
                        </div>
                        <div class="linea_gris"></div>
                        <div class="container_large left-align ">
                            <img class="img_correcto_leads" src="/img/correcto-icon.png" alt="">
                            <h5 class="swifflead_text">Hausrat & Privathaftpflitcht</h5>
                        </div>
                        <div class="linea_gris"></div>
                        <div class="container_large left-align ">
                            <img class="img_correcto_leads" src="/img/correcto-icon.png" alt="">
                            <h5 class="swifflead_text">Krakenktaggeld</h5>
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
                <h1 class="costos_comparacion_tittle center-align">KOSTENVERGLEICH</h1>
            </div>
            <div class="row">
                <p class="center-align">Analog dazu der Kostenvergleich</p>
                <div class="col s12 m8 l8">
                    <p class="costos_comparacion_texto right-align">Erfahrungsgemäss resultieren aus 10 klassischen Leads im Durchschnitt 3 Kundentermine. Berechnnungsbeispiel:</p>
                </div>
                <div class="col s12 m4 l4">
                    <div class="box_ligth_pink">
                        <div class="container_h2_login">
                            <h4 class="asesoriamiento_tittle center-align black-text">Krankenkassen-Beratung</h4>
                        </div>
                        <div class="linea_gris"></div>
                        <div class="row">
                            <div class="container_p_login">
                                <h5 class="asesoriamiento_text left-align black-text">Sie haben Fragen zu lher Versicherung oder möchten mehr einsparen?</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="container_p_login">
                                <h5 class="asesoriamiento_text left-align black-text">Hier können Sie die Krankenkasse ganz einfach wechsein oder vergleichen</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="container_p_login">
                                <h5 class="asesoriamiento_text left-align black-text">Jetzt von Einzel- und Familienrabatt profitieren</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="container_p_login">
                                <h5 class="asesoriamiento_text left-align black-text">Schreiben Sie uns und Sie erhalten eine Rückmeldung am selben Tag</h5>
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
                    <div class="center-align ">
                        <div class="small_box_blue">
                            <h4 class="classic_leads_precio white-text">KLASSICHE LEADS</h4>
                        </div>
                    </div>
                    <div class="small_box_white center-align ">
                        <div class="container">
                            <h3 class="left-align">310 CHF,-</h3>
                        </div>
                    </div>
                    <div class="containers_container_pink">
                        <div class="rigth-align container">
                                <h6 class="white-text">Krankenkassen-Lead: 50 CHF,-</h6>
                        </div>
                        <div class="linea_gris"></div>
                        <div class="rigth-align container">
                                <h6 class="white-text">Rechtsschutz-Lead: 45 CHF,- </h6>
                        </div>
                        <div class="linea_gris"></div>
                        <div class="rigth-align container">
                            <h6 class="white-text">Zusatzversicherungs-Lead: 50 CHF,- </h6>
                        </div>
                        <div class="linea_gris"></div>
                        <div class="rigth-align container">
                                <h6 class="white-text">Lebensversicherungs-Lead: 85 CHF,-</h6>
                        </div>
                        <div class="linea_gris"></div>
                        <div class="rigth-align container">
                            <h6 class="white-text">Hausrat & Pirvathafpflicht-Lead: 40 CHF,-</h6>
                        </div>
                        <div class="linea_gris"></div>
                        <div class="rigth-align container">
                                <h6 class="white-text">Krakentaggeld-Lead: 40 CHF,-</h6>
                        </div>
                        <div class="linea_gris"></div>
                    </div>
                </div>
            </div>
            <div class="col s12 m6 l6">
                <div class="box_grey_ligth">
                    <div class="center-align ">
                        <div class="box_blue_ligth">
                            <h4 class="paquete_standart">SWIFFLEAD PAKET STANDARD</h2>
                        </div>
                    </div>
                    <div class="small_box_pink_paket center-align ">
                        <div class="container precio_swifflead">
                            <h3 class="left-align precio_leads_text white-text" >99 CHF</h3>
                            <p class="white-text flotar_derecha_iva iva" >exkl.Mwst.</p>
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
        <div class="footer">
            <p class="white-text center-align footer_text">© 2021   Swiffleads.ch All rigths reserved | Impressum | AGB</p>
        </div>  
    </div>
    
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>