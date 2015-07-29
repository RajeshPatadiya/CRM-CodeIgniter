<?php
class EXP_MANAGER extends CI_Model
{
	public function login($pseudo,$pwd)
	{
		//$this->load->database();
		
   		$this->db->select('id_manager,pseudo, pwd');
   		$this->db->from('exp_manager');
		$passwd = md5( $pwd);
   		$this->db->where('pseudo',$pseudo);
   		$this->db->where('pwd', $passwd);
   		$this->db->limit(1);
 
   		$query = $this->db->get();
 
   		if($query ->num_rows()== 1)
   		{
     		return $query->result();
   		}
   		else
   		{
     		return false;
   		}
 
	}
	

	/*public function ajouterClient($id_client,$nom,$prenom,$adresse,$tel)
	{
		$this->load->database();
		
		$data["id_client"]=$id_client;
		$data["nom"]=$nom;
		$data["prenom"]=$prenom;
		$data["adresse"]=$adresse;
		$data["tel"]=$tel;
$this->db->insert('client',$data); 
//$res=$this->db->simple_query("insert into client values ($this->id_client ,'$this->nom' , '$this->prenom' , '$this->adresse' , $this->tel )"); 
//if ( $res== TRUE ) echo "client ajouté"; 
//else echo "client non ajouté"; 
}*/
	public function ajouterclientapplication($id_client,$nom,$prenom,$adresse,$numero,$code_tva,$matricule_fiscale)
	{
		$this->load->database();
		
		$data["id_client"]=$id_client;
		$data["nom"]=$nom;
		$data["prenom"]=$prenom;
		$data["adresse"]=$adresse;
		$data["numero"]=$numero;
		$data["code_tva"]=$code_tva;
		$data["matricule_fiscale"]=$matricule_fiscale;
		
$this->db->insert('client',$data); 
//$res=$this->db->simple_query("insert into client values ($this->id_client ,'$this->nom' , '$this->prenom' , '$this->adresse' , $this->tel )"); 
//if ( $res== TRUE ) echo "client ajouté"; 
//else echo "client non ajouté"; 
}


}
?>