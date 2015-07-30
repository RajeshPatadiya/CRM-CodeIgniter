<?php
class DEVIS extends CI_Model
{
		public function listeDevis()
	{
		$results = array();
    $this->db->select('id_devis, id_client, date_envoie, date_validation');
    $this->db->from('devis');

    $query = $this->db->get();

    if($query->num_rows() > 0) {
        $results = $query->result();
    }
    return $results;
		
		/*$this->load->database();
		
		//$query = $this->db->query("SELECT * FROM SERVICE");
		$query = $this->db->get('devis');
		//$ligne = array();

if ($ligne=$query->num_rows() > 0)
{
   $row = $query->row_array(); 

  $id_devis = $ligne['id_devis']; 
  $date_envoie = $ligne['date_envoie']; 
  $date_validation= $ligne['date_validation']; 
}
 return $ligne;*/
}

	public function ajouterDevis($date_envoie,$date_validation)
	{
		 
		$this->load->database();
		
		   $data["date_envoie"]=$date_envoie;
		   $data["date_validation"]=$date_validation;
		   
		
         $this->db->insert('devis',$data); 

 
	}
	public function modifierDevis($id_devis,$date_envoie,$date_validation)
	{
          $this->load->database();
		
		$data = array(
               'date_envoie' => $date_envoie,
               'date_validation' => $date_validation,
               
            );

$this->db->where('id_devis', $id_devis);
$this->db->update('devis', $data);
		
		

 
	}
	
	public function supprimerDevis($id_devis)
	{
		$data["id_devis"]=$id_devis;
		
$this->db->where('id_devis', $id_devis);
$this->db->delete('devis');
 
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