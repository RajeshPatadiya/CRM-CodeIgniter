<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controleur extends CI_Controller {

	
	public function index()
	{
		$this->load->view('welcome_message');
	}
	
	public function goview()
	{
	
		$this->load->view('vue');	
	}
	
	public function ajouter()
	{
$this->load->view('vue');
//$this->load->model('modele');

$id_client = $this->input->get_post('id_client');
$nom = $this->input->get_post('nom');
$prenom = $this->input->get_post('prenom');
$adresse = $this->input->get_post('adresse');
$tel = $this->input->get_post('tel');



		$this->modele->ajouterClient($id_client,$nom,$prenom,$adresse,$tel);
		
	}
}
