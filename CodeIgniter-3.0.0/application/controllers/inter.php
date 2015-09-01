<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class INTER extends CI_Controller {

 function __construct()
 {
   parent::__construct();
 }
  
  function interfacedevis()
  {
	  $this->load->view('interfaceDevis');
  }
 

   

}

?>