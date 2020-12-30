<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $databasename = "botiga_boka2";

    //Connexio per procediment
    // $connexio = mysqli_connect($server,$username,$password,$databasename); //això realitza la connexio a bbdd, si pot accedir o no a bbdd

    // if(!$connexio){
    //     echo "Connexio erronia".mysqli_connect_error();
    // }else{
    //     echo "connexio amb exit";
    // }

    //Connexio per objectes
    $conn = new mysqli($server,$username,$password,$databasename);
    // if($conn->connect_error){
    //     echo "Connexio erronia".$conn->connect_error; //connect_error et permet veure l'error. és una variable interna de la connexio
    // }else{
    //     echo "connexio amb exit";
    // }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>CONNECTAR BBDD PHP</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--CARREGAR FRAMEWORK DE JQUERY-->
        <script src="http://code.jquery.com/jquery-3.5.1.min.js"></script>

        <!--BOOTSTRAP-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <style type="text/css">
            
        </style>    
    </head>
    <body>
        <h1>CONNECTANT BBDD: CUSTOMERS</h1>
        <?php
            $sql_countries = "SELECT DISTINCT(Country) FROM customers ORDER BY Country";
            $countries = mysqli_query($conn,$sql_countries);
            if(mysqli_num_rows($countries)>0){
                while($country = mysqli_fetch_assoc($countries)){
                    ?>
                        <a href="connectar_bbdd.php?country=<?php echo $country["Country"];?>"><?php echo $country["Country"];?></a>
                    <?php
                }
            }
            
        ?>
        <a href="connectar_bbdd.php">Tots</a>
        
        <br><br>
        <?php
            if(isset($_GET["country"])){
                $country = $_GET["country"];
                $sql = "SELECT * FROM customers WHERE Country='".$country."'";    
            }else{
                // $country = "France";
                $sql = "SELECT * FROM customers";
            }
            
            
            $customers = mysqli_query($conn,$sql); //connexió a la bbase de dades i la consulta que vols fer-hi

            //Comprovar sempre si es reben les dades 
            if(mysqli_num_rows($customers)>0){//Retorna el numero de row dde la taula de customers, és a dir el número de dades superior a zero
                //$customer = mysqli_fetch_assoc($customers); //Accedeix a la primera fila de resultats de la col·lecció de customers
                while($customer = mysqli_fetch_assoc($customers)){ //Amb el while accedim a tots el valors
                    echo $customer["ContactName"]." (".$customer["Phone"].")<br>";    
                }
                
            }else{
                echo "No hi ha dades";
            }
            mysqli_close($conn);
        ?>
    </body>
</html>