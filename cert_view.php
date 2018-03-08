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

//take all transaction of a user
$id_user=$_SESSION["id_user"];
$query = mysql_query("SELECT txid, file_name FROM transaction WHERE id_user='".$id_user."'")
or DIE('query non riuscita'.mysql_error());
$result= array();
if(mysql_num_rows($query)>0){        
   while($row = mysql_fetch_array($query)) {
        $result[] = $row;
        }
    
    $MySmarty=new MySmarty();
    $MySmarty->clearAllCache();
    $MySmarty->assign('empty',false);
    $MySmarty->assign('result', $result);
    $MySmarty->display("cert_view.tpl");
    
    
    

} else {
    $MySmarty=new MySmarty();
    $MySmarty->clearAllCache();
    $MySmarty->assign('empty',true);
    $MySmarty->display("cert_view.tpl");
}
    




?>
