<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>LECTURA ARXIU PHP</title>
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
            $arxiu = fopen("dades.txt","r") or die("Unable to find file");
            while(!feof($arxiu)){ //mentre no hagis arribat a final de document
                echo fgets($arxiu)."<br>";    
            }
            fclose($arxiu);
            //per borrar un arxiu es fa mitjançant unlink("nom arxiu.extensio");
        ?>
    </body>
</html>