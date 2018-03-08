<?php
session_start();// come sempre prima cosa, aprire la sessione 
include("db_con.php"); // includere la connessione al database
require 'setup_smarty.php';

    $MySmarty=new MySmarty();
    $MySmarty->display("registration.tpl");

?>
