<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>NOVA CATEGORIA PHP</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--CARREGAR FRAMEWORK DE JQUERY-->
        <script src="http://code.jquery.com/jquery-3.5.1.min.js"></script>

        <!--BOOTSTRAP-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <style type="text/css">
            
        </style>    
    </head>
    <body>
        <form method="post" action="insertarcategoria.php">
            <label for="text_cat">CATEGORIA: </label>
            <input type="text" name="nom_categoria" id="text_cat" placeholder="Category Name">
            <br>
            <label for="text_desc">DESCRIPCIO: </label><br>
            <textarea name="descripcio" id="text_desc" placeholder="Description"></textarea>
            <br>
            <input type="submit" name="submit" value="ENVIAR">
        </form>
    </body>
</html>