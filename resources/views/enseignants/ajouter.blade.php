<!DOCTYPE html>
<!--[if IE 8 ]>
<html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
    <![endif]-->
    <!--[if (gte IE 9)|!(IE)]><!-->
    <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
        <!--<![endif]-->
        <head>
            <!-- Basic Page Needs -->
            <meta charset="utf-8">
            <!--[if IE]>
            <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
            <![endif]-->
            <title>OCP</title>
            <!-- Bootstrap  -->
            <link rel="stylesheet" type="text/css" rel="stylesheets" href="{{asset('css/bootstrap.css')}}">
            <!-- Theme Style -->
            <link rel="stylesheet" type="text/css" rel="stylesheets" href="{{asset('css/formu.css')}}">
            <link href="stylesheets/magic-check.css" rel="stylesheet">
            <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('assetss/ico/apple-touch-icon-144-precomposed.png')}}">

        <!-- CSS Global -->
       
        </head>
        <body style="margin:0; font-family: Montserrat,-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji";>
           
        <nav class="navbar navbar-expand-lg navbar-dark" id="mainNav" style="padding-top:20px; background-color:white;">
    <div class="container" style="width:960px; margin:auto">
    <div style="font-size:25px; padding-top:5px; padding-bottom:25px;" class="logo-title  wow fadeInUp" data-wow-delay="0.8s" > <a href="/"><a href="/"> <img src="{{asset('/img/Logo_OIF.jpg')}}" alt="" style="width:120px;"> </a><span style="font-size:25px; color:green;" class="fa  fa-calendar"></span> </a> </div>                                
     
     
    </div>
  </nav>
        
        <div class="container" style="width:960px; margin:auto; ">
        <h6> @if (session('message'))
                        <div class="alert alert-success" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif</h6>
            <h1 class="bg-info text-white text-center p-2 fixed-top"></h1>
            <main class="content" role="content" style="margin-top:-70px;">
                <section id="section1">
                    <div class="container-fluid col-md-6 col-md-offset-3">
                        <!-- MultiStep Form -->
                        <form id="regForm" method="post" action="{{route('entreprise.ajouter')}}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <h1>Formulaire pour la candidature des professeurs</h1>
                            <!-- One "tab" for each step in the form: -->
                            <div class="tab">
                                <div class="titre">Prénom:</div>
                                <p><input placeholder="Prénom" oninput="this.className = ''" name="prenom" required></p>
                                <div class="titre">Nom:</div>
                                <p><input placeholder="Nom" oninput="this.className = ''" name="nom" required></p>
                                <div class="titre">Age:</div>
                                <p><input placeholder="Age" oninput="this.className = ''" name="age" required></p>
                                <div class="titre">Téléphone:</div>
                                <p><input placeholder="téléphone" oninput="this.className = ''" name="mobile" required></p>
                                <div class="titre">Email:</div>
                                <p><input type="email" placeholder="exemple@...." oninput="this.className = ''" name="email" required></p>
                                <p>
                                <div class="titre">Région:</div>
                                    <select name="region" id="region" required>
                                        <option selected>--Selectionner région--: </option>
                                        <option id="d" >Dakar</option> 
                                        <option id="t">Thies</option>  
                                        <option id="l">Louga</option> 
                                        <option id="s">Saint-louis</option>  
                                        <option id="f">Fatick</option>
                                        <option id="k">Kaolack</option>
                                        <option id="z">Ziguinchor</option>

                                    </select>
                                </p>

                                <p>
                                <div class="titre">Ville:</div>
                                    <select name="ville"  id="dakar" required>
                                        <option selected>--Selectionner ville--: </option>
                                        <option>Dakar</option>
                                        <option>Pikine</option>
                                        <option>Guediawaye</option>
                                        <option>Rufisque</option> 
                                    </select>  
                                    <select name="ville"  id="thies" required>
                                        <option selected>--Selectionner ville--: </option>
                                        <option>Thies</option>
                                        <option>Mbour</option>
                                        <option>Tivaouane</option> 
                                    </select> 
                                    <select name="ville"  id="louga" required>
                                        <option selected>--Selectionner ville--: </option>
                                        <option>Louga</option>
                                        <option>Kebemer</option>
                                        <option>Linguere</option> 
                                    </select>   
                                    <select name="ville"  id="saint" required>
                                        <option selected>--Selectionner ville--: </option>
                                        <option>Saint-Louis</option>
                                        <option>Dagana</option>
                                        <option>Podor</option>
                                    </select> 
                                    <select name="ville"  id="fatick" required>
                                        <option selected>--Selectionner ville--: </option>
                                        <option>Fatick</option>
                                        <option>Foundiougne</option>
                                        <option>Gossas</option>
                                    </select> 
                                    <select name="ville"  id="kaolack" required>
                                        <option selected>--Selectionner ville--: </option>
                                        <option>Kaolack</option>
                                        <option>Guinguinéo</option>
                                        <option>Nioro du Rip</option>
                                    </select>
                                    <select name="ville"  id="zig" required>
                                        <option selected>--Selectionner ville--: </option>
                                        <option>Ziguinchor</option>
                                        <option>Bignona</option>
                                        <option>Oussouye</option>
                                    </select>      

                                </p>

                                <p>
                                <div class="titre">Renseigner votre dernier Diplôme:</div>
                                    <select name="deniere_diplome" required>
                                        <option selected>--Selectionner votre dernier Diplôme--: </option>
                                        <option>CAEM</option> 
                                        <option>CAES</option>  
                                        <option>Doctorat</option>

                                    </select>
                                </p>
                                <p>
                                  <div class="titre"> <label>Votre établissement en 2019/2020:</label></div>
                                <input class="form-control"  name="ecole" placeholder="Votre établissement en 2019/2020" value="" autocomplete="ecole" autofocus="">
                                </p>

                                <p>
                                  <div class="titre"> <label>Ville ou commune de votre établissement:</label></div>
                                <input class="form-control"  name="localite" placeholder="Ville ou commune de votre établissement" value="" autocomplete="localite" autofocus="">
                                </p>


                                <div class="titre"> <label>Combien d'années d'expérience:</label></div>
                                <p><input placeholder="année d expérience" oninput="this.className = ''" name="année_exper" required></p>

                                

                                <div class="titre">Avez-vous une expérience en FOS, FLE, Français professionel: Oui ou Non</div>
                                <p>
                                <div class="radio">
                                   <input style="width: auto; margin-bottom: 15px;" type="radio" name="experience" class="check" value="Oui">Oui <br>
                                    <input style="width: auto; margin-bottom: 15px;" type="radio" name="experience" value="Non">Non<br>
                                   
                                </div>
                                </p>
                                <div class="titre"> <label>Numéro de la carte d'identité nationale:</label></div>
                                <p><input type="number" placeholder="Numéro de la carte d identité national" oninput="this.className = ''" name="num_cni" required></p>
                                
                                <div class="titre"> <label>Votre CV en PDF:</label></div>
                                <p><input type="file" oninput="this.className = ''" name="cv_file" required></p>

                                <hr>


                            </div>
  
                            <div style="overflow:auto;">
                                <div style="float:right;">
                                    <button id="ok" type="submit" >S'inscrire</button>
                                </div>
                            </div>
                            <!-- Circles which indicates the steps of the form: -->
                            <div style="text-align:center;margin-top:40px;">
                                
                          </div>

                        </form>
                        <!-- /.MultiStep Form -->
                    </div>
                </section>
            </main>
            <!-- /content -->
            <!-- alerts are for fun of it -->
            <div class="alerts-container">
                <div class="row">
                    <div id="timed-alert" class="alert alert-info animated tada" role="alert">
                        <span id="time"></span>
                    </div>
                </div>
                <div class="row">
                    <div id="click-alert" class="alert alert-warning" role="alert">
                    </div>
                </div>
            </div>
            </div>
            <script src="{{asset('js/formu.js')}}"></script>
            <!-- Global site tag (gtag.js) - Google Analytics -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=UA-142287871-1"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

            <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-142287871-1');
            </script>

            <script>


    $('#dakar').hide();
    $('#thies').hide();
    $('#louga').hide();
    $('#saint').hide();
    $('#fatick').hide();
    $('#kaolack').hide();
    $('#zig').hide();

