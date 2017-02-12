
<?php
include 'config.php';
try
{
$bdd = new PDO($conn,$nomUtilisateur,$motDePasse);
}
catch(PDOExeption $e)
    {
        die('Erreur'.$e->getMessage());
    }

    
$ob=@trim(stripslashes($_POST['objet']));
$gouv=@trim(stripslashes($_POST['gouvernorat']));
$dom=@trim(stripslashes($_POST['domaine']));
$soc=@trim(stripslashes($_POST['societe']));
$mes=@trim(stripslashes($_POST['message']));
$pr=@trim(stripslashes($_POST['preuv']));
$yt=@trim(stripslashes($_POST['youtube']));
$pic=@trim(stripslashes($_POST['picassa']));
$dr=@trim(stripslashes($_POST['drive']));
$map=@trim(stripslashes($_POST['maps']));
$bdd->exec("insert into reclamation(id,objet,gouvernorat,domaine,societe,message,preuve,youtube,picasa,drive,maps) 
			values('','$ob','$gouv','$dom','$soc','$mes','$pr','$yt','$pic','$dr','$map')");



 ?>
	<script type="text/javascript">
	alert("y3aychek! El réclamation mte3ek wosletna");
	</script>
<?php
header("refresh:0; url=index.php"); 
 
?>
