<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $databasename = "botiga_boka2";

    $conn = new mysqli($server,$username,$password,$databasename);
    $sql = "SELECT * FROM categories WHERE CategoryID=".$_GET['categoria']."";
    $categories = $conn->query($sql);
    $categoria = $categories->fetch_assoc();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>FORMULARI CATEGORIA PHP</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--CARREGAR FRAMEWORK DE JQUERY-->
        <script src="http://code.jquery.com/jquery-3.5.1.min.js"></script>

        <!--BOOTSTRAP-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <style type="text/css">
            
        </style>    
    </head>
    <body>
        <form method='post' action='actualitzarcategoria.php'>
            NOM:
            <input type="text" name="nom" value="<?php echo $categoria["CategoryName"];?>">
            <input type="hidden" name="categoryID" value="<?php echo $_GET["categoria"];?>">
            <input type="submit" name="submit">
        </form>
        
    </body>
</html>