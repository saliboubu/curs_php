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
        <title> VEURE COMANDES PHP</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--CARREGAR FRAMEWORK DE JQUERY-->
        <script src="http://code.jquery.com/jquery-3.5.1.min.js"></script>

        <!--BOOTSTRAP-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.css" integrity="sha512-f73UKwzP1Oia45eqHpHwzJtFLpvULbhVpEJfaWczo/ZCV5NWSnK4vLDnjTaMps28ocZ05RbI83k2RlQH92zy7A==" crossorigin="anonymous" />
        <style type="text/css">
            
        </style>    
    </head>
    <body>
        <div class="container">
            
            <?php
                $sql_comandes = "SELECT CustomerID, orders.OrderID, ProductID, UnitPrice, Quantity, Discount, FirstName, LastName, Title, Extension, orders.EmployeeID 
                                FROM orders
                                INNER JOIN order_details ON orders.OrderID=order_details.OrderID
                                INNER JOIN employees ON orders.EmployeeID=employees.EmployeeID
                                WHERE CustomerID='".$_GET['customerid']."'";
                $sql_client = "SELECT * FROM customers WHERE CustomerID='".$_GET['customerid']."'";
                $comandes = $conn->query($sql_comandes);
                $clients = $conn->query($sql_client);
                $client = $clients->fetch_assoc();
                if($comandes->num_rows>0){
                    ?>
                    <div class="container">
                    <h1>ORDERS</h1>
                        <div class="row">
                            <div class="col">
                                <div class="row">
                                    <div class="col-2"><h5>Company Name:</h5></div>
                                    <div class="col"><?php echo $client["CompanyName"];?></div>
                                </div>
                                <div class="row">
                                    <div class="col-2"><h5>ID:</h5></div>
                                    <div class="col"><?php echo $client["CustomerID"];?></div>
                                </div>
                                <div class="row">
                                    <div class="col-2"><h5>Contact:</h5></div>
                                    <div class="col"><?php echo $client["ContactName"];?></div>
                                </div>
                                <div class="row">
                                    <div class="col-2"><h5>Phone:</h5></div>
                                    <div class="col"><?php echo $client["Phone"];?></div>
                                </div>
                                <div class="row">
                                    <div class="col-2"><h5>Adress:</h5></div>
                                    <div class="col"><?php echo $client["Address"].", ".$client["City"].", ".$client["Country"]." (".$client["PostalCode"].")";?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <table class="table table-hover table-dark">
                        <tr>
                            <th>Order ID</th>
                            <th>Employee</th>
                            <th>EmployeeID</th>
                            <th>Title</th>
                            <th>Extension</th>
                            <th>Scope</th>
                        </tr>
                    <?php
                    while($comanda = $comandes->fetch_assoc()){
                        ?>
                        <tr>
                            <td><?php echo $comanda["OrderID"];?></td>
                            <td><?php echo $comanda["FirstName"]." ".$comanda["LastName"];?></td>
                            <td><?php echo $comanda["EmployeeID"];?></td>
                            <td><?php echo $comanda["Title"];?></td>
                            <td><?php echo $comanda["Extension"];?></td>
                            <td><a href="http://localhost/curs_php/PHP/BBDD/EX_BBDD_LLARG/detallcomanda.php?orderid=<?php echo $comanda["OrderID"];?>"><i class="fas fa-eye"></i></a></td>
                        </tr>

                    <?php
                    }
                }
            ?> 
            </table>
        </div>
    </body>
</html>