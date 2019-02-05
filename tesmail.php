<?php
 
    ini_set( 'display_errors', 1 );
 
    error_reporting( E_ALL );
 
    $from = "hugob95@yahoo.fr";
 
    $to = "contact@huguesmpassi.com";
 
    $subject = "Vérification PHP mail";
 
    $message = "PHP mail marche";
 
    $headers = "From:" . $from;
 
    mail($to,$subject,$message, $headers);
 
    echo "L'email a été envoyé.";
?>