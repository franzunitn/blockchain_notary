<?php
require 'setup_smarty.php';
session_start();
include("db_con.php"); 
$_SESSION["username"]=$_POST["username"]; 
$_SESSION["password"]=$_POST["password"];
$query = mysql_query("SELECT * FROM users WHERE username='".$_POST["username"]."' AND password ='".$_POST["password"]."'")
or DIE('query non riuscita'.mysql_error());


//for redirect from navbar
if ($_SESSION["logged"]){
    $MySmarty=new MySmarty();
    $MySmarty->display("load_file.tpl");
    exit;
}
if(mysql_num_rows($query)>0){        
    $row = mysql_fetch_assoc($query); 
    $_SESSION["logged"] =true;  
    $_SESSION["id_user"]=$row['id_user'];
    $MySmarty=new MySmarty();
    $MySmarty->display("load_file.tpl");
} else {
    $MySmarty=new MySmarty();
    $MySmarty->display("login_error.tpl");
}

?>
