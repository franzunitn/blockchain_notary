<?php

require "php-OP_RETURN/OP_RETURN.php";
require 'setup_smarty.php';

include("db_con.php"); 
session_start();
//check if logged in 
$logged=$_SESSION["logged"];
if (!$logged){
    //header("location:index.php"); 
}
$txid=$_GET["txid"];
$file_name=$_GET["file_name"];

$dati=retrivedatatransaction($txid);
$dati['file_name']=$file_name;
$dati['txid']=$txid;

$MySmarty=new MySmarty();
$MySmarty->assign('dati', $dati);
$MySmarty->display("item_view.tpl");






//retrive hashfile
function retrivedatatransaction ($txid){
    $url= "https://api.blockcypher.com/v1/btc/test3/txs/".$txid."?limit=50&includeHex=true";
    //connection to blockcypher api
    $ch = curl_init();
    // Will return the response, if false it print the response
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    // Set the url
    curl_setopt($ch, CURLOPT_URL,$url);
    $result=curl_exec($ch);
    curl_close($ch);
    $result_array=json_decode($result, true);
    
    //some data to retrive
    $hashfile= $result_array['outputs'][1]['data_string'];
    $confirmations = $result_array['confirmations'];
    $recived_time = $result_array['received'];
    $confirmed_time=$result_array['confirmed'];
    $data_transaction = [
    'hashfile' => $hashfile,
    'confirmations' => $confirmations,
    'recived_time' => $recived_time,
    'confirmed_time' => $confirmed_time,

    ];
    return $data_transaction;
    }

?>