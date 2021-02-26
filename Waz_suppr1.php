

<?php 
//dans ce fichier, nous récupérons les informations pour réaliser la requête de modification : UPDATE

//récupération des informations passées en POST, nécessaires à la modification
Include"Waz_Entete.php"; 
Include"Waz_Connexion_BDD.php";

$wazid=$_GET['id'];
?>

<?php   


$requete = "SELECT * FROM waz_internautes WHERE id = $wazid";
$result = $db->query($requete);
$internaute = $result->fetch(PDO::FETCH_OBJ);
$result->closeCursor(); 
?>

<p>Êtes-vous sur de vouloir supprimer les données de <?php echo $internaute->Nom; ?> <?php echo $internaute->Prénom; ?> ? Cette action sera irréversible !<p>

<style type="text/css">
p {
  color: red;
font-size:30px;
}
</style>

<a href="Waz_suppr2.php?id=<?php echo $wazid ?>" title="Infos">Supprimer</a>
