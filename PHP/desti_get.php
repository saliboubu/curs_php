<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>PHP</title>
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
            if(isset($_GET["producte"])){
                $producte = $_GET["producte"]; //$producte és el value de l'option, que és un valor numèric de 0 a 3
            }else{
                $producte = 0;
            }
            $productes = array("burguer.jpg","babaganoush.jpg","couscous.jpg","momos.jpg");
        ?>
        <img src="<?php echo $productes[$producte]; ?>"> 
        <!-- de l'array s'accedeix a la seva posició  -->
    </body>
</html>