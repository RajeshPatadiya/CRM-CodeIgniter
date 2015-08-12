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
}
	
	
	public function ajouterFacture($id_client,$nom_facture,$date_facture,$remise,$prix_tva)
	{
		$this->load->database();
		
		   $data["id_client"]=$id_client;
		   $data["nom_facture"]=$nom_facture;
		   $data["date_facture"]=$date_facture;
		   $data["remise"]=$remise;
		   $data["prix_tva"]=$prix_tva;
		   
		
         $this->db->insert('facture',$data); 

 
	}
	public function modifierFacture($id_facture,$id_client,$nom_facture,$date_facture,$remise,$prix_tva)
	{
          $this->load->database();
		
		$data = array(
		        'id_client' => $id_client,
               'nom_facture' => $nom_facture,
               'date_facture' => $date_facture,
			   'remise' => $remise,
			   'prix_tva' => $prix_tva,
               
            );

$this->db->where('id_facture', $id_facture);
$this->db->update('facture', $data);
		
		
echo"modify.success";
 
	}
	
	public function supprimerFacture($id_facture)
	{
		$data["id_facture"]=$id_facture;
		
$this->db->where('id_facture', $id_facture);
$this->db->delete('facture');
echo"sup.success";
 
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