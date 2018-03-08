<?php
/* Smarty version 3.1.32-dev-38, created on 2018-02-19 12:39:35
  from '/home/torella/public_html/web/templates/cert_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5a8ac587caeef3_89457150',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '772b3fe05ca05baf91f56240c77fdc96d592d351' => 
    array (
      0 => '/home/torella/public_html/web/templates/cert_view.tpl',
      1 => 1519043975,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navbar.tpl' => 1,
  ),
),false)) {
function content_5a8ac587caeef3_89457150 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '9282266605a8ac587c58488_04184028';
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
                    <?php if ($_smarty_tpl->tpl_vars['empty']->value) {?>
                        <p>Non hai ancora certificato nessun file</p>
                    <?php } else { ?>
                      <div class="col-lg-12">
                          <h3>Le tue ceritifcazioni</h3>
                      </div>
                </div>
                <div class="row">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'res', false, NULL, 'result', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['res']->value) {
?>
                        <div class="col-lg-6">
                            <a href="item_view.php?txid=<?php echo $_smarty_tpl->tpl_vars['res']->value['txid'];?>
&file_name=<?php echo $_smarty_tpl->tpl_vars['res']->value['file_name'];?>
"> <?php echo $_smarty_tpl->tpl_vars['res']->value['file_name'];?>
 </a>
                        </div>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
                <?php }?>
            </div>
        </header>
        
    </body>
</html><?php }
}
