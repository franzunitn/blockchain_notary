<?php
/* Smarty version 3.1.32-dev-38, created on 2018-02-19 12:55:22
  from '/home/torella/public_html/web/templates/check_certification.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5a8ac93a521815_59142152',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a7a5d5543e3853c45705b369e5a34c44b2577bc' => 
    array (
      0 => '/home/torella/public_html/web/templates/check_certification.tpl',
      1 => 1519044913,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navbar.tpl' => 1,
  ),
),false)) {
function content_5a8ac93a521815_59142152 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '15011476825a8ac93a4d9ff1_10477851';
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
    </head>
    <body>
        <?php $_smarty_tpl->_subTemplateRender("file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                
        <header class="masthead text-left text-white d-flex">
            <div class="container my-auto">
                <div class="row">
                      <div class="col-lg-12">
                          <?php if ($_smarty_tpl->tpl_vars['original']->value) {?>
                          <p>Abbiamo verificato sulla blockchain di bitcoin e il file <?php echo $_smarty_tpl->tpl_vars['file_name']->value;?>
 risulta originale</p>
                          <?php } else { ?>
                          <p>Abbiamo verificato sulla blockchain di bitcoin e il file <?php echo $_smarty_tpl->tpl_vars['file_name']->value;?>
 NON risulta originale</p>
                          <?php }?>
                      </div>
                </div>
                
            </div>
        </header>
        
    </body>
</html><?php }
}
