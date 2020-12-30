<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>EQUIP PHP</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--CARREGAR FRAMEWORK DE JQUERY-->
        <script src="http://code.jquery.com/jquery-3.5.1.min.js"></script>

        <!--BOOTSTRAP-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <style type="text/css">
            
        </style>    
    </head>
    <body>
        <h1>APUNTA'T AL NOSTRE EQUIP</h1>
        <form action="equip.php" method="post">
            <label for="nom">NOM:</label>
            <input type="text" name="jugador" id="nom">
            <input type="submit" value="AFEGIR">
        </form>
        <div class="llistat">
            <h2>EQUIP ACTUAL</h2>
            <?php
                var i = 0;
                if(isset($_POST["jugador"])){
                    $jugador = $_POST["jugador"];
                    if($jugador != ""){
                        $arxiu = fopen("jugadors.txt","w") or die("Unable to find file"); //Si l'arxiu existeix te l'obre, si no te'l crea. Connectar amb l'arxiu en mode w = write
                        fwrite($arxiu,$jugador."\n");
                        fclose($arxiu);
                        i++;
                    }
                }else{
                    echo "Introdueix jugador";
                }

                if(file_exists("jugadors.txt")){
                    $arxiu = fopen("jugadors.txt","r") or die("Unable to find file");
                    while(!feof($arxiu)){
                        echo fgets($arxiu)."<br>";    
                    }
                    fclose($arxiu);    
                }else{
                    echo "Unable to load archive";
                }
                
            ?>
        </div>
    </body>
</html>