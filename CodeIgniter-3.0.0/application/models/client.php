<?php
class CLIENT extends CI_Model
{
	public function ajouterClient($nom,$prenom,$adresse,$numero,$code_tva,$matricule_fiscale)
	{
		$this->load->database();
		
		   $data["nom"]=$nom;
		   $data["prenom"]=$prenom;
		   $data["adresse"]=$adresse;
		   $data["numero"]=$numero;
		   $data["code_tva"]=$code_tva;
		   $data["matricule_fiscale"]=$matricule_fiscale;
		
		
         $this->db->insert('client',$data); 

 
	}
	public function modifierClient($id_client,$nom,$prenom,$adresse,$numero,$code_tva,$matricule_fiscale)
	{
          $this->load->database();
		
		$data = array(
               'nom' => $nom,
               'prenom' => $prenom,
                'adresse' => $adresse,
				'numero' => $numero,
				'code_tva' => $code_tva,
				'matricule_fiscale' => $matricule_fiscale,
            );

$this->db->where('id_client', $id_client);
$this->db->update('client', $data);
		
		

 
	}
	
	public function supprimerClient($id_client)
	{
		$data["id_client"]=$id_client;
		
$this->db->where('id_client', $id_client);
$this->db->delete('client');
 
	}
	

	
	public function listeClient()
	{
		
		$this->load->database();
		
		//$query = $this->db->query("SELECT * FROM SERVICE");
		$query = $this->db->get('client');
		//$ligne = array();

if ($ligne=$query->num_rows() > 0)
{
   $row = $query->row_array(); 

  $id_client = $ligne['id_client']; 
  $nom = $ligne['nom']; 
  $prenom = $ligne['prenom']; 
   $adresse = $ligne['adresse']; 
    $numero = $ligne['numero'];
	 $code_tva = $ligne['code_tva'];
	  $matricule_fiscale = $ligne['matricule_fiscale']; 
}

 return $ligne;
}

	
		/*$this->load->database();
		
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
//else echo "client non ajouté"; */



}
?>