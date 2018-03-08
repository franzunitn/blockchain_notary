<?php
/* Smarty version 3.1.32-dev-38, created on 2018-02-19 12:12:21
  from '/home/torella/public_html/web/templates/navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5a8abf25982fe7_55227419',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cbe7177615c4687b489201064dc8eecb623307e2' => 
    array (
      0 => '/home/torella/public_html/web/templates/navbar.tpl',
      1 => 1519042338,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a8abf25982fe7_55227419 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '5588712605a8abf2597e744_83847823';
?>

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
    </nav><?php }
}
