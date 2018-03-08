<?php
require 'setup_smarty.php';
session_start();
include("db_con.php"); 
$_SESSION["username"]=""; 
$_SESSION["password"]="";
$_SESSION["logged"] =false;
$MySmarty=new MySmarty();
$MySmarty->display("login.tpl");

?>
