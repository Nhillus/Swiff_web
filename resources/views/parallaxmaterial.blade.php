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
    <title>ParallaxMD</title>
</head>
<body>
    <div class="parallax-container">
        <div class="parallax">
            <img src="/img/seguro1.jpg">
        </div> 
    </div>

    <div class="black white-text center">
        <div class="container">
            <div class="section">
                <h3 class="blue-text">Hola Mundo!</h1>  
                <p> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat ratione natus eum. Exercitationem harum expedita ratione praesentium ea distinctio corrupti tenetur, voluptates cumque, tempore, minima ex! Optio harum quaerat itaque.</p>
            </div>  
        </div>
    </div>

    <div class="parallax-container">
        <div class="parallax">
            <img src="/img/seguro3.jpg">
        </div> 
    </div>

    <div class="black white-text center">
        <div class="container">
            <div class="section">
                <h3 class="blue-text">Hola Galaxia!</h1>  
                <p> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat ratione natus eum. Exercitationem harum expedita ratione praesentium ea distinctio corrupti tenetur, voluptates cumque, tempore, minima ex! Optio harum quaerat itaque.</p>
            </div>  
        </div>
    </div>

    <div class="parallax-container">
        <div class="parallax">
            <img src="/img/seguro2.jpg">
        </div> 
    </div>

    
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script> 
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.parallax');
        var instances = M.Parallax.init(elems);
    });
</script>
</body>
</html>