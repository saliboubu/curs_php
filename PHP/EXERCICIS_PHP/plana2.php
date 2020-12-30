<?php
    session_start();
    
    if(isset($_POST["btn_submit"]) && isset($_SESSION["sessio"])){
        $nom = $_POST["nom"];
        $cognom = $_POST["cognom"];
        $edat = $_POST["edat"];
        $via = $_POST["via"];
        $nom_via = $_POST["residencia"];
        $num_via = $_POST["num"];
        $mobil = $_POST["mobil"];
        $correu = $_POST["correu"];
        $categoria = $_POST["categoria"];
        $imatges = array("Dansa"=>"dansa.jpg","Equitació"=>"equitacio.jpg","Snow"=>"snow.jpg","Surf"=>"surf.jpg","Vela"=>"sailing.jpg","Ciclisme"=>"bicis.jpg"); 
        session_destroy();
    }else{
        header("Location: http://localhost/curs_php/PHP/EXERCICIS_PHP/esportistes_ex_mig.php");
        exit();
    }

    class Esportista{
        public $nom;
        public $cognom;
        public $edat;
        public $via;
        public $nom_via;
        public $num_via;
        public $mobil;
        public $correu;
        public $categoria; 

        function __construct($dada_nom,$dada_cognom,$dada_edat,$dada_via,$dada_nomvia,$dada_numvia,$dada_mobil,$dada_correu,$dada_categoria){
            $this->nom = $dada_nom;
            $this->cognom = $dada_cognom;
            $this->edat = $dada_edat;
            $this->via = $dada_via;
            $this->nom_via = $dada_nomvia;
            $this->num_via = $dada_numvia;
            $this->mobil = $dada_mobil;
            $this->correu = $dada_correu;
            $this->categoria = $dada_categoria;
        } 
        public function calcular_categoria(){
            switch($this->categoria){
                case 'Dansa':
                    if($this->edat<=6){
                        $nivell='Prejuvenil';
                    }else if($this->edat>6 && $this->edat<=8){
                        $nivell='Juvenil I';    
                    }else if($this->edat>8 && $this->edat<=11){
                        $nivell='Juvenil II';    
                    }else if($this->edat>11 && $this->edat<=13){
                        $nivell='Junior I';    
                    }else if($this->edat>13 && $this->edat<=15){
                        $nivell='Junior II';    
                    }else if($this->edat>15 && $this->edat<=18){
                        $nivell='Youth';    
                    }else if($this->edat>18 && $this->edat<=19){
                        $nivell='Adult I';    
                    }else if($this->edat>19 && $this->edat<=25){
                        $nivell='Adult II';    
                    }else if($this->edat>25 && $this->edat<=35){
                        $nivell='Senior I';    
                    }else if($this->edat>35 && $this->edat<=45){
                        $nivell='Senior II';    
                    }else if($this->edat>45 && $this->edat<=55){
                        $nivell='Senior III';    
                    }else if($this->edat>55 && $this->edat<=62){
                        $nivell='Top Senior';    
                    }
                break;
                case 'Equitació':
                    if($this->edat>=9 && $this->edat<12){
                        $nivell='Aleví';
                    }else if($this->edat>=12 && $this->edat<14){
                        $nivell='Infantil';    
                    }else if($this->edat>=14 && $this->edat<16){
                        $nivell='Juvenil';    
                    }else if($this->edat>=16 && $this->edat<18){
                        $nivell='Jove Jinet';    
                    }else if($this->edat>=18){
                        $nivell='Adult';   
                    }
                break;
                case 'Snow':
                    if($this->edat<12){
                        $nivell='Groom';
                    }else if($this->edat>=12 && $this->edat<18){
                        $nivell='Rookie';    
                    }else if($this->edat>=18 && $this->edat<40){
                        $nivell='Senior';    
                    }else if($this->edat>=40){
                        $nivell='Legend';    
                    } 
                break;
                case 'Surf':
                    if($this->edat<12){
                        $nivell='Aleví sub12';
                    }else if($this->edat>=12 && $this->edat<14){
                        $nivell='Aleví sub14';    
                    }else if($this->edat>=14 && $this->edat<16){
                        $nivell='Cadete';    
                    }else if($this->edat>=16 && $this->edat<18){
                        $nivell='Juvenil';    
                    }else if($this->edat>=28 && $this->edat<35){
                        $nivell='Senior';    
                    }else if($this->edat>=35 && $this->edat<45){
                        $nivell='Master';    
                    }else if($this->edat>=45){
                        $nivell='Kahuna';    
                    }
                break;
                case 'Vela':
                    if($this->edat<=14){
                        $nivell='Infantil';    
                    }else if($this->edat>14 && $this->edat<18){
                        $nivell='Juvenil';    
                    }else if($this->edat>=18){
                        $nivell='Open';    
                    } 
                break;
                case 'Ciclisme':
                    if($this->edat>15 && $this->edat<=16){
                        $nivell='Cadet';    
                    }else if($this->edat>=17 && $this->edat<=18){
                        $nivell='Juvenil';    
                    }else if($this->edat>=18 && $this->edat<23){
                        $nivell='Sub23';    
                    }else if($this->edat>=23 && $this->edat<30){
                        $nivell='Elite';    
                    }else if($this->edat>=30){
                        $nivell='Màster';    
                    }  
                break;
            }
            return $nivell;
        }     
    }
    
    $jugador = new Esportista($nom,$cognom,$edat,$via,$nom_via,$num_via,$mobil,$correu,$categoria);
    
    
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>PLANTILLA PHP</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--CARREGAR FRAMEWORK DE JQUERY-->
        <script src="http://code.jquery.com/jquery-3.5.1.min.js"></script>

        <!--BOOTSTRAP-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <style type="text/css">
            .container{
                border: 1px solid black;
                width: 55%;
                padding-bottom: 10px;
                padding-left: 10px;
                border-radius: 25px;
                
                background-size: 100%;
                color: white;
            }
            p{
                margin-right:53%;
                margin-bottom: 5px;
                font-size: 10pt;
            }
            .p_edat{
                margin-right: 80%;
            }
            .p_domicili{
                margin-right: 71%;
            }
            .foto{
                height: 80%;
            }
            .footer_foto{
                margin-right: 40%;
            }
            .row{
                padding:10px 10px 0px 15px;
            }
            img{
                width:100%;
            }
            .nom_centre{
                margin: 0 auto;
            }
            .conte_info{
                margin: 0 auto;
            }
            .verticaltext{
                transform: rotate(-90deg);
                width: 177%;
                margin-top: 77px;
                font-size: 20px;
            }
            .img_logo{
                position: absolute;
                top: -3%;
                width: 274%;
                right: -22%;
            }
        </style> 
        <?php
            echo "<style>.container{background-image: url(".$imatges[$categoria].")}</style>";    
        ?>   
    </head>
    <body>
        <h3 class="text-center m-3">Felicitas, t'has inscrit correctament! Aqui tens la teva fitxa</h3>
        <div class="container">
            <div class="row conte_info">
                
                <div class="col-4">
                    <div class="row foto">
                        <?php
                        if(!file_exists("Fotos")){
                        mkdir("Fotos"); 
                        }
                        $nomarxiu = "Fotos/".basename($_FILES["foto"]["name"]);
                        if(move_uploaded_file($_FILES["foto"]["tmp_name"], $nomarxiu)){
                            echo "<img src=".$nomarxiu.">";
                        }else{
                            echo "Sense foto";
                        }
                        ?>
                    </div>
                    <div class="row categoria">
                        <p class="footer_foto">Grup | Group</p>
                        <h5><?php echo $jugador->categoria."-".$jugador->calcular_categoria();?></h5>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row nom_complet">
                        <p>Nom | Name</p>
                        <h5><?php echo $jugador->nom." ".$jugador->cognom; ?></h5>
                    </div>
                    <div class="row edat">
                        <p class="p_edat">Edat | Age</p>
                        <h5><?php echo $jugador->edat; ?></h5>
                    </div>
                    <div class="row domicili">
                        <p class="p_domicili">Adreça | Adress</p>
                        <h5><?php echo $jugador->via." ".$jugador->nom_via.", ".$jugador->num_via; ?></h5>
                    </div>
                    <div class="row mobil">
                        <p>Mòbil | Phone</p>
                        <h5><?php echo $jugador->mobil; ?></h5>
                    </div>
                    <div class="row correu">
                        <p>Correu | Email</p>
                        <h5><?php echo $jugador->correu; ?></h5>
                    </div>
                </div>
                <div class="col-2 logo">
                    <img class="img_logo" src="logo.png">
                    <!-- <p class="verticaltext">FOR-TY SPORTS</p> -->
                </div>
            </div>
        <div>
    </body>
</html>