<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Document sans titre</title>
</head>

<body>
<?php

require "connexion.class.php";
require "client.class.php";


if(isset($_POST['modifier']))
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

$client->modifierClient();

}
?>
</body>
</html>