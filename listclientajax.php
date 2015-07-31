<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Document sans titre</title>
</head>

<body>
<script type="text/javascript" src="jquery-2.1.3.min.js"></script>
<script language="javascript">
$(document).load(function(){
	
	$.ajax({
		type: "POST",
		url: "listclientajax.php",
		//data: {id:idc,nom:nomc,prenom:prenomc,adresse:adressec,numero:numeroc},
		success: function(resp)
		{
			alert(resp);
		},
		error: function(x)
		{
			alert( "Erreur: " + x);
		}
	});
});
</script>
<?php
require "connexion.class.php";
require "client.class.php";
$client =new client();
$tableau =$client->listeClient();


foreach($tableau as $val) 
{ 
?> 
<tr> 
<td><?php echo $val->getId().'<br/>';?></td> 
<td><?php echo $val->getNom().'<br/>';?></td> 
<td><?php echo $val->getPrenom().'<br/>';?></td> 
<td><?php echo $val->getAdresse().'<br/>';?></td> 
<td><?php echo $val->getTel().'<br/>';?></td>
<tr><?php 
} 
?>
</body>
</html>