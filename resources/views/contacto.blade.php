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
        padding:10px 40px;
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
    .input_field {
        margin-bottom: 0px !important;
    }
    .input-field input[type=text] {
        background-color: white;
        border-radius: 10px; /* CSS3 */
        margin-top: 0px !important;
        margin-bottom: -10px !important;
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
       position: sticky; 
       float: right;
       bottom: 0px;
       right: 0px;
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
        height: fit-content;
        background-color: #fcebce
    }

    .asesoriamiento_text {
        padding-top: 20px;
    }

    .linea_punteada {
        border-bottom: 3px dashed black;
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
    .buttons_Herr {

    }
    .button_Frau {
    
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
      #container_email {
        margin-bottom: 0px!important;
        padding:0px 10px;
    }
    .button_sex_herr {
        border-radius: 10px;
        background-color: #fc6773;
        margin-right: 10px
    }
    .button_sex_Frau {
        color: #dbccb2;
        border-radius: 10px;
        background-color: #fffbdb;
        margin-left: 10px
    }
    .container_buttons {
        margin-top: 5px;
        margin-left: 40px;
    }
    .container_kontak {
        background-color: #fcebcd;
        margin: 40px 0px 40px 70px;
    }
    .contacto_text {
        position: relative;
        left: 20px;
        margin: 40px;
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
    textarea.materialize-textarea{
        height: 200px;
        background-color: #fd3957;   
    }
    .checkbox {
        margin-left: 90px;
    }
    .container_area {
        max-width: 820px;
        margin: 0px auto;
        margin-top: 50px;           
    }
    .comment {
        float: left;
        width: 100%;
        height: auto;
    }
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
        .asesoriamiento_tittle {
            font-size: 28px;
        }
    }
    @media only screen and (max-width : 987px) {
       
        #container_email {
            padding: 0px 0px;
        }
        .asesoriamiento_tittle {
            font-size: 26px;
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
            font-size: 24px;
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
            font-size: 20px;
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
        .asesoriamiento_tittle {
            font-size: 14px;
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
        .asesoriamiento_tittle {
            font-size: 12px;
            
        }
        .container_h2_login {
            padding: 10px;
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

    @media only screen and (max-width: 690px){ 
        .footer_text {
            font-size: 20px;
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
        .container_kontak {
            margin: 10px 0px 40px 10px;
         }
        .contacto_text {
          left:0px;
          margin:10px 0px;
        }
        .button_sex_Frau { 
            background-color:#ec0019;
        }
    }
    @media only screen and (max-width: 580px){
        .footer_text {
            font-size: 16px;
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
        <div class="container row">
            <h3 class="left-align">Kontakt</h3>
        </div>
        <div class="row">
            <div class="col s12 m8 l8">
                <p class="contacto_text">
                    Bitte f??llen Sie unser Kontaktformular aus und wir werden uns umgehend bei lhnen melden. Um die Kontaktaufnahme sicherzutellen, bitten wir Sie alle Angeben korrekt und komplett auszuf??llen. Je nach Auslastung wird die Kontaktaufnahme innerhalb wenigen Stunden erfolgen. Herzlichen Dank!
                </p>
                <p class="contacto_text"> Sie k??nnen uns auch direkt ??ber die Emailadresse info(at)krakenkassenversicherung.ch anschreiben.
                    Vergessen Sie nicht lhre Telefonnummer anzugeben, damit wir uns umgehend bei lhnen melden k??nnen.
                </p>
                <div class="row">
                    <div class="container_kontak">
                        <div class="row">
                            <div class="col s12 container_buttons">
                                <div class="container_buttons">
                                    <a class="button_sex_herr waves-effect waves-light btn">Herr</a>
                                    <a class="button_sex_Frau waves-effect waves-light btn">Frau</a>
                                </div>
                                    <div class="col s12 m6 l6">
                                        <div id="container_email container" class="row">
                                            <div class="inputs input-field col s12">
                                                <input placeholder="vorname" id="nombre" type="text" class="inputs black-text validate">
                                                <label for="nombre"></label>
                                            </div>
                                        </div>
                                        <div id="container_email container" class="row">
                                            <div class="inputs input-field col s8">
                                                <input placeholder="Strasse" id="Camino" type="text" class="inputs black-text validate">
                                                <label for="Camino"></label>
                                            </div>
                                            <div class="inputs input-field col s4">
                                                <input placeholder="Hausnr." id="Camino" type="text" class="inputs black-text validate">
                                                <label for="Camino"></label>
                                            </div>
                                        </div>
                                        <div id="container_email container" class="row">
                                            <div class="inputs input-field col s12">
                                                <input placeholder="Telefon" id="telefono" type="text" class="inputs black-text validate">
                                                <label for="telefono"></label>
                                            </div>
                                        </div>
                                        <div id="container_email container" class="row">
                                            <div class="inputs input-field col s12">
                                                <input placeholder="Geburtstag" id="email" type="text" class="inputs black-text validate">
                                                <label for="email"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col s12 m6 l6">
                                        <div id="container_email container" class="row">
                                            <div class="inputs input-field col s12">
                                                <input placeholder="Nachname" id="nombre" type="text" class="inputs black-text validate">
                                                <label for="nombre"></label>
                                            </div>
                                        </div>
                                        <div id="container_email container" class="row">
                                            <div class="inputs input-field col s4">
                                                <input placeholder="PLZ" id="Camino" type="text" class="inputs black-text validate">
                                                <label for="Camino"></label>
                                            </div>
                                            <div class="inputs input-field col s8">
                                                <input placeholder="Postfach/Zusatz" id="Camino" type="text" class="inputs black-text validate">
                                                <label for="Camino"></label>
                                            </div>
                                        </div>
                                        <div id="container_email container" class="row">
                                            <div class="inputs input-field col s12">
                                                <input placeholder="Ort" id="C??digo postal" type="text" class="inputs black-text validate">
                                                <label for="C??digo postal"></label>
                                            </div>
                                        </div>
                                        <div id="container_email container" class="row">
                                            <div class="inputs input-field col s12">
                                                <input placeholder="Auktuelle Krankenkasse" id="email" type="text" class="inputs black-text validate">
                                                <label for="email"></label>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div id="container_email" class="row">
                            <form class="col s12">
                                <div class="row container_area">
                                    <div class="inputs input-field col s12">
                                        <textarea placeholder="lhre Nachricht" id="mensaje" class="materialize-textarea"></textarea>
                                        <label for="mensaje"></label>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div>
                            <div class="checkbox" id="container_email">
                                <p>
                                    <label>
                                    <input type="checkbox" class="filled-in" checked="checked" />
                                    <span class="black-text">Ich best??tige die AGB gelesen zu haben und stimme dieser zu.</span>
                                    </label>
                                </p>
                            </div>
                        </div>
                            <div class="button_container">
                                <a class="waves-effect waves-light btn">REGISTRIEREN</a>
                            </div>
                    <div style="clear: both;"></div>
                    </div>
                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="box_ligth_pink">
                    <div class="container_h2_login">
                        <h4 class=" asesoriamiento_tittle center-align black-text">Krankenkassen-Beratung</h4>
                    </div>
                    <div class="linea_gris"></div>
                    <div class="row">
                        <div class="container_p_login">
                            <h5 class="asesoriamiento_text left-align black-text">Sie haben Fragen zu lher Versicherung oder m??chten mehr einsparen?</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="container_p_login">
                            <h5 class="asesoriamiento_text left-align black-text">Hier k??nnen Sie die Krankenkasse ganz einfach wechsein oder vergleichen</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="container_p_login">
                            <h5 class="asesoriamiento_text left-align black-text">Jetzt von Einzel- und Familienrabatt profitieren</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="container_p_login">
                            <h5 class="asesoriamiento_text left-align black-text">Schreiben Sie uns und Sie erhalten eine R??ckmeldung am selben Tag</h5>
                        </div>
                    </div>
                    <div class="linea_punteada"></div>
                </div>
            </div>
        </div>
        <div class="footer">
            <p class="white-text center-align footer_text">?? 2021   Swiffleads.ch All rigths reserved | Impressum | AGB</p>
        </div>
    </div>
</body>
</html>