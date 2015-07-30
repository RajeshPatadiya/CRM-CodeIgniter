<?php
class FACTURE extends CI_Model
{
	
		public function listeFacture()
	{
				  $results = array();
    $this->db->select('id_facture, id_client, nom_facture, date_facture, remise ,prix_tva');
    $this->db->from('facture');

    $query = $this->db->get();

    if($query->num_rows() > 0) {
        $results = $query->result();
    }
    return $results;
		
		
		/*$this->load->database();
		
		//$query = $this->db->query("SELECT * FROM SERVICE");
		$query = $this->db->get('facture');
		//$ligne = array();

if ($ligne=$query->num_rows() > 0)
{
   $row = $query->row_array(); 

  $id_facture = $ligne['id_facture']; 
  $nom_facture = $ligne['nom_facture']; 
  $date_facture= $ligne['date_facture'];
  $remise= $ligne['remise'];
  $prix_tva= $ligne['prix_tva']; 
}
 return $ligne;*/
}
	
	
	public function ajouterFacture($nom_facture,$date_facture,$remise,$prix_tva)
	{
		$this->load->database();
		
		   $data["nom_facture"]=$nom_facture;
		   $data["date_facture"]=$date_facture;
		   $data["remise"]=$remise;
		   $data["prix_tva"]=$prix_tva;
		   
		
         $this->db->insert('facture',$data); 

 
	}
	public function modifierFacture($id_facture,$nom_facture,$date_facture,$remise,$prix_tva)
	{
          $this->load->database();
		
		$data = array(
               'nom_facture' => $nom_facture,
               'date_facture' => $date_facture,
			   'remise' => $remise,
			   'prix_tva' => $prix_tva,
               
            );

$this->db->where('id_facture', $id_facture);
$this->db->update('facture', $data);
		
		

 
	}
	
	public function supprimerFacture($id_facture)
	{
		$data["id_facture"]=$id_facture;
		
$this->db->where('id_facture', $id_facture);
$this->db->delete('facture');
 
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