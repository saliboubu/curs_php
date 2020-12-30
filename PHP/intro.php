<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <?php 
            $titol = "BONES"
        ?>
        <title><?php echo $titol;?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--CARREGAR FRAMEWORK DE JQUERY-->
        <script src="http://code.jquery.com/jquery-3.5.1.min.js"></script>

        <!--BOOTSTRAP-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <style type="text/css">
            
        </style>    
    </head>
    <body>
        <h1>Bon dia</h1>

        <!--Dintre d'aquesta etiqueta anrià tot el codi de PHP -->
        <?php
            $missatge = "hola";
            $nom = "Sali";
            $color = "red";
            echo "<h2>Escrit amb php</h2>"; //comanda per treure en pantalla algun text
            echo "<p>Lorem, ipsum dolor ".$missatge." sit amet consectetur adipisicing elit. Omnis unde nisi tempora. Harum quibusdam cum at dignissimos eligendi ullam velit fugiat, error dolor eaque amet? Soluta deserunt quis eius eligendi!</p>";
            echo $missatge."<br>";
            
        ?>
        <p style="color:<?php echo $color;?>">Fins aviat <?php echo $nom; ?> </p>
        <script language="javascript">
            $(function(){

            })
        </script>
    </body>
</html>