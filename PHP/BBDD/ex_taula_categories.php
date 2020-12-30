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
        <title>CATEGORIES BBDD PHP</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--CARREGAR FRAMEWORK DE JQUERY-->
        <script src="http://code.jquery.com/jquery-3.5.1.min.js"></script>

        <!--BOOTSTRAP-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <style type="text/css">
            .table{
                width: 50%;
                margin: 0 auto;
            }
            .first{
                text-align: center;
            }
        </style>    
    </head>
    <body>
        <h1>CATEGORIES</h1>
        <table class="table table-sm table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">CategoryID</th>
                    <th scope="col">Category Name</th>
                    <th scope="col">Description</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql = "SELECT * FROM categories";
                    $categories = $conn->query($sql);

                    if($categories->num_rows>0){
                        while($category = $categories->fetch_assoc()){
                        ?>
                        <tr>
                            <td class="first"><?php echo $category["CategoryID"];?></td>
                            <td><?php echo $category["CategoryName"];?></td>
                            <td><?php echo $category["Description"];?></td>
                        </tr>
                        <?php
                        }
                    }else{
                        echo "No hi ha empleats disponibles";
                    }
                ?>
            </tbody>
        </table>
    </body>
</html>