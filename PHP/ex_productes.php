<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>ARRAYS PHP</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--CARREGAR FRAMEWORK DE JQUERY-->
        <script src="http://code.jquery.com/jquery-3.5.1.min.js"></script>

        <!--BOOTSTRAP-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <style type="text/css">
           h1{
               text-align: center;
               margin: 10px;
           }
           .table{
               width: 50%;
               text-align:center;
               margin: 0 auto;
           }
           .multiplicar{
               font-size: 10pt;
           }
        </style>    
    </head>
    <body>
        <h1>ARRAYS</h1>
        <?php
            $productes = array("","","");
            $imatges = array();
            $descripcio = array();

            for($i = 0 ; $i<count($jugadores) ; $i++){
                echo $jugadores[$i]."<br>";
            }
        ?>
    </body>
</html>