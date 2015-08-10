<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class TESTCON extends CI_Controller {

 function __construct()
 {
   parent::__construct();
 }
 
 function simpleform() {
    $this->load->helper('form');
    $this->load->helper('html');
 
     $this->load->view('ajouterclient');
    
	 $nom=$this->input->post('nom');
        $prenom=$this->input->post('prenom');
		 $adresse=$this->input->post('adresse');
		  $numero=$this->input->post('numero');
		   $code_tva=$this->input->post('code_tva');
		    $matricule_fiscale=$this->input->post('matricule_fiscale');

            $this->load->model('test');
     
         $this->client->add_form($nom,$prenom,$adresse,$numero,$code_tva,$matricule_fiscale);


 

}
}

?>