<?php
    class Producte{
        public $nom;
        public $preu;
        public $quantitat;
        
        function __construct($dada_nom,$dada_preu,$dada_quantitat=100)
        {
            $this->nom=$dada_nom;
            $this->preu=$dada_preu;
            $this->quantitat=$dada_quantitat;
        }
    }
    class Roba extends Producte{ //La classe Roba és una extensió de la classe Producte
        public $talla;
    }
    class Gelat extends Producte{
        public $gust;
        function __construct($dada_nom,$dada_preu,$dada_gust,$dada_quantitat=100)
        {
            $this->nom=$dada_nom;
            $this->preu=$dada_preu;
            $this->gust=$dada_gust;
            $this->quantitat=$dada_quantitat;
        }
    }

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>HERENCIES PHP</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--CARREGAR FRAMEWORK DE JQUERY-->
        <script src="http://code.jquery.com/jquery-3.5.1.min.js"></script>

        <!--BOOTSTRAP-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <style type="text/css">
            
        </style>    
    </head>
    <body>
        <h1>Objectes-Herencies</h1>
        <?php
            $jersei = new Producte("Jersei de punt",15.95,2);
            $gelat = new Gelat("Gelat de Maduixa",4.5,"Mauduixa",3);
            echo "Tenim ".$jersei->quantitat." unitats del producte ".$jersei->nom;
        ?>
    </body>
</html>