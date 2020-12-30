<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>TAULER PHP</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--CARREGAR FRAMEWORK DE JQUERY-->
        <script src="http://code.jquery.com/jquery-3.5.1.min.js"></script>

        <!--BOOTSTRAP-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <style type="text/css">
            
        </style>    
    </head>
    <body>
        <h1>TAULER</h1>
        <?php
            $tauler = array("fila0" => array("x","o","x"), "fila1" => array("o","x","o") , "fila2" => array("x","x","o"));
            echo $tauler["fila2"][0];
            // sense que sigui array associativa $tauler = array(array("x","o","x"), array("o","x","o") , array("x","x","o"));
            //echo $tauler[1][0];
            
        ?>
        <script language="javascript">
            $(function(){

            })
        </script>
    </body>
</html>