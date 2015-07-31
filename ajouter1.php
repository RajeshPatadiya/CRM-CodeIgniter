<?php
require "connexion.class.php";
require "client.class.php";
if(isset($_POST['id']))
{
$id_client=$_POST['id'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$adresse=$_POST['adresse'];
$tel=$_POST['numero'];
$client =new client();
$client->setID($id_client);
$client->setNom($nom);
$client->setPrenom($prenom);
$client->setAdresse($adresse);
$client->setTel($tel);
$resp = $client->ajouterClient();

echo $resp;
}else{
	echo "parm not set";
	}

?>