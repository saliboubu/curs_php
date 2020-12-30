<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>GELATS PHP</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--CARREGAR FRAMEWORK DE JQUERY-->
        <script src="http://code.jquery.com/jquery-3.5.1.min.js"></script>

        <!--BOOTSTRAP-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <style type="text/css">
            
        </style>    
    </head>
    <body>
        <?php
            if(isset($_POST["recipient"])){
                $recipient = $_POST["recipient"];
            }else{
                $recipient = "tarrina";
            }
            if(isset($_POST["gustos"])){
                $gust = $_POST["gustos"];
            }else{
                $gust = "coco";
            }

            switch($recipient){
                case "cucurutxo":
                    if($gust == "coco"){
        ?>
                        <h1>EL TEU GELAT COCONUTZ</h1>
                        <p>Has escollit el cruixent cucurutxo acompanyat del dolç coconutz. Esperem que gaudeixis del ball de sabors</p>
                        <img src="coco_cono.jpg">
        <?php
                    }elseif($gust == "mango"){
        ?>
                        <h1>EL TEU GELAT MANGO BOOZ</h1>
                        <p>Has escollit cruixent cucurutxo acompanyat de l'afrodisiac mango booz. Esperem que puguis arribar a sentir el trópic</p>
                        <img src="mango_cono.jpg"> 
        <?php
                    }else{
        ?>
                        <h1>EL TEU GELAT GERDIS</h1>
                        <p>Has escollit el cruixent cucurutxo revestit del sabor de bosc. Apropan'te a la natura</p>
                        <img src="gerd_cono.jpg">                             
        <?php
                    }
                break;
                case "tarrina":
                    if($gust == "coco"){
        ?>
                        <h1>EL TEU GELAT COCONUTZ</h1>
                        <p>Has escollit la tarrina de materials reciclats acompanyat del dolç coconutz. Esperem que gaudeixis del ball de sabors. Si plantes el recipient, obtindras una sorpresa</p>
                        <img src="coco_tarrina.jpg">
        <?php
                    }elseif($gust == "mango"){
        ?>
                        <h1>EL TEU GELAT MANGO BOOZ</h1>
                        <p>Has escollit la tarrina de materials reciclats acompanyat de l'afrodisiac mango booz. Esperem que puguis arribar a sentir el trópic. Si plantes el recipient, obtindras una sorpresa</p>
                        <img src="mango_tarrina.jpg"> 
        <?php
                    }else{
        ?>
                        <h1>EL TEU GELAT GERDIS</h1>
                        <p>Has escollit la tarrina de materials reciclats revestit del sabor de bosc. Apropan'te a la natura. Si plantes el recipient, obtindras una sorpresa</p>
                        <img src="gerd_tarrina.jpg"> 
        <?php
                    }
                break;
            }
        ?>

        <script language="javascript">
            $(function(){

            })
        </script>
    </body>
</html>