<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $databasename = "botiga_boka2";

    $conn = new mysqli($server,$username,$password,$databasename);
    
    /*Rebre dades formulari*/
    if(isset($_POST["submit"])){

        /*Connexió BBD*/
        if($conn->connect_error){
            echo "Error al connectar amb la BBDD";
        }else{

            /*Variables per comprovar que la consulta de l'usuari ja existeix o no*/
            $sql_comprovar="SELECT * FROM categories WHERE CategoryName = '".$_POST["nom_categoria"]."'";
            $resultats = $conn->query($sql_comprovar);

            /*Comprovar categories*/
            if($resultats->num_rows>0){
                echo "Categoria ja existeix";
            }else{
                /*Inserir nova cateogoria */
                $sql_add = "INSERT INTO categories (CategoryName, Description) 
                            VALUES('".$_POST["nom_categoria"]."','".$_POST["descripcio"]."')";
                if($conn->query($sql_add)){
                    echo "S'ha insertat correctament";
                }else{
                    echo "No s'ha pogut insertar";
                }
                /*Inserir nova cateogoria */    
            }

            /*Comprovar categories*/

        }
        /*Connexió BBD*/

    }else{
        echo "No s'han rebut dades del formulari";
    }
    /*Rebre dades formulari*/        
        
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>INSERTAR CATEGORIA PHP</title>
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