<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $databasename = "botiga_boka2";

    $conn = new mysqli($server,$username,$password,$databasename);

    if(isset($_POST["submit"])){
        if($conn->connect_error){
            echo "Error al connectar amb la BBDD";
        }else{
            /*AFEGIR NOM PRODUCTE*/
            $sql_producte = "SELECT * FROM products WHERE ProductName ='".$_POST['nom_producte']."'";
            $productes = $conn->query($sql_producte);

            if($productes->num_rows>0){
                echo "El producte ja existeix";
            }else{
                $sql_nouprod = "INSERT INTO products (ProductName, UnitPrice, SupplierID, CategoryID, Discontinued) 
                                VALUES ('".$_POST['nom_producte']."','".$_POST['preu_producte']."','".$_POST['suppliers']."','".$_POST['descatalogat']."','".$_POST['categories']."')";

                if($conn->query($sql_nouprod)){
                    echo "S'ha inserir correctament";
                }else{
                    echo "No s'ha pogut inserir el producte a la BBDD";
                }
            }
        }
    }else{
        echo "No s'han rebut dades del formulari";
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>INSERIR PRODUCTE PHP</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--CARREGAR FRAMEWORK DE JQUERY-->
        <script src="http://code.jquery.com/jquery-3.5.1.min.js"></script>

        <!--BOOTSTRAP-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <style type="text/css">
            
        </style>    
    </head>
    <body>
        
    </body>
</html>