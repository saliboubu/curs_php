<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $databasename = "botiga_boka2";

    $conn = new mysqli($server,$username,$password,$databasename);
?>
    
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>CLIENTS PHP</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--CARREGAR FRAMEWORK DE JQUERY-->
        <script src="http://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script language="javascript">

        </script>
        <!--BOOTSTRAP-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.css" integrity="sha512-f73UKwzP1Oia45eqHpHwzJtFLpvULbhVpEJfaWczo/ZCV5NWSnK4vLDnjTaMps28ocZ05RbI83k2RlQH92zy7A==" crossorigin="anonymous" />
        <style type="text/css">
            
        </style>    
    </head>
    <body>
        <h1>CLIENTS</h1>
        <div class="container">
            <?php
                /*Quan es modifica informació del client*/
                if(isset($_GET['submit'])){
                    $sql="UPDATE customers 
                        SET CustomerID='".$_GET['text_ID']."', CompanyName='".$_GET['company']."',ContactName='".$_GET['contact']."',Address='".$_GET['adress']."',City='".$_GET['city']."',PostalCode='".$_GET['postal']."',Country='".$_GET['country']."',Phone='".$_GET['phone']."'
                        WHERE CustomerID='".$_GET['text_ID']."'";   
                }

                /*Desplegable dels països*/
                $sql_paisos = "SELECT Country FROM customers GROUP BY Country";
                $countries = $conn->query($sql_paisos);
            ?>
                <label for="select_pais">Country: </label>
                <form method="post" action="clients_principal.php"> 
                <select id="select_pais" name="paisos">
                    <option value="0">All</option>
            <?php
                while($country = $countries->fetch_assoc()){
            ?>
                    <option value="<?php echo $country["Country"];?>"><?php echo $country["Country"];?></option>
            <?php
                }
            ?>
                </select>
            </form>
            <?php

                /*Recolecta de dades*/
                $sql_clients = "SELECT * FROM customers";
                $clients = $conn->query($sql_clients);
                if($clients->num_rows>0){
            ?>
            
                <table class="table table-hover table-dark">
                <tr>
                    <th>CustomerID</th>
                    <th>Company Name</th>
                    <th>Contact Name</th>
                    <th>Adress</th>
                    <th>City</th>
                    <th>Postal Code</th>
                    <th>Country</th>
                    <th>Phone</th>
                    <th>Modify</th>
                    <th>Comandes</th>
                </tr>  
            
            <?php
                    while($client = $clients->fetch_assoc()){
            ?>
                        <tr>
                            <td><?php echo $client["CustomerID"];?></td>
                            <td><?php echo $client["CompanyName"];?></td>
                            <td><?php echo $client["ContactName"];?></td>
                            <td><?php echo $client["Address"];?></td>
                            <td><?php echo $client["City"];?></td>
                            <td><?php echo $client["PostalCode"];?></td>
                            <td><?php echo $client["Country"];?></td>
                            <td><?php echo $client["Phone"];?></td>
                            <td><a href="http://localhost/curs_php/PHP/BBDD/EX_BBDD_LLARG/editar_client.php?customerid=<?php echo $client["CustomerID"];?>"><i class="fas fa-pencil-alt"></i></a></td>
                            <td><a href="http://localhost/curs_php/PHP/BBDD/EX_BBDD_LLARG/veure_comandes.php?customerid=<?php echo $client["CustomerID"];?>"><i class="far fa-sticky-note"></i></a></td>
                        </tr>
            <?php
                    }
                }
            ?>
            </table>
        </div>
        <script language="javascript">
            $(function(){
                $("#select_pais").change(function(){
                    var pais = $("#select_pais").val();
                    $.ajax({
                        url: 'clients_principal.php',
                        type: 'GET',
                        data: {country: pais},
                        success: function(response){

                        }
                    });
                });
            });
        </script> 
        <?php 
            $pais = $_GET['country'];
            echo $pais;
        ?>
    </body>
</html>