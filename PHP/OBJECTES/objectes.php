<?php
    class Cotxe{
        public $marca;
        public $model;
        public $color;
        public $places; //Valor que es dóna per defecte però es pot canviar 
        public $km=0;
        public $preu=0;

        function __construct($dada_marca,$dada_model,$dada_color, $dada_places = 5){ //quan es creei una instancia de l'objecte, una copia crea un objecte amb places = 5;
            $this->marca = $dada_marca;
            $this->model = $dada_model;
            $this->color = $dada_color;
            $this->places = $dada_places;
        }
        function __destruct() //quan la pàgina s'acabi de carregar es destrueix X element. Quan s'acaben de carregar totes les dades del PHP elimina el que se l'indica
        {
            echo "S'ha eliminat el cotxe".$this->marca." ".$this->model."<br>";
        }
        public function fer_viatge($km_fets){
            $this->km += $km_fets; //Versió ampliada de la funció($this->km = $this->km+$km_fets;)
        }
        public function calcular_valor($desgast_km = 0.5){
            $valor = $this->preu -($this->km/$desgast_km);
            return $valor;
        }
    }

    $cotxe_sali = new Cotxe("Tesla", "XS", "Plati", 4);
    $cotxe_sali->fer_viatge(300);
    $cotxe_sali->preu=2200;
    $valor_actual = $cotxe_Sali->calcular_valor(0.8);//En aquesta variable es guarda el return $valor; El desgast de km es pot indicar si no vols el que hi ha per defecte
    $cotxe_pilui = new Cotxe("Porsche","Terrano","Negre");
    //Si no es crea funció es cridarien així les propietats, amb la funció es pot fer directament en el parentesis
    // $cotxe_Sali -> marca = "Tesla";
    // $cotxe_Sali -> color = "Platí";
    // $cotxe_Sali -> places = 4;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>OBJECTES PHP</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--CARREGAR FRAMEWORK DE JQUERY-->
        <script src="http://code.jquery.com/jquery-3.5.1.min.js"></script>

        <!--BOOTSTRAP-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <style type="text/css">
            
        </style>    
    </head>
    <body>
        <h1>Objectes</h1>
        <h2>Cotxe Sali</h2>
        <?php echo $cotxe_sali->marca; ?><br>
        <?php echo $cotxe_sali->model; ?><br>
        <?php echo $cotxe_sali->color; ?><br>
        <?php echo $cotxe_sali->places; ?><br>
        <?php echo $cotxe_sali->km."km"; ?><br>
        <?php echo "El valor actual del cotxe és de: ".$valor_actual."€"; ?>
        <h2>Cotxe Piluli</h2>
        <?php echo $cotxe_pilui->marca; ?><br>
        <?php echo $cotxe_pilui->model; ?><br>
        <?php echo $cotxe_pilui->color; ?><br>
        <?php echo $cotxe_pilui->places; ?><br>
    </body>
</html>