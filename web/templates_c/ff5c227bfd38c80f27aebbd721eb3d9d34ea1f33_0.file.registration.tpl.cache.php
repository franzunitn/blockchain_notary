<?php
/* Smarty version 3.1.32-dev-38, created on 2018-02-19 12:27:15
  from '/home/torella/public_html/web/templates/registration.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5a8ac2a37b4e45_83575368',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff5c227bfd38c80f27aebbd721eb3d9d34ea1f33' => 
    array (
      0 => '/home/torella/public_html/web/templates/registration.tpl',
      1 => 1519043233,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a8ac2a37b4e45_83575368 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '13926175915a8ac2a377b8b0_39682326';
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
                <h2>Registrazione</h2>   
                <form name="form_registration" method="post" action="registration.php"  id="registration_form">
                    <p>Username</p> <p><input type="text" name="username_reg" id="username_reg"></p>
                    <p>Password</p> <p> <input type="password" name="password_reg" id="password_reg"></p>
                    <p>Email</p> <p><input type="text" name="email_reg" id="email_reg" ></p>
                    <p><button class="btn btn-primary btn-xl js-scroll-trigger">Registrati</button></p>
            </form>
                  
              </div>

            </div>
          </div>
        </header>
        
        
        
        
        
        
    </body>
        
    
</html>

        <?php echo '<script'; ?>
>
            $('#registration_form').submit(function () {
                        var username_reg = $.trim($('#username_reg').val());
                        var password_reg = $.trim($('#password_reg').val());
                        var email_reg = $.trim($('#email_reg').val());
                        if (username_reg==='' || password_reg==='' || email_reg==='') {
                            alert('Compila i campi obbligatori');
                            return false;
                        }
                    });
       <?php echo '</script'; ?>
>     


        
        <?php }
}
