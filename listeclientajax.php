<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Document sans titre</title>
</head>

<body>
<table> 
<tr> 
<th>ID</th> 
<th>nom</th> 
<th>prenom</th> 
<th>adresse</th>
<th>tel</th>
</tr> 

<?php
require "connexion.class.php";
require "client.class.php";
$client =new client();
$tableau =$client->listeClient();
?>
<script type="text/javascript" src="jquery-2.1.3.min.js"></script>
<script language="javascript">
$("#submit").click(function(){
	$.ajax({
		type: "POST",
		url: "listeclientajax.php",
		success: function(tableau)
		{
<?php
foreach($tableau as $val) 
{ 
echo $val->getId().'<br/>'; 
echo $val->getNom().'<br/>'; 
echo $val->getPrenom().'<br/>'; 
echo $val->getAdresse().'<br/>'; 
echo $val->getTel().'<br/>';
 
} 
?>

		},
		error: function(x)
		{
			alert( "Erreur: " + x);
		}
	});
});
</script>

</body>
</html>