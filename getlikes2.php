 <?php 

                    include 'config.php' ;
                        $q = intval($_GET['q']);
			
    
            						try
								{
									// On se connecte à MySQL
									$bdd = new PDO($conn, $nomUtilisateur, $motDePasse);
									
								}
								catch(Exception $e)
								{
									// En cas d'erreur, on affiche un message et on arrête tout
																die('Erreur : '.$e->getMessage());
								}


$one ="'";

$dbl='"';

$sql3="UPDATE  `hal` SET likes=likes+1 WHERE num= '".$q."'";



$reponse3 = $bdd->query($sql3);

$sql="SELECT * FROM `hal` WHERE num = '".$q."'";



$reponse2 = $bdd->query($sql);



$x = 0; 
while($data = $reponse2->fetch()) 
    { $x =$x+1 ;
    
	
	$one ="'";
$dbl='"';
 
  echo $data['likes'];
 
 
    } 





?>