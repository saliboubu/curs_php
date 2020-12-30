<?php
    session_start();
    $_SESSION["sessio"]="";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>FORMULARI PHP</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--CARREGAR FRAMEWORK DE JQUERY-->
        <script src="http://code.jquery.com/jquery-3.5.1.min.js"></script>

        <!--BOOTSTRAP-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <style type="text/css">
            .contenidor{
                position: relative;
                height: 667px;
            }
			.contenidor:before {
				position: absolute;
				background: url('formulari2.jpg') no-repeat;
                background-size: 110%;
				top:0;
				bottom:0; 
				right: 0;
				left: 0;
				content: '';
				opacity: .5;
				z-index: -1;
 			}
            .conte_formulari{
                width: 50%;
                margin: 0 auto;
                padding: 15px;
                padding-bottom: 12px;
            }
            .btn{
                display:block;
                margin: 0 auto;
            }
            .custom-file{
                margin-top:32px;
            }
            #btn-submit{
                display: none;
            }

        </style>    
    </head>
    <body>
        <div class='container-fluid contenidor'>
            <div class='conte_formulari'>
                <h1 class='text-center'>CREA LA TEVA FITXA</h1>
                <form method="post" action="plana2.php" enctype="multipart/form-data">
                    <!-- NOM, COGNOM I EDAT -->
                    <div class="form-row">
                        <div class="form-group col-5">
                            <label for="txt_nom">Nom</label>
                            <input type="text" class="form-control" name="nom" id="txt_nom" placeholder="Nom">
                            <label id="nom"></label>
                        </div>
                        <div class="form-group col-5">
                            <label for="txt_cognom">Cognom</label>
                            <input type="text" class="form-control" name="cognom" id="txt_cognom" placeholder="Cognom">
                            <label id="cognom"></label>
                        </div>
                        <div class="form-group col-2">
                            <label for="anys">Edat</label>
                            <input type="text" class="form-control" name="edat" id="anys" placeholder="Edat">
                            <label id="edat"></label>
                        </div>
                    </div>
                    <!-- ADREÇA I MOBIL -->
                    <div class="form-row">
                        <div class="form-group col-8">
                            <label for="adreca">Addreça</label>
                            <div class="form-row">
                                <div class="form-group col-4">
                                    <select name="via" id="tipus_via" class="form-control">
                                        <option value="avinguda">Avinguda</option>
                                        <option value="cami">Cami</option>
                                        <option value="carrer">Carrer</option>
                                        <option value="carretera">Carretera</option>
                                        <option value="placa">Plaça</option>
                                        <option value="passeig">Passeig</option>
                                        <option value="rambla">Rambla</option>
                                    </select>
                                </div> 
                                <div class="form-group col-5">
                                    <input type="text" class="form-control" name="residencia" id="adreca" placeholder="Rutlla">    
                                </div>
                                <div class="form-group col-3">
                                    <input type="text" class="form-control" name="num" id="numero" placeholder="23">    
                                </div>  
                            </div>
                            <label id="domicili"></label>
                        </div>
                        <div class="form-group col-4">
                            <label for="phone">Móbil</label>
                            <input type="tel" class="form-control" name="mobil" id="phone" placeholder="635635635">
                            <label id="telefon"></label>
                        </div>
                    </div>
                    <!-- CORREU -->
                    <div class="form-group">
                        <label for="e-mail">Email</label>
                        <input type="text" class="form-control" name="correu" id="e-mail" placeholder="xxx@gmail.com">
                        <label id="correu"></label>
                    </div>
                    <!-- CATEGORIA I FOTO -->
                    <div class="form-row">
                        <div class="form-group col-4">
                            <label for="modalitat">Modalitat</label>
                            <select id="modalitat" name="categoria" class="form-control">
                                <option value="Dansa">Dansa</option>
                                <option value="Equitació">Equitació</option>
                                <option value="Snow">Snowboard</option>
                                <option value="Surf">Surf</option>
                                <option value="Vela">Vela</option>
                                <option value="Ciclisme">Ciclisme</option>
                            </select>
                            <label id="categories"></label>
                        </div>
                        <div class="custom-file col-8">
                            <input type="file" class="custom-file-input" name="foto" id="arxiu" accept="image/*" required>
                            <label class="custom-file-label" for="arxiu" id="seleccio_foto">Selecciona Foto...</label>
                            <label id="arxiu_foto"></label>
                        </div>
                    </div>
                    
                    <input type="button" value="COMPROVAR" class="btn btn-primary" id="btn-comprovar">
                    <input type="submit" name="btn_submit" value="SUBMIT" class="btn btn-dark" id="btn-submit">
                </form> 
            </div>
        </div>
        <script language="javascript">

            /*VALIDACIÓ DE DADES*/
            $(function(){
                var lletres_cognom = /^[a-zA-Z]+ [a-zA-Z]+$/;
                var lletres_nom = /^[a-zA-Z]+$/;
                var lletres_adreca = /^[a-zA-Z]+ [a-zA-Z]+ [a-zA-Z]+$/;

                $("#btn-comprovar").click(function(){
                    
                    var categoria = $("#modalitat").val(); //SELECTOR
                    var avis_categoria = $("#categories");

                    
                    /*COMPROVAR NOM*/
                    var nom = $("#txt_nom");
                    var avis_nom = $("#nom");
                    
                    if(nom.val() != "" && (lletres_nom.test(nom.val()) || lletres_cognom.test(nom.val()))){
                        $(nom).removeClass("is-invalid");
                        $(nom).addClass("is-valid");
                        $(avis_nom).html(""); 
                        var control_nom = 1;
                    }else{
                        $(nom).removeClass("is-valid");
                        $(nom).addClass("is-invalid");
                        $(avis_nom).html("El nom és obligatori");                  
                    }
                    
                    /*COMPROVAR COGNOM*/
                    var cognom = $("#txt_cognom");
                    var avis_cognom = $("#cognom");
                    
                    if(cognom.val() != "" && (lletres_cognom.test(cognom.val()) || lletres_nom.test(cognom.val()))){
                        $(cognom).removeClass("is-invalid");
                        $(cognom).addClass("is-valid");
                        $(avis_cognom).html(""); 
                        var control_cognom = 1;
                    }else{
                        $(cognom).removeClass("is-valid");
                        $(cognom).addClass("is-invalid");
                        $(avis_cognom).html("El cognom és obligatori");                    
                    }

                    /*COMPROVAR EDAT*/
                    var anys = $("#anys");
                    var avis_edat = $("#edat");

                    var edat_parse = parseInt(anys.val());
                    if( (Number.isNaN(edat_parse)) || (edat_parse == "") ){
                        $(anys).removeClass("is-valid");
                        $(anys).addClass("is-invalid");
                        $(avis_edat).html("Edat obligatoria");
                    }else if(edat_parse<0 || edat_parse>90){
                        $(anys).removeClass("is-valid");
                        $(anys).addClass("is-invalid");
                        $(avis_edat).html("L'edat ha de ser entre 0 a 90 anys");
                    }else{
                        $(anys).removeClass("is-invalid");
                        $(anys).addClass("is-valid");
                        $(avis_edat).html("");
                        var control_edat = 1;
                    }

                    /*COMPROVAR ADREÇA*/
                    var via = $("#tipus_via").val();
                    var nom_via = $("#adreca");
                    var num = $("#numero");
                    var avis_domicili = $("#domicili");

                    //Nom carrer de domicili
                    if(lletres_nom.test(nom_via.val())!="" || lletres_cognom.test(nom_via.val())!="" || lletres_adreca.test(nom_via.val()) != ""){
                        $(nom_via).removeClass("is-invalid");
                        $(nom_via).addClass("is-valid");
                        $(avis_domicili).html("");
                        var control_domicili = 1;
                    }else{
                        $(nom_via).removeClass("is-valid");
                        $(nom_via).addClass("is-invalid");
                        $(avis_domicili).html("Adreça no vàlida"); 
                        var control_adress = 1;   
                    }
                    //Número de domicili
                    if(num.val() != ""){
                        $(num).removeClass("is-invalid");
                        $(num).addClass("is-valid");
                        $(avis_domicili).html("");
                        var control_num = 1;
                    }else{
                        if(control_adress=1){
                            $(num).removeClass("is-valid");
                            $(num).addClass("is-invalid");
                            $(avis_domicili).html("Adreça no vàlida. Falta número");    
                        }else{
                            $(num).removeClass("is-valid");
                            $(num).addClass("is-invalid");
                            $(avis_domicili).html("Falta número");     
                        }
                        
                    }
                    
                    /*COMPROVAR MÒBIL*/
                    var mobil = $("#phone");
                    var avis_telefon = $("#telefon");

                    if(mobil.val() != "" && mobil.val().length == 9){
                        $(mobil).removeClass("is-invalid");
                        $(mobil).addClass("is-valid");
                        $(avis_telefon).html("");
                        var control_mobil = 1;
                    }else{
                        $(mobil).removeClass("is-valid");
                        $(mobil).addClass("is-invalid");
                        $(avis_telefon).html("Número de telèfon no vàlid");
                    }

                    /*COMPROVAR CORREU*/
                    var correu = $("#e-mail");
                    var avis_correu = $("#correu");
                    var email = correu.val().toLowerCase();

                    if( (email.indexOf("@") == -1) || (email == "") || (email.indexOf("@")<3) || (email.lastIndexOf(".") == -1) || (email.lastIndexOf(".")<email.indexOf("@")+3) ){
                        $(correu).removeClass("is-valid");
                        $(correu).addClass("is-invalid");
                        $(avis_correu).html("Correu no vàlid");
                    }
                    else{
                        $(correu).removeClass("is-invalid");
                        $(correu).addClass("is-valid");
                        $(avis_correu).html("");   
                        var control_correu = 1; 
                    }

                    /*COMPROVAR FOTO*/
                    var foto = $("#arxiu"); //COMPROVAR SI EXISTEIX O NO 
                    var avis_foto = $("#arxiu_foto");
                    var nom_foto = $("#seleccio_foto");

                    if(foto.val() != ""){
                        $(foto).removeClass("is-invalid");
                        $(foto).addClass("is-valid");
                        $(avis_foto).html("")
                        var control_foto = 1;
                    }else{
                        $(foto).removeClass("is-valid");
                        $(foto).addClass("is-invalid");
                        $(avis_foto).html("Adjunta una foto");
                    }

                    /*BOTÓ SUBMIT*/
                    if(control_nom == 1 && control_cognom == 1 && control_edat == 1 && control_domicili == 1 && control_num == 1 && control_mobil == 1 && control_correu == 1 && control_foto == 1){
                        $("#btn-comprovar").css("display","none");
                        $("#btn-submit").css("display","block");
                    }
                });
                /*FI VALIDACIO DE DADES*/

                /*FER APAREIXRE NOM DOCUMENT PUJAT*/
                $("input[id='arxiu']").change(function (e) {
                    var $this = $(this);
                    $this.next().html($this.val().split('\\').pop());
                });

            });
        </script>       
    </body>
</html>