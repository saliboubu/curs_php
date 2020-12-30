<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>BOTIGA PHP</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!--CARREGAR FRAMEWORK DE JQUERY-->
        <script src="http://code.jquery.com/jquery-3.5.1.min.js"></script>

        <!--BOOTSTRAP-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.css" integrity="sha512-f73UKwzP1Oia45eqHpHwzJtFLpvULbhVpEJfaWczo/ZCV5NWSnK4vLDnjTaMps28ocZ05RbI83k2RlQH92zy7A==" crossorigin="anonymous" />
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Eczar&display=swap" rel="stylesheet">

        <style type="text/css">
            body{
                background-image: url("yoga.png");
            }
            .container{
                width: 45%;
                position: absolute;
                right: 0px;
                background-color: #624a59;
                height: 100%;
            }
            h2{
                text-align:center;
                margin-bottom: 10px!important;
            }
            p{
                text-align: center;
            }
            .horari{
                height: 310px;
                width: 70%;
                padding: 15px;
                margin: 25px auto;
                color: white;
                font-family: 'Eczar', serif;
                font-size: 14pt;
            }
            img{
                width: 19%;
                position: absolute;
                top: 112px;
                left: 121px;
                margin-left: 7%;
                margin-top:12px;
            }
            .pimg{
                margin-left:40%;
            }
            .mapa{
                width: 100%;
                border-top: 4px solid white;
                font-family: 'Eczar', serif;
                color: white;
            }
            .mapa h2{
                margin-top: 20px;
            }
            .festiu{
                width: 21%;
                left: 90px;
            }
            .map_google{
                margin: 0 auto;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="horari">
                <h2>NANDA HORARI</h2>
                <p class="mb-4">Sempre ens pots trobar de Dilluns a Divendres</p>
                <p class="pimg">9:00 h a 13:00 h</p>
                <p class="pimg">i</p>
                <p class="pimg">16:00 h a 20:00 h</p><br> 
                <?php
                    $mes = Date("F");
                    $dia = Date("j");
                    $hora = Date("H");
                    $minuts = Date("i");
                    $finde = Date("l");
                    $time_lapse = 60 - $minuts;
                    $festius = array("January" => array(1,6), "April" => array(10,13), "May" => array(1), "June" => array(1,24), "August" => array(15), "September" => array(11), "October" => array(12,29), "December" => array(8,25,26));
                    $festiu = 0;
                    if(array_key_exists($mes, $festius)){
                        $festiu = 0;
                        for($i=0; $i<sizeof($festius[$mes]); $i++){
                            if($dia==$festius[$mes][$i]){
                                $festiu = 1;
                            }
                        }
                    }
                    if($festiu == 0){
                        if($finde == "Saturday" || $finde == "Sunday"){
                    ?>
                        <p class='pimg'>Bon cap de setmana! Fins Dilluns</p>
                        <img src="festiu.png" class="festiu">
                    <?php
                        }else{
                            if($hora<9 || $hora>=20 || ($hora>=13 && $hora<16)){
                                if($hora == 8 || $hora == 15){
                        ?>
                            <p class='pimg'>Obrirem en <?php echo $time_lapse; ?> min</p>
                            <img src='obert.png'>
                        <?php
                                }else{
                        ?>
                            <p class='pimg'>Estem tancats</p>
                            <img src='tancat.png'>
                        <?php
                                }
                            }else{
                                if($hora == 12 || $hora == 19){
                        ?>
                            <p class='pimg'>Tancarem en <?php echo $time_lapse; ?> min</p>
                            <img src='tancat.png'>
                        <?php
                                }else{
                        ?>
                            <p class='pimg'>Estem oberts</p>
                            <img src='obert.png'>
                        <?php   
                                }
                            }
                        } 
                    }else{
                    ?>
                        <p class='pimg'>Aavui és festiu, ens veiem aviat!</p>
                        <img src="festiu.png" class="festiu">
                    <?php
                    } 
                ?>
            </div>

            <div class="mapa">
                <h2>MAPA NANDA</h2>
                <div id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3" class="map_google">
                    <div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3"></div>
                    <script language="javascript">
                        (function () {
                            var setting = {"height":225,"width":350,"zoom":16,"queryString":"Carrer Bailèn, 6, Gerona, Girona, España","place_id":"ChIJaSTLqSDnuhIRb-9Atm8Xehk","satellite":false,"centerCoord":[41.9799050142886,2.8179003999999885],"cid":"0x197a176fb640ef6f","lang":"es","cityUrl":"/spain/tossa-de-mar-2593","cityAnchorText":"Mapa de Tossa de Mar, Cataluña, España","id":"map-9cd199b9cc5410cd3b1ad21cab2e54d3","embed_id":"319887"};
                            var d = document;
                            var s = d.createElement('script');
                            s.src = 'https://1map.com/js/script-for-user.js?embed_id=319887';
                            s.async = true;
                            s.onload = function (e) {
                            window.OneMap.initMap(setting)
                            };
                            var to = d.getElementsByTagName('script')[0];
                            to.parentNode.insertBefore(s, to);
                        })();
                    </script>
                    <a href="https://1map.com/es/map-embed">1 Map</a>
                </div>    
            </div>
        </div>
    </body>
</html>
    