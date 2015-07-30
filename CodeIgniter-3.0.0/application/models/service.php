<?php
class SERVICE extends CI_Model
{
		public function listeService()
	{
		$results = array();
    $this->db->select('id_service, nom_service, type_service');
    $this->db->from('service');

    $query = $this->db->get();

    if($query->num_rows() > 0) {
        $results = $query->result();
    }
    return $results;
	
	/*	$this->load->database();
		
		//$query = $this->db->query("SELECT * FROM SERVICE");
		$query = $this->db->get('service');
		//$ligne = array();

if ($ligne=$query->num_rows() > 0)
{
   $row = $query->row_array(); 

  $id_service = $ligne['id_service']; 
  $nom_service = $ligne['nom_service']; 
  $type_service = $ligne['type_service']; 
}

 return $ligne;*/
}

	public function ajouterService($nom_service,$type_service)
	{
		$this->load->database();
		
		   $data["nom_service"]=$nom_service;
		   $data["type_service"]=$type_service;
		
		
         $this->db->insert('service',$data); 

 
	}
	public function modifierService($id_service,$nom_service,$type_service)
	{
          //$this->load->database();
		
		$data = array(
               'nom_service' => $nom_service,
               'type_service' => $type_service,
               
            );

$this->db->where('id_service', $id_service);
$this->db->update('service', $data);
		
		

 
	}
	
	public function supprimerService($id_service)
	{
		$data["id_service"]=$id_service;
		
$this->db->where('id_service', $id_service);
$this->db->delete('service');
 
	}
	

	





}
?>