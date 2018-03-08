<?php
/* Smarty version 3.1.32-dev-38, created on 2018-02-14 14:24:41
  from '/home/torella/public_html/web/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5a8446a9c42e98_83986471',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cdf73c5b9f62e4efbbfb5a51d6e99579b8f45447' => 
    array (
      0 => '/home/torella/public_html/web/templates/index.tpl',
      1 => 1518618231,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a8446a9c42e98_83986471 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '12452742815a8446a9c13e08_09416287';
?>
<html>  
    <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    
    <body>
        <h2>Registrazione</h2>   
            <form name="form_registration" method="post" action="registration.php">
                <br/>
                <p>Username: <input type="text" name="username_reg"></p>
                <br/>
                <p>Password: <input type="password" name="password_reg"></p>
                <br/>
                <p>Email: <input type="text" name="email_reg" ></p>
                <br/>
                <button>Registrati</button>
            </form>
        <h2>Log in</h2>
            <form name="form_login" method="post" action="login.php">
                <p>Username</p><input type="text" name="username" ></p>
                <p>Password <input name="password"></p>
                <button>Accedi</button>
            </form>
    <body>
</html><?php }
}
