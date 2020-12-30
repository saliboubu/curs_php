<?php
    $server="localhost";
    $username="root";
    $password="";
    $databasename="botiga_boka2";

    $conn = new mysqli($server,$username,$password,$databasename);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>BBDD I PHP</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--CARREGAR FRAMEWORK DE JQUERY-->
        <script src="http://code.jquery.com/jquery-3.5.1.min.js"></script>
        <!--BOOTSTRAP-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <!--FONTAWESOM-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.css" integrity="sha512-f73UKwzP1Oia45eqHpHwzJtFLpvULbhVpEJfaWczo/ZCV5NWSnK4vLDnjTaMps28ocZ05RbI83k2RlQH92zy7A==" crossorigin="anonymous" />
        <link rel="stylesheet" href="estil.css">
    </head>
    
    <body>
        <!-- Barra de navegació -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
            <div class="container">
                <!-- Brand -->
                <a class="navbar-brand" href="http://localhost/curs_php/PHP/EXERCICIS_PHP/ex_PHP_BBDD.php" target="_blank">
                    <strong>LOMBOK</strong>
                </a>

                <!-- Collapse -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Links -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Right -->
                    <ul class="navbar-nav nav-flex-icons">
                        <li>
                            <a href="#about_us" class="nav-link" target="_blank">Sobre Lombok</a>
                        </li>
                        <li class="nav-item">
                            <a href="#contacte" class="nav-link" target="_blank">
                                Contacte
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#map" class="nav-link" target="_blank">
                                Troba'ns
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
        <!-- Barra de navegació -->

        <!--Títols-->
        <div class="container titols">
            <div class="row titol"><h1>LOMBOK</h1></div>
            <div class="row subtitol"><h4>A la teva disposició tots els productes d'alimentació per comprar a l'engrós</h4></div>
            <form action="ex_PHP_BBDD.php" method="post" class="mt-4">
                <label for="text_prod"><i class="fas fa-search"></i></label>
                <input type="text" name="producte" id="text_prod" placeholder="Product Name..." value="aaaa">
            
                <select name="categoria" class="selector">
                    <?php
                        $sql_categories = "SELECT * FROM categories ORDER BY CategoryID";    
                        $categories = $conn->query($sql_categories);

                        if($categories->num_rows>0){
                            while($category = $categories->fetch_assoc()){
                    ?>
                                <option value="<?php echo $category["CategoryID"]; ?>"><?php echo $category["CategoryName"]?></option>
                    <?php
                            }
                        }else{
                    ?>
                        <p class="p_cerca"><?php echo "No hi ha categories disponibles"; ?></p>    
                    <?php
                        } 
                    ?>
                </select>
                <br>
                <input type="submit" name="submit" value="BUSCAR" id="btn-submit">
            </form>
        </div>
        <!--Títols-->

        <!--Carregar contingut-->
        <div class="container row row-cols-1 row-cols-md-3" id="contenidor">
            <?php
                if(isset($_POST["submit"])){
                    $prod_usuari = $_POST["producte"];
                    $categoria = $_POST["categoria"];
                    /* Distingir si la cerca es vol ver per totes les categories o una categoria en concret */
                    if($categoria == 0){
                        $sql_productes = "SELECT ProductName, ROUND(UnitPrice,2) AS Preu, UnitsinStock, Discontinued, Description
                                          FROM products 
                                          INNER JOIN categories ON products.CategoryID=categories.CategoryID
                                          WHERE ProductName LIKE '%$prod_usuari%'";
                    }else{
                        $sql_productes = "SELECT ProductName, ROUND(UnitPrice,2) AS Preu, UnitsinStock, Discontinued, Description
                                          FROM products 
                                          INNER JOIN categories ON products.CategoryID=categories.CategoryID
                                          WHERE ProductName LIKE '%$prod_usuari%' AND products.CategoryID = $categoria";
                    }

                    $productes = $conn->query($sql_productes);
                    
                    if($productes->num_rows>0){
                        while($producte = $productes->fetch_assoc()){
            ?>
                    <div class='col mb-4'>
                        <div class='card h-100 targeta'>
                            <div class='card-body'>
                                <div class="row justify-content-center titol_card mb-2">
                                    <h2 class='card-title text-center mt-3'><?php echo $producte["ProductName"]?></h2>
                                    <p><?php echo $producte["Description"]?></p>
                                </div>
                                <p><b>PREU </b><?php echo $producte["Preu"]; ?>€</p>
                                <p>
                                    <b>
                                    <?php
                                        if($producte["Discontinued"] == 1){
                                    ?>
                                        <p class="disponibilitat"><?php echo "No disponible"; ?></p>    
                                    <?php
                                        }
                                    ?>
                                    </b>
                                </p>
                            </div>
                        </div>
                    </div>        
            <?php
                        }
                    }else{
            ?>
                <p class="p_cerca"><?php echo "No s'ha trobat cap coincidencia amb la cerca: ".$prod_usuari;?></p>
            <?php 
                    }
                }else{
            ?>
                   <p class="p_cerca"><?php echo "Comença la teva cerca";?></p> 
            <?php
                }
            ?>

        </div>
        <!--Carregar contingut-->

        <!-- Footer -->
        <footer class="page-footer font-small blue pt-4">

            <!-- Footer Links -->
            <div class="container-fluid text-center text-md-left">

                <!-- Grid row -->
                <div class="row">

                    <!-- Grid column -->
                    <div class="col-md-8 col-lg-5 mt-md-0 mt-3 p-4">
                        
                        <!-- Content -->
                        <h2 class="text-uppercase mb-4"><a name="about_us"></a>LOMBOK</h2>
                        <p class="p_footer">És una empresa que neix al sí d'Indonesia, amb l'ideda de facilitar la compra d'aliments a l'engrós, arreu del món. Amb el principal objectiu, d'aporpar els sabors de totes les cultures, a l'abast de tothom</p>

                    </div>
                    <!-- Grid column -->

                    <hr class="clearfix w-100 d-md-none pb-3">

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 mb-md-0 mb-3">
                        
                        <!-- Links -->
                        <h5 class="text-uppercase"><a name="contacte"></a>Contacta'ns</h5>

                        <ul class="list-unstyled">
                            <li>
                                <a href="https://www.google.com/maps/place/Lombok+Epicentrum+Mall/@-8.5945291,116.0750278,14z/data=!4m13!1m7!3m6!1s0x2dcdb7d23e8cc745:0x446689c4ab50d8c9!2sLombok!3b1!8m2!3d-8.650979!4d116.3249438!3m4!1s0x2dcdbf6436d5117d:0x3e70e3bb2865dfb5!8m2!3d-8.5934067!4d116.1045831"><i class="fas fa-map-marker-alt"></i> Jl. Sriwijaya No.333, Punia, Kec. Mataram, Kota Mataram, Nusa Tenggara Bar. 83127, Indonesia</a>
                            </li>
                            <li>
                                <a href="tel:+623706172999"><i class="fas fa-phone"></i> +623706172999</a>
                            </li>
                            <li>
                                <a href="mailto: info@lombok.com"><i class="fas fa-envelope"></i> info@lombok.com</a>
                            </li>
                        </ul>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-8 col-lg-4 mb-md-0 mb-3 mapa">
                        
                        <!-- Links -->
                        <h5 class="text-uppercase"><a name="mapa"></a>Troba'ns</h5>
                        <div id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3" class="map_google">
                        <div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3"></div>
                            <script language="javascript">
                                (function () {
                                    var setting = {"height":225,"width":350,"zoom":17,"queryString":"XL Center Epicentrum Mataram, Jl. Sriwijaya No.333, Punia, Kec. Mataram, Kota Mataram, Nusa Tenggara Bar. 83127, Indonesia","place_id":"ChIJER3xcGa_zS0RqeMSHk_hT7o","satellite":false,"centerCoord":[-8.593434502399798,116.10447560000001],"cid":"0xba4fe14f1e12e3a9","lang":"es","cityUrl":"/indonesia/gili-trawangan-40852","cityAnchorText":"Mapa de Gili Trawangan, Lombok Island, Indonesia","id":"map-9cd199b9cc5410cd3b1ad21cab2e54d3","embed_id":"325467"};                                    var d = document;
                                    var s = d.createElement('script');
                                    s.src = 'https://1map.com/js/script-for-user.js?embed_id=319887';
                                    s.async = true;
                                    s.onload = function (e) {
                                    window.OneMap.initMap(setting)
                                    };
                                    var to = d.getElementsByTagName('script')[0];
                                    to.parentNode.insertBefore(s, to);
                                })();
                            </script>
                            <a href="https://1map.com/es/map-embed">1 Map</a>
                        </div>
                        

                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

            </div>
            <!-- Footer Links -->

            <!-- Copyright -->
            <div class="footer-copyright text-center py-3">© 2018 Copyright:
                <a href="https://mdbootstrap.com/education/bootstrap/"> LOMBOK &copy</a>
            </div>
            <!-- Copyright -->

        </footer>
        <!-- Footer -->
    </body>
</html>