<?php
class TEST extends CI_Model
{
	function add_form() {
		
    $this->load->database();
    
    $nom = $this->input->post('nom');
    $prenom = $this->input->post('prenom'); 
	 $numero = $this->input->post('numero'); 
	  $adresse = $this->input->post('adresse'); 
	   $code_tva = $this->input->post('code_tva');
	   $matricule_fiscale = $this->input->post('matricule_fiscale');  
	      
    $data = array(
       'nom' => $this->input->post('nom'),
       'prenom' => $this->input->post('prenom'),
	   'adresse' => $this->input->post('adresse'),
       'numero' => $this->input->post('numero'),
	   'code_tva' => $this->input->post('code_tva'),
       'matricule_fiscale' => $this->input->post('matricule_fiscale')
    );
    $this->db->insert('client',$data);
}
	


}
?>