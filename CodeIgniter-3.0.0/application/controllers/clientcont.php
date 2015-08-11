<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CLIENTCONT extends CI_Controller {

 function __construct()
 {
   parent::__construct();
 }
 
  function listedeClient()
   {
	     $this->load->model('client');

    $data['results'] = $this->client->listeClient(); 

   
    $this->load->view('clientliste', $data);
  
	
	    $this->load->model('client');
	    $data['clientliste'] = $this->client->listeClient();
          $this->load->view('clientliste', $data);
   }

/*function index()
{
$this->load->view('clientajouter.php');

}
*/

 function ajoutClient(){
	 $this->load->view('clientajouter.php');
	 $this->load->model('client');
	 $nom=$this->input->post('nom');
     $prenom=$this->input->post('prenom');
	 $adresse=$this->input->post('adresse');
	 $numero=$this->input->post('numero');
	 $code_tva=$this->input->post('code_tva');
	 $matricule_fiscale=$this->input->post('matricule_fiscale');
	 $result=$this->client->ajouterClient($nom,$prenom,$adresse,$numero,$code_tva,$matricule_fiscale);
	
 }
  function modifierClientcon()
  {
	     $this->load->view('clientmodifier');
		  $this->load->model('client');
		 
		 $id_client=$this->input->post('id_client');
	    $nom=$this->input->post('nom');
        $prenom=$this->input->post('prenom');
		$adresse=$this->input->post('adresse');
		$numero=$this->input->post('numero');
		$code_tva=$this->input->post('code_tva');
		$matricule_fiscale=$this->input->post('matricule_fiscale');
		

         
    
         $this->client->modifierClient($id_client,$nom,$prenom,$adresse,$numero,$code_tva,$matricule_fiscale);
	  
  }
  
   function supprimerClient()
   {
	    $this->load->view('clientsupprimer');
		
		$id_client=$this->input->post('id_client');
		 $this->load->model('client');
	 $this->client->supprimerClient($id_client);

   }
   
  

}

?>