<?php
if(isset($_POST['envoi'])){ // si formulaire soumis
$name = $_POST['name'];
$email= $_POST['email'];
$telephone= $_POST['telephone'];
$message= $_POST['message'];


ini_set( 'display_errors', 1 );
 
error_reporting( E_ALL );

$to = "contact@huguesmpassi.com";
$contact = "Nom:"." $name"." "." "."tépéhone:"." $telephone";
mail($to,$email,$contact, $message);

echo "merci :-)";



}





?>