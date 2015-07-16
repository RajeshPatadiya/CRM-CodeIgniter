<?php
class client 
{
	private $id_client;
	private $nom; 
	private $prenom;
	private $adresse;
	private $tel;
	
	

	function __construct()
	{}



public function __get($champ)
{
	//return $this->{$champ};
}
/************************************************************/
public function getId()
{
	return $this->id_client;
}
public function getNom()
{
	return $this->nom;
}
public function getPrenom()
{
	return $this->Prenom;
}
public function getAdresse()
{
	return $this->adresse;
}
public function getTel()
{
	return $this->tel;
}
/************************************************************/
public function setId($champ)
{
	 $this->id_client=$champ;
}
public function setNom($champ)
{
	 $this->nom=$champ;
}
public function setPrenom($champ)
{
	 $this->prenom=$champ;
}
public function setAdresse($champ)
{
	 $this->adresse=$champ;
}
public function setTel($champ)
{
	 $this->tel=$champ;
}
/************************************************************/

public function ajouterClient ()  
{
$connexion = new connexion('localhost', 'client', 'root', '');
 $resp="";
	
  $sql = "insert into client values ($this->id_client ,'$this->nom' , '$this->prenom' , '$this->adresse' , $this->tel ) ";
      mysql_query($sql);
	 if ( mysql_error())
	 {
		 $resp=" client non ajouté:".mysql_error();
	 }
	 else 
	
    $resp="client ajouté  ";
    
return $resp;
}
/************************************************************/
public function listeClient ()
{
	
$connexion = new connexion('localhost', 'client', 'root', '');

$req="select * from client";

 $res = mysql_query($req );
 $ligne = array();
 

    while($ligne  = mysql_fetch_array($res))  
 {  
 $id_client = $ligne['id_client']; 
$nom = $ligne['nom']; 
$prenom = $ligne['prenom']; 
$adresse = $ligne['adresse']; 
$tel = $ligne['tel']; 

$cl = new client(); 
$cl->setId($id_client);
$cl->setNom($nom);
$cl->setPrenom($prenom);
$cl->setAdresse($adresse);
$cl->setTel($tel);
$tableau[] = $cl;
/*foreach($tableau as $val) 

	 echo $val->getId();
	echo  $val->getNom();
	echo $val->getPrenom();
	echo $val->getAdresse();
	echo $val->getTel();*/

 
  /*$size = count ($ligne);
 for ($i=0;$i<=$size;$i++)
 {
	   echo $ligne[$i];
	 }*/
 
	 }
   //echo $data['id_client']." ".$data['nom']." ".$data['prenom']." ".$data['adresse']." ".$data['tel']."<br/>" ;  

  // foreach ($list($client) as $value) {
	//echo $ligne['id_client'] ."". $ligne['nom'] ."".$ligne['prenom']."".$ligne['adresse'].""$ligne'<br />';
	
		//$size = count ($ligne);
		//for ($i=0;$i<=10;$i++)
              //echo $ligne;



 


 return $tableau;
	
    
}

 


/************************************************************/
public function modifierClient ()
{
$connexion = new connexion('localhost', 'client', 'root', '');
 $resp="";
	
$req="update client set nom='$this->nom' , prenom='$this->prenom' , adresse='$this->adresse' , tel=$this->tel where id_client=$this->id_client ";
$result = mysql_query($req);
 
  if ( mysql_error())
	 {
		  $resp=" erreur de modification:".mysql_error();
	 }
	 else 
	 {
	
    $resp="modification a été correctement effectuée " ;
	 }
	 return $resp;
 
}
/************************************************************/
public function supprimerClient ()
{
$connexion = new connexion('localhost', 'client', 'root', '');

$req="delete from client where id_client=$this->id_client ";
 $result = mysql_query($req);

if ( mysql_error())
	 
		 echo "erreur de suppression:".mysql_error();
	 
	 else 
	
    echo "client supprimé avec succés: " . $req;
}
/************************************************************/
}

?>