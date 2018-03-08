<?php
/* Smarty version 3.1.32-dev-38, created on 2018-02-19 12:21:12
  from '/home/torella/public_html/web/templates/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5a8ac1388e8c59_86230050',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55ee6c145d81ff045f0d44ce84c790a3fd8faa81' => 
    array (
      0 => '/home/torella/public_html/web/templates/login.tpl',
      1 => 1519042871,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a8ac1388e8c59_86230050 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '17243925925a8ac1388b1184_32021548';
?>
<html>  
    <head>
        <meta charset="utf-8">
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
    
    <body id="page-top">
         <header class="masthead text-center text-white d-flex">
          <div class="container my-auto">
            <div class="row">
              <div class="col-lg-12 mx-auto">
                <h2>Log in</h2>
                <form name="form_login" method="post" action="login.php" id="login_form">
                    <p>Username</p> <p><input type="text" name="username" id="username"> </p>
                    <p>Password </p> <p><input name="password" id="password"> </p>
                    <p><button class="btn btn-primary btn-xl js-scroll-trigger">Accedi</button></p>
                </form>
                <p>Non sei registrato?</p>
                <button class="btn btn-primary btn-xl js-scroll-trigger" onclick="registration()">Registrati</button>
                  
              </div>

            </div>
          </div>
        </header>
        
        
    <body>
</html>
    <?php echo '<script'; ?>
>
        function registration(){
            window.location.href = 'registration_request.php';
        }
        
        
        $('#login_form').submit(function () {
            var username = $.trim($('#username').val());
            var password = $.trim($('#password').val());
            if (username  === '' || password==='') {
                alert('Compila i campi obbligatori');
                return false;
            }
        });
    
    <?php echo '</script'; ?>
><?php }
}