$('#d').click(function(){
        $('#dakar').show();
        $('#thies').hide();
        $('#louga').hide();
        $('#saint').hide();
        $('#fatick').hide();
        $('#kaolack').hide();
        $('#zig').hide();
        });
$('#t').click(function(){
        $('#dakar').hide();
        $('#thies').show();
        $('#louga').hide();
        $('#saint').hide();
        $('#fatick').hide();
        $('#kaolack').hide();
        $('#zig').hide();
});
$('#l').click(function(){
        $('#dakar').hide();
        $('#thies').hide();
        $('#louga').show();
        $('#saint').hide();
        $('#fatick').hide();
        $('#kaolack').hide();
        $('#zig').hide();
});
$('#s').click(function(){
        $('#dakar').hide();
        $('#thies').hide();
        $('#louga').hide();
        $('#saint').show();
        $('#fatick').hide();
        $('#kaolack').hide();
        $('#zig').hide();
});
$('#f').click(function(){
        $('#dakar').hide();
        $('#thies').hide();
        $('#louga').hide();
        $('#saint').hide();
        $('#fatick').show();
        $('#kaolack').hide();
        $('#zig').hide();
});
$('#k').click(function(){
        $('#dakar').hide();
        $('#thies').hide();
        $('#louga').hide();
        $('#saint').hide();
        $('#fatick').hide();
        $('#kaolack').show();
        $('#zig').hide();
});
$('#z').click(function(){
        $('#dakar').hide();
        $('#thies').hide();
        $('#louga').hide();
        $('#saint').hide();
        $('#fatick').hide();
        $('#kaolack').hide();
        $('#zig').show();
});
$('#ok').click(function(){
  alert("Nous vous remercions d'avoir rempli notre formulaire.
Nous vous contacterons dans les plus brefs délais.");
});



            
        </body>
    </html>

	
	
	