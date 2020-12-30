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
        <title>DETALL COMANDA PHP</title>
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
        <h1>ORDER DETAIL</h1>
        <?php
            $sql_client="SELECT orderID, orders.CustomerID, CompanyName, ContactName, Phone, FirstName, LastName, Title, Extension, orders.EmployeeID
                         FROM orders
                         INNER JOIN customers ON orders.CustomerID=customers.CustomerID 
                         INNER JOIN employees ON orders.EmployeeID=employees.EmployeeID
                         WHERE OrderID = '".$_GET['orderid']."'";
            $sql_comanda="SELECT products.ProductID, ProductName, ROUND(products.UnitPrice,2) AS PreuUnitat, Quantity, Discount, (products.UnitPrice*Quantity)*(1-Discount) AS PreuTotal 
                         FROM `order_details`
                         INNER JOIN products ON order_details.ProductID=products.ProductID
                         WHERE OrderID = '".$_GET['orderid']."'";
            $clients = $conn->query($sql_client);
            $comandes = $conn->query($sql_comanda);
            $client = $clients->fetch_assoc();
            if($comandes->num_rows>0){
                $gross=0;
                ?>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div>COMPANY</div>
                            <div class="row">
                                <div class="col-4"><h5>Company Name:</h5></div>
                                <div class="col"><?php echo $client["CompanyName"];?></div>
                            </div>
                            <div class="row">
                                <div class="col-4"><h5>ID:</h5></div>
                                <div class="col"><?php echo $client["CustomerID"];?></div>
                            </div>
                            <div class="row">
                                <div class="col-4"><h5>Contact:</h5></div>
                                <div class="col"><?php echo $client["ContactName"];?></div>
                            </div>
                            <div class="row">
                                <div class="col-4"><h5>Phone:</h5></div>
                                <div class="col"><?php echo $client["Phone"];?></div>
                            </div>
                        </div>
                        <div class="col">
                            <div>EMPLOYEE</div>
                                <div class="row">
                                    <div class="col-4"><h5>Name:</h5></div>
                                    <div class="col"><?php echo $client["FirstName"]." ".$client["LastName"];?></div>
                                </div>
                                <div class="row">
                                    <div class="col-4"><h5>ID:</h5></div>
                                    <div class="col"><?php echo $client["EmployeeID"];?></div>
                                </div>
                                <div class="row">
                                    <div class="col-4"><h5>Title:</h5></div>
                                    <div class="col"><?php echo $client["Title"];?></div>
                                </div>
                                <div class="row">
                                    <div class="col-4"><h5>Phone:</h5></div>
                                    <div class="col"><?php echo $client["Extension"];?></div>
                                </div>
                        </div>
                    </div>
                    <?php echo "ORDER ID: ".$_GET['orderid'];?>
                    <table class="table table-hover table-dark">
                        <tr>
                            <th>Product ID</th>
                            <th>Product Name</th>
                            <th>Unit Price</th>
                            <th>Quantity</th>
                            <th>Discount</th>
                            <th>Final Price</th>
                        </tr>
                        <?php
                        while($comanda = $comandes->fetch_assoc()){
                            $gross+=$comanda["PreuTotal"];
                            ?>
                            <tr>
                                <td><?php echo $comanda["ProductID"];?></td>
                                <td><?php echo $comanda["ProductName"];?></td>
                                <td><?php echo $comanda["PreuUnitat"];?></td>
                                <td><?php echo $comanda["Quantity"];?></td>
                                <td><?php echo $comanda["Discount"];?></td>
                                <td><?php echo round($comanda["PreuTotal"],2);?></td>
                            </tr>
                            
                            <?php
                        }
                        ?>
                        <tr>
                            <td colspan='5'>Total gross</td>
                            <td><?php echo round($gross,2);?></td>
                        </tr>
                        <tr>
                            <td colspan='5'>21% IVA</td>
                            <td><?php echo $iva=round($gross*0.21,2);?></td>
                        </tr>
                        <tr>
                            <td colspan='5'>TOTAL</td>
                            <td><?php echo round($gross+$iva,2);?></td>
                        </tr>
                    </table>
                </div>
                <?php
            }
        ?>
    </body>
</html>