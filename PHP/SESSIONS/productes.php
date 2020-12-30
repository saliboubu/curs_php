<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>PHP</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--CARREGAR FRAMEWORK DE JQUERY-->
        <script src="http://code.jquery.com/jquery-3.5.1.min.js"></script>

        <!--BOOTSTRAP-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.css" integrity="sha512-f73UKwzP1Oia45eqHpHwzJtFLpvULbhVpEJfaWczo/ZCV5NWSnK4vLDnjTaMps28ocZ05RbI83k2RlQH92zy7A==" crossorigin="anonymous" />

        <style type="text/css">
            .logout{
                position: relative;
                right: -970px;
                margin-right: 15px;
            }
            label{
                color: white;
                margin-top: 8px;
                position: relative;
                right: -950px;
            }
            img{
                display:block;
                margin: 0 auto;
            }
        </style>    
    </head>
    <body>
        <?php
        if(isset($_SESSION["usuari"])){
        ?>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="http://localhost/curs_php/PHP/productes.php">PRODUCTS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost/curs_php/PHP/clients.php">CLIENTS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost/curs_php/PHP/comandes.php">ORDERS</a>
                        </li>
                    </ul>
                    <label>
                        <i class="far fa-user"></i>
                        <?php
                            echo $_SESSION["usuari"];
                        ?>
                    </label>
                    <ul class="navbar-nav">
                        <li class="nav-item active logout">
                            <a class="nav-link" href="http://localhost/curs_php/PHP/logout.php">LOG OUT</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="container mt-3">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ut impedit mollitia nemo quaerat voluptatibus doloribus voluptatem reprehenderit nobis, iste perspiciatis sit eligendi ad exercitationem quibusdam saepe, at officiis autem sed!</p>
                <img src="couscous.jpg">
            </div>
        <?php    
        }else{
            header("Location: http://localhost/curs_php/PHP/inici_sessio.php");
            exit();
        }  
        ?>
        
    </body>
</html>