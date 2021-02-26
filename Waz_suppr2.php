<?php 
//dans ce fichier, nous récupérons les informations pour réaliser la requête de modification : UPDATE

//récupération des informations passées en POST, nécessaires à la modification
Include"Waz_Entete.php"; 
Include"Waz_Connexion_BDD.php";

$wazid=$_GET['id'];



// echo $wazid;
// echo $waznom;
// echo $wazprenom;
// echo $wazmail;
// echo $wazpassword;

//construction de la requête UPDATE sans injection SQL

$requete = $db->prepare("DELETE from waz_internautes WHERE id='$wazid'");

$requete->execute();

//libère la connection au serveur de BDD
$requete->closeCursor();

//redirection vers la page index.php 
header("Location: Waz_Index.php");

?>