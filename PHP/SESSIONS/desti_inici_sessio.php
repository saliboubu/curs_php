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

        <style type="text/css">
            
        </style>    
    </head>
    <body>
        <?php
            $usuaris = array("sali" => "12345", "pep" => "abc");
            if(isset($_POST["usuari"]) && isset($_POST["contrasenya"])){
                $usuari = $_POST["usuari"];
                $contrasenya = $_POST["contrasenya"];
                if(array_key_exists($usuari, $usuaris)){
                    if($contrasenya == $usuaris[$usuari]){
                        $_SESSION["usuari"] = $usuari;
                        header("Location: http://localhost/curs_php/PHP/productes.php");
                        exit();                        
                    }
                }
                // if($usuari == "sali" && $contrasenya == "12345"){
                //     $_SESSION["usuari"] = $usuari;
                //     header("Location: http://localhost/curs_php/PHP/productes.php");
                // }
            }elseif(!isset($_POST["usuari"]) || !isset($_POST["contrasenya"])){
                header("Location: http://localhost/curs_php/PHP/inici_sessio.php?error=1");
                exit();
            }else{
                header("Location: http://localhost/curs_php/PHP/inici_sessio.php");
                exit();
            }

        ?>

    </body>
</html>