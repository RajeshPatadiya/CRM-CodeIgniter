<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class FACTURECONT extends CI_Controller {

 function __construct()
 {
   parent::__construct();
 }

function listedeFacture()
   {
	    $this->load->model('facture');

    $data['results'] = $this->facture->listeFacture(); 

   
    $this->load->view('factureliste', $data);
  
	
	    $this->load->model('facture');
	    $data['factureliste'] = $this->facture->listeFacture();
    $this->load->view('factureliste', $data);
	 /*  $this->load->model('facture');
	   $tab= $this->facture->listeFacture();
	   echo $tab;*/
	   
   }





 function ajouterFacturecont()
 {
	
	 
	  $this->load->view('ajoutfacture');
	 
	    $id_client=$this->input->post('id_client');
        $nom_facture=$this->input->post('nom_facture');
        $date_facture=$this->input->post('date_facture');
		$remise=$this->input->post('remise');
		$prix_tva=$this->input->post('prix_tva');
		
            $this->load->model('facture');
    
         $this->facture->ajouterFacture($id_client,$nom_facture,$date_facture,$remise,$prix_tva);

 }
  function modifierFacturecont()
  {
	     $this->load->view('modifierfacture');
		 
		 $id_facture=$this->input->post('id_facture');
		 $id_client=$this->input->post('id_client');
	    $nom_facture=$this->input->post('nom_facture');
		 $date_facture=$this->input->post('date_facture');
        $remise=$this->input->post('remise');
		$prix_tva=$this->input->post('prix_tva');
		
		

          $this->load->model('facture');
    
         $this->facture->modifierFacture($id_facture,$id_client,$nom_facture,$date_facture,$remise,$prix_tva);
	  
  }
   function supprimerFacture()
   {
	    $this->load->view('supprimerfacture');
		
		$id_facture=$this->input->post('id_facture');
		 $this->load->model('facture');
	 $this->facture->supprimerFacture($id_facture);

   }
   
   

}

?>