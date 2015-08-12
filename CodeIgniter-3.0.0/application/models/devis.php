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

}

	public function ajouterDevis($id_client,$date_envoie,$date_validation)
	{
		 
		   $this->load->database();
		
		   $data["id_client"]=$id_client;
		   $data["date_envoie"]=$date_envoie;
		   $data["date_validation"]=$date_validation;
		   
		
         $this->db->insert('devis',$data); 
		 echo"add.success";

 
	}
	public function modifierDevis($id_devis,$id_client,$date_envoie,$date_validation)
	{
          $this->load->database();
		
		$data = array(
		       'id_devis' => $id_devis,
		       'id_client' => $id_client,
               'date_envoie' => $date_envoie,
               'date_validation' => $date_validation,
               
            );

$this->db->where('id_devis', $id_devis);
$this->db->update('devis', $data);
		
				 echo"modify.success";


 
	}
	
	public function supprimerDevis($id_devis)
	{
		$data["id_devis"]=$id_devis;
		
$this->db->where('id_devis', $id_devis);
$this->db->delete('devis');
 
 				 echo"sup.success";

	}
	
}
?>