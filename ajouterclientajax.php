<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Document sans titre</title>
</head>

<body>
<form name="form1" method="POST" action="ajouter1.php">
id: <input name="id" id="idclient" type="text"  /> <br />
Nom : <input name="nom" type="text" id="nomclient" /> <br />
Prenom : <input name="prenom" type="text" id="prenomclient" /> <br />
Adresse : <input name="adresse" type="text" id="adresseclient" /> <br />
Numero  : <input name="numero" type="text" id="numeroclient" /> <br />
<input id= "submit" name="ajouter" type="button" value="ajouter" />
<input name="annuler" type="reset" value="annuler" />
</form>
<script type="text/javascript" src="jquery-2.1.3.min.js"></script>
<script language="javascript">

function showAlert(){
   alert("Test");
}

$("#submit").click(function(){
	var idc= $("#idclient").val();
	var nomc= $("#nomclient").val();
	var prenomc= $("#prenomclient").val();
	var adressec= $("#adresseclient").val();
	var numeroc= $("#numeroclient").val();
	//var urlStr = "ajouter1.php?id="+id+"&nom="+nom+"&prenom="+prenom+"&adresse="+adresse+"&numero="+numero;
	$.ajax({
		type: "POST",
		url: "ajouter1.php",
		data: {id:idc,nom:nomc,prenom:prenomc,adresse:adressec,numero:numeroc},
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
</body>
</html>