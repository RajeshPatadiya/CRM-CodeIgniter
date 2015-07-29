<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class SERVICECON extends CI_Controller {

 function __construct()
 {
   parent::__construct();
 }

 function ajoutService()
 {
	
	 
	  $this->load->view('serviceajouter');
	 
        $nom_service=$this->input->post('nom_service');
        $type_service=$this->input->post('type_service');

            $this->load->model('service');
    
         $this->service->ajouterService($nom_service,$type_service);

 }
  function modifierService()
  {
	     $this->load->view('servicemodifier');
		 
		 $id_service=$this->input->post('id_service');
	    $nom_service=$this->input->post('nom_service');
        $type_service=$this->input->post('type_service');

          $this->load->model('service');
    
         $this->service->modifierService($id_service,$nom_service,$type_service);
	  
  }
   function supprimerService()
   {
	    $this->load->view('servicesupprimer');
		
		$id_service=$this->input->post('id_service');
		 $this->load->model('service');
	 $this->service->supprimerService($id_service);

   }
   function listedeService()
   {
	   $this->load->model('service');
	   $tab= $this->service->listeService();
	   echo $tab;
	   
   }

}

?>