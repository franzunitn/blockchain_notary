<?php

require "php-OP_RETURN/OP_RETURN.php";
require 'setup_smarty.php';
include("db_con.php"); 
session_start();
//check if logged in 
$logged=$_SESSION["logged"];
if (!$logged){
    echo "Non sei loggato";
    exit;
}
$file_name=$_POST["file_name"];
$hash_file=$_POST["hash_file"];
$old_hash=$_POST["old_hash"];


$original=false;
if (strcmp($hash_file, $old_hash)==0){
    $original=true;
} 





$MySmarty=new MySmarty();
$MySmarty->assign('file_name', $file_name);
$MySmarty->assign('hash_file', $file_name);
$MySmarty->assign('original', $original);
$MySmarty->display("check_certification.tpl");





?>