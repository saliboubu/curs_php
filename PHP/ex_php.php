<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>DATA PHP</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--CARREGAR FRAMEWORK DE JQUERY-->
        <script src="http://code.jquery.com/jquery-3.5.1.min.js"></script>

        <!--BOOTSTRAP-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <style type="text/css">
            .conteimg{
                width: 100%;
            }
            img{
                width: 75%;
            }
            body{
                text-align: center;
            }
            h1{
                margin: 0 auto;
            }
        </style>    
    </head>
    <body>
        <?php 
            $dia = date("H");
            $ruta = "";
            $titol = "";
            $paragraf = "";

            if($dia>=6 && $dia<=12){
                $titol = "BON DIA";
                $ruta = "dia.jpg";
                $paragraf = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea voluptates optio quia est quas laudantium suscipit corrupti quisquam beatae delectus? Architecto nulla iure repellendus atque! Vel, distinctio. Fuga, animi iure?"; 
            }elseif($dia>=13 && $dia<=19){ 
                $titol = "BONA TARDA";
                $ruta = "tarda.jpg";
                $paragraf = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea voluptates optio quia est quas laudantium suscipit corrupti quisquam beatae delectus? Architecto nulla iure repellendus atque! Vel, distinctio. Fuga, animi iure?";
            }elseif($dia>=20 || $dia<=5){ 
                $titol = "BONA NIT";
                $ruta = "nit.jpg";
                $paragraf = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea voluptates optio quia est quas laudantium suscipit corrupti quisquam beatae delectus? Architecto nulla iure repellendus atque! Vel, distinctio. Fuga, animi iure?";
            } 
        ?>
            <div class='container'>
                <div class='row'>
                    <h1><?php echo $titol ?></h1>    
                </div>
                <div class='row'>
                    <div class='conteimg'>
                        <img src= '<?php echo $ruta ?>'/>
                    </div>
                </div>
                <div class='row'>
                    <p> <?php echo $paragraf ?> </p>
                </div>
            </div>
            
    </body>
</html>