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
        <title>NOU PRODUCTE PHP</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--CARREGAR FRAMEWORK DE JQUERY-->
        <script src="http://code.jquery.com/jquery-3.5.1.min.js"></script>

        <!--BOOTSTRAP-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <style type="text/css">
            
        </style>    
    </head>
    <body>
        <h1>NOU PRODUCTE</h1>
        <form method="post" action="insertarproducte.php">
            <!-- NOM PRODUCTE -->
            <label for="text_producte">PRODUCTE: </label>
            <input type="text" name="nom_producte" id="text_producte" placeholder="Nom del producte">
            <br>
            <!-- PREU PRODUCTE -->
            <label for="text_preu">PREU: </label>
            <input type="text" name="preu_producte" id="text_preu" placeholder="14.00">
            <br>
            <!-- DESPLEGABLE SUPPLIERS -->
            <?php
                $sql_suppliers = "SELECT * FROM suppliers ORDER BY CompanyName";
                $suppliers = $conn->query($sql_suppliers);

                if($suppliers->num_rows>0){
            ?>
                <label for="distribuidor">DISTRIBUIDORS: </label>
                <select name="suppliers" id="distribuidor">
                    <option value="0"></option>
                    <?php
                        while($supplier = $suppliers->fetch_assoc()){
                            ?>
                            <option value="<?php echo $supplier["SupplierID"];?>"><?php echo $supplier["CompanyName"];?></option>
                            <?php
                        }
                    ?>
                </select>
            <?php
                }
            ?>
            <!-- PRODUCTE DESCATELOGAT -->
            <br>
            <label for="disponibilitat">DISPONIBILITAT: </label>
            <?php
                $sql_descatalogat="SELECT Discontinued FROM products GROUP BY Discontinued";
                $descatalogats = $conn->query($sql_descatalogat);
                if($descatalogats->num_rows>0){
                    ?>
                    <select name="descatalogat" id="disponibilitat">
                        <option value=""></option>
                        <?php
                            while($descatalogat = $descatalogats->fetch_assoc()){
                                if($descatalogat["Discontinued"]==0){
                                ?>
                                    <option value="<?php echo $descatalogat["Discontinued"];?>">Disponible</option>
                                <?php    
                                }else{
                                ?>
                                    <option value="<?php echo $descatalogat["Discontinued"];?>">No disponible</option>
                                <?php
                                }
                                
                            }
                        ?>
                    </select>
                    <?php
                }
            ?>
            <!-- DESPLEGABLE CATEGORIES -->
            <br>
            <label for="category">CATEGORIA: </label>
            <?php
                $sql="SELECT * FROM categories ORDER BY CategoryName";
                $categories = $conn->query($sql);
                if($categories->num_rows>0){
            ?>
            <select name="categories" id="category">
                <option value ="0"></option>
                <?php
                    while($categoria = $categories->fetch_assoc()){
                        ?>
                            <option value=<?php echo  $categoria["CategoryID"] ;?>><?php echo $categoria["CategoryName"];?></option>
                        <?php
                    }
                ?>
            </select>
            <?php
                }else{
                ?>
                    <!-- Quan entres les dades d'un nou producte des del formulari i no s'ha pogut crear el desplegable de categories, quan li donis submit al formulari, enviarà les dades del producte amb un CategoryID = 0, en cas de tenir el desplegable enviarà el CategoryID = value seleccionat en el desplegable -->
                    <input type="hidden" name="nova_categoria" value="0">
                <?php
                }
                ?>
            <br>
            <input type="submit" name="submit">
        </form>
    </body>
</html>