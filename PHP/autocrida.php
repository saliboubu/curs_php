<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>AUTOCRIDES PHP</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--CARREGAR FRAMEWORK DE JQUERY-->
        <script src="http://code.jquery.com/jquery-3.5.1.min.js"></script>

        <!--BOOTSTRAP-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <style type="text/css">
            
        </style>    
    </head>
    <body>
        <!-- Si passa X construeix aquesta plana, sino cosntrueix una altre -->
        <?php
            if(isset($_POST["nom"])){ //SI EM POSA EL NOM CARREGA SALUTACIO
        ?>
            <!-- VERSIO 2: SALUDAR --> 
            <p> Hola <?php echo $_POST["nom"]; ?>
        <?php
            }else{//SINO CARREGA EL FORMULARI
        ?>
        <!-- VERSIO 1: DEMANAR EL NOM -->
        <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
            <label for="txt_nom">NOM</label>
            <input type="text" name="nom" id="txt_nom"><br>
            <input type="submit" value="ENVIAR">    
        </form>
        <?php
            }
        ?>

    </body>
</html>