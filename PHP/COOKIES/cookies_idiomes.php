<?php
    if(isset($_GET["lang"])){
        setcookie("idioma",$_GET["lang"],time()+(60*60*24*30));
        $lang = $_GET["lang"]; //Quan l'usuari està nagevant per la web i canvia d'idioma
    }else{
        if(isset($_COOKIE["idioma"])){
            $lang = $_COOKIE["idioma"]; //Si la cookie existeix ha de prendre el valor de l'idioma seleccionat. CAS: l'usuari després d'uns dies ha entrat de nou a la pàgina i s'ha guardat la selecció d'idioma que va escollir inicialment
        }else{
            $lang="ES"; //per defecte t'ensenya la pàgina en castellà, com si t'ha de mostrar un logo.
        }
    }
    
    if(isset($_GET["size"])){
        setcookie("mida", $_GET["size"],time()+(60*60*24*30));
        $mida = $_GET["size"];
    }else{
        if(isset($_COOKIE["mida"])){
            $mida = $_COOKIE["mida"];
        }else{
            $mida = "12";
        }
    }
    
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>IDIOMES PHP</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--CARREGAR FRAMEWORK DE JQUERY-->
        <script src="http://code.jquery.com/jquery-3.5.1.min.js"></script>

        <!--BOOTSTRAP-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <style type="text/css">
            
        </style>    
    </head>
    <body>
        <!-- <a href="cookies_idiomes.php?lang=CA">CA</a>
        <a href="cookies_idiomes.php?lang=ES">ES</a>
        <a href="cookies_idiomes.php?lang=EN">EN</a> -->
 
            <!-- if(isset($_COOKIE["idioma"])){
                echo $_COOKIE["idioma"];
            }
            if(isset($_GET["lang"])){
                $lang = $_GET["lang"];
                if($lang == 'CA'){
                    echo "PÀGINA EN CATALÀ";
                }elseif($_GET["lang"] == 'ES'){
                    setcookie("idioma",$_GET["lang"],time()+(60*60*24*30));
                    setcookie("idioma","CA", time());
                    setcookie("idioma","EN", time());
                    echo "PÀGINA EN CASTELLÀ";
                }elseif($_GET["lang"] == 'EN'){
                    setcookie("idioma",$_GET["lang"],time()+(60*60*24*30));
                    setcookie("idioma","CA", time());
                    setcookie("idioma","ES", time());
                    echo "PÀGINA EN ANGLÈS";
                } 
            }
            
            setcookie("idioma",$_GET["lang"],time()+(60*60*24*30)); -->

    </body>
</html>