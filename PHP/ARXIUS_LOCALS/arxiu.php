<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>PUJAR ARXIU PHP</title> 
        <!-- Aquest arxiu s'encarrega de guardar la imatge en el servidor htdocs -->
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
            //Comprovar si la carpeta existeix i sino existeix crear-la
            if(!file_exists("Fotos")){
               mkdir("Fotos"); 
            }
            $nomarxiu = "Fotos/".basename($_FILES["foto"]["name"]); //Aagafa el nom de la foto sense la ruta

            if(move_uploaded_file($_FILES["foto"]["tmp_name"], $nomarxiu)){
                echo "arxiu carregat";
                echo "<img src=".$nomarxiu.">";
            }else{
                echo "problema pujant arxiu";
            }
        ?>
    </body>
</html>