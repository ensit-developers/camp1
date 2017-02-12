<?php
include 'configuration.php';
try
{
    $db = new PDO($conn,$login,$pwd) ;
    $requete = $db->query("SELECT gouv FROM gouvernorat "); 
}
 catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}


?>