<?php
include 'config.php';
try
{
    $db = new PDO($conn,$nomUtilisateur,$motDePasse) ;
    $requete = $db->query("SELECT gouv FROM gouvernorat "); 
}
 catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}


?>