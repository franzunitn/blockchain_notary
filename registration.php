
<?php
session_start(); // dive essere la prima cosa nella pagina, aprire la sessione
include("db_con.php"); // includo il file di connessione al database
require 'setup_smarty.php';

if($_POST["username_reg"] != "" && $_POST["password_reg"]!= "" && $_POST["email_reg"] != ""){  // se i parametri iscritto non sono vuoti non sono vuote
    $query_registrazione = mysql_query("INSERT INTO users (username,password,email)
    VALUES ('".$_POST["username_reg"]."','".$_POST["password_reg"]."','".$_POST["email_reg"]."')") // scrivo sul DB questi valori
    or die ("query di registrazione non riuscita".mysql_error()); // se la query fallisce mostrami questo errore
}
else {
header('location:index.php?action=registration&errore=Non hai compilato tutti i campi obbligatori'); // se le prime condizioni non vanno bene entra in questo ramo else
}

if(isset($query_registrazione)){ //se la reg è andata a buon fine
    header("location:index.php");
}
else {
    $MySmarty=new MySmarty();
    $MySmarty->display("generic_error.tpl");
}
?>