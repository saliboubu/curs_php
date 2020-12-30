<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>get GELATS PHP</title>
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
            if(isset($_GET["recipient"])){
                $recipient = $_GET["recipient"];
            }else{
                $recipient = "cucurutxo";
            }
            if(isset($_GET["gustos"])){
                $gust = $_GET["gustos"];
            }else{
                $gust = "coco";
            }
            if(isset($_GET["mides"])){
                $mida = $_GET["mides"];
            }else{
                $mida = "petit";
            }

           switch($mida){
               case "petit":
                    if($gust == "coco"){
                        switch($recipient){
                            case "cucurutxo":
                            ?>
                                GELAT DE COCO PETIT EN CUCURUTXO
                            <?php
                            break;
                            case "tarrina":
                            ?>
                                GELAT DE COCO PETIT EN TARRINA
                            <?php
                            break;
                        }
                    }elseif($gust == "mango"){
                        switch($recipient){
                            case "cucurutxo":
                            ?>
                                GELAT DE MANGO PETIT EN CUCURUTXO
                            <?php
                            break;
                            case "tarrina":
                            ?>
                                GELAT DE MANGO PETIT EN TARRINA
                            <?php
                            break;
                        }
                    }else{
                        switch($recipient){
                            case "cucurutxo":
                            ?>
                                GELAT DE GERD PETIT EN CUCURUTXO
                            <?php
                            break;
                            case "tarrina":
                            ?>
                                GELAT DE GERD PETIT EN TARRINA
                            <?php
                            break;
                        }
                    }
               break;
               case "mitja":
                    if($gust == "coco"){
                        switch($recipient){
                            case "cucurutxo":
                            ?>
                                GELAT DE COCO MITJÀ EN CUCURUTXO
                            <?php
                            break;
                            case "tarrina":
                            ?>
                                GELAT DE COCO MITJÀ EN TARRINA
                            <?php
                            break;
                        }
                    }elseif($gust == "mango"){
                        switch($recipient){
                            case "cucurutxo":
                            ?>
                                GELAT DE MANGO MITJÀ EN CUCURUTXO
                            <?php
                            break;
                            case "tarrina":
                            ?>
                                GELAT DE MANGO MITJÀ EN TARRINA
                            <?php
                            break;
                        }
                    }else{
                        switch($recipient){
                            case "cucurutxo":
                            ?>
                                GELAT DE GERD MITJÀ EN CUCURUTXO
                            <?php
                            break;
                            case "tarrina":
                            ?>
                                GELAT DE GERD MITJÀ EN TARRINA
                            <?php
                            break;
                        }
                    }
               break;
               case "gran":
                    if($gust == "coco"){
                        switch($recipient){
                            case "cucurutxo":
                            ?>
                                GELAT DE COCO GRAN EN CUCURUTXO
                            <?php
                            break;
                            case "tarrina":
                            ?>
                                GELAT DE COCO GRAN EN TARRINA
                            <?php
                            break;
                        }
                    }elseif($gust == "mango"){
                        switch($recipient){
                            case "cucurutxo":
                            ?>
                                GELAT DE MANGO GRAN EN CUCURUTXO
                            <?php
                            break;
                            case "tarrina":
                            ?>
                                GELAT DE MANGO GRAN EN TARRINA
                            <?php
                            break;
                        }
                    }else{
                        switch($recipient){
                            case "cucurutxo":
                            ?>
                                GELAT DE GERD GRAN EN CUCURUTXO
                            <?php
                            break;
                            case "tarrina":
                            ?>
                                GELAT DE GERD GRAN EN TARRINA
                            <?php
                            break;
                        }
                    }
               break;
           } 
            
        ?>

        
    </body>
</html>