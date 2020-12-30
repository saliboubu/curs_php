<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>PSEUDO BBDD PHP</title>
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
            $arxiu = fopen("dades.txt","w") or die("Unable to find file"); //Si l'arxiu existeix te l'obre, si no te'l crea. Connectar amb l'arxiu en mode w = write
            fwrite($arxiu,"Cols \n"); // fwrite (arxiu, q escriure) new line = \n 
            fwrite($arxiu,"Patates \n");
            fwrite($arxiu,"Naps \n");
            fclose($arxiu); //tancar connexió a l'arxiu
            //file_put_contents(); resumeix totes les línies de codi anterior, crear arxiu, escriu i tanca.
            echo "Data saved correctly on archive";
        ?>
    </body>
</html>