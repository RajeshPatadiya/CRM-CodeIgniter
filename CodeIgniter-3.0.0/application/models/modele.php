<?php
class Modele extends CI_Model
{
	

	public function ajouterClient($id_client,$nom,$prenom,$adresse,$tel)
	{
		$data["id_client"]=$id_client;
		$data["nom"]=$nom;
		$data["prenom"]=$prenom;
		$data["adresse"]=$adresse;
		$data["tel"]=$tel;
$this->db->insert('client',$data); 
//$res=$this->db->simple_query("insert into client values ($this->id_client ,'$this->nom' , '$this->prenom' , '$this->adresse' , $this->tel )"); 
//if ( $res== TRUE ) echo "client ajouté"; 
//else echo "client non ajouté"; 
}

}
?>