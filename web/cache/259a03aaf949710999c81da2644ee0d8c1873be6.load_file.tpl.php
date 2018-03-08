<?php
/* Smarty version 3.1.32-dev-38, created on 2018-03-08 17:34:47
  from '/home/torella/public_html/web/templates/load_file.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5aa17437c879f1_13179975',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe63f6b6905ff28f0c09456fa3ffd5a4780dadec' => 
    array (
      0 => '/home/torella/public_html/web/templates/load_file.tpl',
      1 => 1519042250,
      2 => 'file',
    ),
    'cbe7177615c4687b489201064dc8eecb623307e2' => 
    array (
      0 => '/home/torella/public_html/web/templates/navbar.tpl',
      1 => 1519042338,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_5aa17437c879f1_13179975 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>

    <html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Blockchain notary</title>
        <meta name="description" content="The HTML5 Herald">
        <meta name="author" content="SitePoint">
        <!-- Bootstrap core CSS -->
        <link href="web/grafic/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom fonts for this template -->
        <link href="web/grafic/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
        <!-- Plugin CSS -->
        <link href="web/grafic/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="web/grafic/css/creative.min.css" rel="stylesheet">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript" src="jshashes-master/hashes.js"></script>
        <script type="text/javascript" src="jsplugin/redirect.js"></script>
        

        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
        <![endif]-->
    </head>

    <body id="page-top">
        <!--
        <h2>Carica il tuo file sulla blockchain</h2>
        <input name="myFile" type="file" id="file">
        <button id="submit">Submit</button>
        </br>
        </br>
        <a href="cert_view.php">Visualizza la lista dei file che hai certificato</a>
-->

<!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Blockchain notary</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="cert_view.php">Le tue certificazioni</a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="login.php">Certifica nuovo file</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav><header class="masthead text-center text-white d-flex">
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h1 class="text-uppercase">
              <strong>Certifica il tuo documento in modo sicuro e veloce</strong>
            </h1>
            <hr>
          </div>
          <div class="col-lg-8 mx-auto">
            <p class="text-faded mb-5"> Tramite questa pagina potrai caricare una firma digitale del tuo documento sulla blockchain di bitcoin in modo che tu possa dimostrarne quando vuoi l'autenticità </p>
            <input class="btn btn-primary btn-xl js-scroll-trigger" name="myFile" type="file" id="file">
            <!--<label for="file" class="btn btn-primary btn-xl js-scroll-trigger" style="margin-bottom:10px"> Scegli un file </label>-->
            <a class="btn btn-primary btn-xl js-scroll-trigger" id="submit"> Carica documento </a>
          </div>
        </div>
      </div>
    </header>
        






    <script type="text/javascript">

            document.getElementById("submit").addEventListener("click", function(){
            var files=document.getElementById("file").files;
            var file1=files[0];
            var reader = new FileReader();

            reader.onload = function(event) {
                var dataURL = event.target.result;
                // new SHA256 instance and hexadecimal string encoding
                var SHA256file1= new Hashes.SHA256().hex(dataURL);
                
                //load hash on server
                $.redirect('bitcoin_loadtx.php', {'hash_file': SHA256file1, 'file_name': file1.name });
                
            };

            reader.readAsDataURL(file1);

        });
        
    
    
    
    </script>
    </body>
</html><?php }
}
