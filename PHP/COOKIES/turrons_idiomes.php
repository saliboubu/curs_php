<?php
    include('cookies_idiomes.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>X-MAS PHP</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--CARREGAR FRAMEWORK DE JQUERY-->
        <script src="http://code.jquery.com/jquery-3.5.1.min.js"></script>

        <!--BOOTSTRAP-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <style type="text/css">
            .idiomes{
                position: absolute;
                right: 30px;
                margin-top: 8px;
            }
            .idiomes a{
                margin-right: 6px;
            }
            .mides{
                margin-left: 15px;
            }
            .petit{
                font-size: 8pt;
                margin-top: 6px;
            }
            .mitja{
                font-size: 12pt;                
            }
            .gran{
                font-size: 16pt;  
                margin-top: -5px;              
            }
        </style>    
    </head>
    <body>
        <?php
            $nav_bar = array("CA" => array("TURRONS","POLVORONS","XOCOLATES"), "ES" => array("TURRONES","POLVORONES","CHOCOLATES"), "EN" => array("NOUGATS","SHORTBREAD-COOKIES","CHOCOLATE"));
            
            switch($lang){
                case 'CA':
                    $nav_bar1 = $nav_bar[$lang][0];
                    $nav_bar2 = $nav_bar[$lang][1];
                    $nav_bar3 = $nav_bar[$lang][2];
                break;
                case 'ES':
                    $nav_bar1 = $nav_bar[$lang][0];
                    $nav_bar2 = $nav_bar[$lang][1];
                    $nav_bar3 = $nav_bar[$lang][2];
                break;
                case 'EN':
                    $nav_bar1 = $nav_bar[$lang][0];
                    $nav_bar2 = $nav_bar[$lang][1];
                    $nav_bar3 = $nav_bar[$lang][2];
                break;
            }
        ?>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">X-Mas</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="#"><?php echo $nav_bar1; ?><span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="#"><?php echo $nav_bar2; ?></a>
                    <a class="nav-item nav-link" href="#"><?php echo $nav_bar3; ?></a>
                    <div class="navbar-nav idiomes">
                        <a href="turrons_idiomes.php?lang=CA">CA</a>
                        <a href="turrons_idiomes.php?lang=ES">ES</a>
                        <a href="turrons_idiomes.php?lang=EN">EN</a>
                        <div class="navbar-nav mides align-bottom">
                            <a href="turrons_idiomes.php?size=6" class="gran">A</a>
                            <a href="turrons_idiomes.php?size=4" class="mitja">A</a>
                            <a href="turrons_idiomes.php?size=2" class="petit">A</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <div class="container">
            
        </div>
    </body>
</html>