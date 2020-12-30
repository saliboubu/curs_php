<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $databasename = "botiga_boka2";

    $conn = new mysqli($server,$username,$password,$databasename);
    // if(isset($_GET['submit'])){
    //     $sql="UPDATE customers 
    //           SET CustomerID='".$_GET['text_ID']."', CompanyName='".$_GET['company']."',ContactName='".$_GET['contact']."',Address='".$_GET['adress']."',City='".$_GET['city']."',PostalCode='".$_GET['postal']."',Country='".$_GET['country']."',Phone='".$_GET['phone']."'
    //           WHERE CustomerID='".$_GET['text_ID']."'";

    //     if($conn->query($sql)){
    //         echo "S'ha actualitzat";
    //     }else{
    //         echo "No s'ha pogut actualitzar";
    //     }   
    // }else{
    //     echo "No s'ha trobat el boto submit";
    // }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>ACTUALITZAR DADES PHP</title>
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