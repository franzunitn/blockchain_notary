<?php 

require "php-OP_RETURN/OP_RETURN.php";
require 'setup_smarty.php';
include("db_con.php"); 
session_start();
//check if logged in 
$logged=$_SESSION["logged"];
if (!$logged){
    $_SESSION['message'] = 'Non sei loggato';
    header("location:index.php"); 
    exit;
}
//setup smarty for a user feedback for the certification success or fail
$MySmarty=new MySmarty();


//retrive hash of submitted file
$hashfile = $_POST["hash_file"];
//check if hash exist and is a hash
if (!(strlen($hashfile)==64)){
    $MySmarty->display("generic_error.tpl");
    exit;
}


//echo 'SHA-256 del tuo file :';
//echo $hashfile;
//check if transaction is stored in blockchain

$results = OP_RETURN_store($hashfile,1);

if (!array_key_exists('ref', $results)){
    $MySmarty->display("generic_error.tpl");
    exit;
}

//store the transaction in databes with userid
//dati che mi servono id_user txid nomefile 
$id_user=$_SESSION['id_user'];
$txid=$results['txids'][0];
$file_name =$_POST["file_name"];
//echo $id_user, '</br>';
//echo $txid, '</br>';
//echo $file_name,'</br>';
//store the transaction in databes with userid
$query = mysql_query("INSERT INTO transaction (txid,id_user,file_name)
    VALUES ('".$txid."','".$id_user."','".$file_name."')") // scrivo sul DB questi valori
    or die ("query inserimento dati certficazione del DB non riuscita".mysql_error());

$MySmarty->clearCache('bitcoin_loadtx.tpl');
$MySmarty->assign('file_name', $file_name);
$MySmarty->assign('hash', $hashfile);
$MySmarty->assign('txid', $txid);
$MySmarty->display("bitcoin_loadtx.tpl");






    
    
    
?>
