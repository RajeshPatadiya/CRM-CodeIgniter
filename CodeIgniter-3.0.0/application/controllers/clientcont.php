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
	   
	 /*  $this->load->model('client');
    $data['liste']=$this->client->listeClient();
    $this->load->view('clientliste', $data); */
	
	   /*$this->load->model('client');
	    $data['liste_client'] = $this->client->listeClient();

    $this->load->view('clientliste', $data);*/

	  /* $this->load->model('client');
	   $tab= $this->client->listeClient();
	   echo $tab;*/
	   
   }

 function ajoutClient()
 {
	
	 
	  $this->load->view('clientajouter');
	 
        $nom=$this->input->post('nom');
        $prenom=$this->input->post('prenom');
		 $adresse=$this->input->post('adresse');
		  $numero=$this->input->post('numero');
		   $code_tva=$this->input->post('code_tva');
		    $matricule_fiscale=$this->input->post('matricule_fiscale');

            $this->load->model('client');
    
         $this->client->ajouterClient($nom,$prenom,$adresse,$numero,$code_tva,$matricule_fiscale);

 }
  function modifierClientcon()
  {
	     $this->load->view('clientmodifier');
		 
		 $id_client=$this->input->post('id_client');
	    $nom=$this->input->post('nom');
        $prenom=$this->input->post('prenom');
		$adresse=$this->input->post('adresse');
		$numero=$this->input->post('numero');
		$code_tva=$this->input->post('code_tva');
		$matricule_fiscale=$this->input->post('matricule_fiscale');
		

          $this->load->model('client');
    
         $this->client->modifierClient($id_client,$nom,$prenom,$adresse,$numero,$code_tva,$matricule_fiscale);
	  
  }
   function supprimerClient()
   {
	    $this->load->view('clientsupprimer');
		
		$id_client=$this->input->post('id_client');
		 $this->load->model('client');
	 $this->service->supprimerClient($id_client);

   }
   
  

}

?>