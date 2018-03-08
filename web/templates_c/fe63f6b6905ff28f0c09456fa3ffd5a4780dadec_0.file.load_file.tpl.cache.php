<?php
/* Smarty version 3.1.32-dev-38, created on 2018-02-19 12:12:35
  from '/home/torella/public_html/web/templates/load_file.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5a8abf335e54a6_89029877',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe63f6b6905ff28f0c09456fa3ffd5a4780dadec' => 
    array (
      0 => '/home/torella/public_html/web/templates/load_file.tpl',
      1 => 1519042250,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navbar.tpl' => 1,
  ),
),false)) {
function content_5a8abf335e54a6_89029877 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '12877439875a8abf335a1d33_26037519';
?>
<!doctype html>

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

        <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="jshashes-master/hashes.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="jsplugin/redirect.js"><?php echo '</script'; ?>
>
        

        <!--[if lt IE 9]>
        <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"><?php echo '</script'; ?>
>
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
<?php $_smarty_tpl->_subTemplateRender("file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<header class="masthead text-center text-white d-flex">
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
        






    <?php echo '<script'; ?>
 type="text/javascript">

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
        
    
    
    
    <?php echo '</script'; ?>
>
    </body>
</html><?php }
}
