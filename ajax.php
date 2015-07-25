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
<div id="hidden" >
<?php
foreach($tableau as $val) 
{ 
?> 
<tr> 
<td id="tr"><?php echo $val->getId().'<br/>';?></td> 
<td id="tr1"><?php echo $val->getNom().'<br/>';?></td> 
<td id="tr=2"><?php echo $val->getPrenom().'<br/>';?></td> 
<td id="tr3"><?php echo $val->getAdresse().'<br/>';?></td> 
<td id="tr4"><?php echo $val->getTel().'<br/>';?></td>
<tr id ="tr5"><?php 
} 
?>
</tr>
</tr>
</table>
</div>

<script type="text/javascript" src="jquery-2.1.3.min.js"></script>
<script language="javascript">
$(document).load(function(){
	$("#hidden").hide();

	
	$.ajax({
		type: "POST",
		url: "listclientajax.php",
		
		success: function(tableau)
		{
//$("#hidden").show();
for(var i= 0; i < tableau.length; i++)
{
     document.write(x[i]);
}

		
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