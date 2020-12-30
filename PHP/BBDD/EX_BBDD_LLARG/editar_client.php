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
        <title>EDITAR CLIENT PHP</title>
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
                $sql = "SELECT * FROM customers WHERE CustomerID = '".$_GET['customerid']."'";
                $clients = $conn->query($sql);  
                if($clients->num_rows>0){
        ?>
                <form method="get" action="clients_principal.php">
        <?php
                    while($client = $clients->fetch_assoc()){
        ?>
                        <label for="custom_id">Customer ID:</label>
                        <input type="text" id="custom_id" name="text_ID" value="<?php echo $client["CustomerID"];?>"><br>
                        <label for="company">Company Name:</label>
                        <input type="text" id="company" name="company" value="<?php echo $client["CompanyName"];?>"><br>
                        <label for="contact">Contact Name:</label>
                        <input type="text" id="contact" name="contact" value="<?php echo $client["ContactName"];?>"><br>
                        <label for="address">Adress:</label>
                        <input type="text" id="address" name="adress" value="<?php echo $client["Address"];?>"><br>
                        <label for="ciutat">City:</label>
                        <input type="text" id="ciutat" name="city" value="<?php echo $client["City"];?>"><br>
                        <label for="cp">Postal Code:</label>
                        <input type="text" id="cp" name="postal" value="<?php echo $client["PostalCode"];?>"><br>
                        <label for="pais">Country:</label>
                        <select name="country">
                            <?php
                                $sql_country = "SELECT Country FROM customers GROUP BY (Country)";
                                $countries = $conn->query($sql_country);
                               
                                while($country = $countries->fetch_assoc()){
                                    ?>
                                    <option value="<?php echo $country["Country"];?>" <?php if($country["Country"]==$client["Country"]){echo "selected";}?>> <?php echo $country["Country"];?> </option>
                                    <?php
                                }
                            ?>
                        </select><br>
                        <label for="mobil">Phone:</label>
                        <input type="text" id="mobil" name="phone" value="<?php echo $client["Phone"];?>"><br>
                        <input type="submit" name="submit" value="MODIFY">
        <?php
                    }
        ?>
                </form> 
        <?php   
                }  
        ?> 
    </body>
</html>