<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>PARÀMETRES PHP</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--CARREGAR FRAMEWORK DE JQUERY-->
        <script src="http://code.jquery.com/jquery-3.5.1.min.js"></script>

        <!--BOOTSTRAP-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <style type="text/css">
            
        </style>    
    </head>
    <body>
        <h1>PARÀMETRES</h1>
        
        <form method="post" action="result_taula_multiplicar.php">
            <label for="num_usuari">NÚM:</label>
            <input type="number" name="num" value="0" id="num_usuari">
            <br>
            <input type="submit" value="ENVIAR" id="btn-send">    
        </form>
        
        <!-- Comprovar que funciona el botó -->
        <script language="javascript">
            $(function(){
                $("#btn-send").click(function(){
                    console.log("funciona")
                })
            })
        </script>
    </body>
</html>