<?php 
//dans ce fichier, nous récupérons les informations pour réaliser la requête de modification : UPDATE

//récupération des informations passées en POST, nécessaires à la modification
Include"Waz_Entete.php"; 
Include"Waz_Connexion_BDD.php";

$wazid=$_POST['ID'];
$waznom=$_POST['Nom'];
$wazprenom=$_POST['Prénom'];
$wazmail=$_POST['Mail'];
$wazpassword=$_POST['Password'];


// echo $wazid;
// echo $waznom;
// echo $wazprenom;
// echo $wazmail;
// echo $wazpassword;

//construction de la requête UPDATE sans injection SQL

$requete = $db->prepare("UPDATE waz_internautes SET Nom='$waznom', Prénom='$wazprenom', Mail='$wazmail',Password='$wazpassword' WHERE id='$wazid'");


$requete->execute();

//libère la connection au serveur de BDD
$requete->closeCursor();

//redirection vers la page index.php 
header("Location: Waz_Index.php");

?>