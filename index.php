<?php
session_start();// come sempre prima cosa, aprire la sessione 
include("db_con.php"); // includere la connessione al database
require 'setup_smarty.php';
//send a message to user example: non sei loggato and in smarty call a message template
$message=$_SESSION['message'];
echo $message;
if($_SESSION["logged"]){
    $MySmarty=new MySmarty();
    $MySmarty->display("load_file.tpl");
} else {
    $MySmarty=new MySmarty();
    $MySmarty->display("login.tpl");
}

?>
