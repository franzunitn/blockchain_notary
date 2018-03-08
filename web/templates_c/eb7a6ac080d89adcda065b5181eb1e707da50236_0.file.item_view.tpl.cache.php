<?php
/* Smarty version 3.1.32-dev-38, created on 2018-03-03 17:29:14
  from '/home/torella/public_html/web/templates/item_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5a9adb6adf4cf9_07577405',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb7a6ac080d89adcda065b5181eb1e707da50236' => 
    array (
      0 => '/home/torella/public_html/web/templates/item_view.tpl',
      1 => 1520098141,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navbar.tpl' => 1,
  ),
),false)) {
function content_5a9adb6adf4cf9_07577405 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '20846845435a9adb6ad89ca4_36567012';
?>
<html>

    <head>
        <meta charset="utf-8">
        <title>Lista certificazioni</title>
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
 src="jshashes-master/hashes.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="jsplugin/redirect.js"><?php echo '</script'; ?>
>
    </head>
    <body id="page-top">
        <?php $_smarty_tpl->_subTemplateRender("file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <header class="masthead text-left text-white d-flex">
          <div class="container my-auto">
            <div class="row">
              <div class="col-lg-12 mx-auto">
                  <h3>Da qui puoi verificare il tuo file</h3>
                <ul>
                    <li> Il tuo file: <?php echo $_smarty_tpl->tpl_vars['dati']->value['file_name'];?>
</li>
                    <li>La firma(hash) del tuo file: <?php echo $_smarty_tpl->tpl_vars['dati']->value['hashfile'];?>
</li>
                    <li>L'ID della transazione bitcoin: <?php echo $_smarty_tpl->tpl_vars['dati']->value['txid'];?>
</li>
                    <li>Orario di ricezione: <?php echo $_smarty_tpl->tpl_vars['dati']->value['recived_time'];?>
</li>
                    <?php if ($_smarty_tpl->tpl_vars['dati']->value['confirmed_time'] != '') {?><li>Orario di conferma: <?php echo $_smarty_tpl->tpl_vars['dati']->value['confirmed_time'];?>
</li>
                    <?php } else { ?>
                    <li>Il tuo file non è stato ancora confermato, quando lo sarà visualizzerai l'orario di conferma</li>
                    <?php }?>
                    <li>Il tuo file ha ricevuto <?php echo $_smarty_tpl->tpl_vars['dati']->value['confirmations'];?>
 conferme (6 o più conferme sono sufficenti per considerare la certificazione non modificabile)</li>
                </ul>
                  <p>Carica qui il file per verificarne l'autenticità</p>
                  <input class="btn btn-primary btn-xl js-scroll-trigger" name="myFile" type="file" id="file"> 
                  <button class="btn btn-primary btn-xl js-scroll-trigger" id="submit">Carica documento</button>
              </div>

            </div>
          </div>
        </header>
        
        
        
        
        
        
        
        
        
        <!--
        <ul>
            <li><?php echo $_smarty_tpl->tpl_vars['dati']->value['file_name'];?>
</li>
            <li><?php echo $_smarty_tpl->tpl_vars['dati']->value['hashfile'];?>
</li>
            <li><?php echo $_smarty_tpl->tpl_vars['dati']->value['confirmations'];?>
</li>
            <li><?php echo $_smarty_tpl->tpl_vars['dati']->value['recived_time'];?>
</li>
            <li><?php echo $_smarty_tpl->tpl_vars['dati']->value['confirmed_time'];?>
</li>
            <li><input name="myFile" type="file" id="file"> <button id="submit">Submit</button> </li>
        </ul>

    
    -->
    </body>
    <?php echo '<script'; ?>
 type="text/javascript">
        var old_hash="<?php echo $_smarty_tpl->tpl_vars['dati']->value['hashfile'];?>
"; 
            document.getElementById("submit").addEventListener("click", function(){
            var files=document.getElementById("file").files;
            var file1=files[0];
            var reader = new FileReader();
              
            reader.onload = function(event) {
                var dataURL = event.target.result;
                // new SHA256 instance and hexadecimal string encoding
                var SHA256file1= new Hashes.SHA256().hex(dataURL);
                //load hash on server
                
                $.redirect('check_certification.php', {'hash_file': SHA256file1, 'file_name': file1.name, 'old_hash': old_hash });
                
            };

            reader.readAsDataURL(file1);

        });
        
    
    
    
    <?php echo '</script'; ?>
>
</html><?php }
}
