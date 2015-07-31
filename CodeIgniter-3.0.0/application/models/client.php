<?php
class CLIENT extends CI_Model
{
	
	
	public function listeClient()
	{
		  $results = array();
    $this->db->select('id_client, nom, prenom, adresse, numero ,code_tva,matricule_fiscale');
    $this->db->from('client');

    $query = $this->db->get();

    if($query->num_rows() > 0) {
        $results = $query->result();
    }
    return $results;
		
	/*	$this->load->database();
		 $this->db->select('*');
    $this->db->from('client');
   
    return $this->db->get()->result();
	/*$query = $this->db->get('client');

$client = array();

if ($query->num_rows() > 0)
{
	$client = $query->result_array();
}
		 /* $query = $this->db->query("SELECT * FROM client;");

    return $query->result_array();;*/
		
	/*	//$query = $this->db->query("SELECT * FROM SERVICE");
		$query = $this->db->get('client');
		//$ligne = array();

if ($ligne=$query->num_rows() > 0)
{
   $row = $query->row_array(); 

  $id_client = $ligne['id_client']; 
  $nom = $ligne['nom']; 
  $prenom = $ligne['prenom']; 
   $adresse = $ligne['adresse']; 
    $numero = $ligne['numero'];
	 $code_tva = $ligne['code_tva'];
	  $matricule_fiscale = $ligne['matricule_fiscale']; 
}

 return $ligne;*/
}
	public function ajouterClient($nom,$prenom,$adresse,$numero,$code_tva,$matricule_fiscale)
	{
		$this->load->database();
		
		   $data["nom"]=$nom;
		   $data["prenom"]=$prenom;
		   $data["adresse"]=$adresse;
		   $data["numero"]=$numero;
		   $data["code_tva"]=$code_tva;
		   $data["matricule_fiscale"]=$matricule_fiscale;
		
		
         $this->db->insert('client',$data); 
		 

 
	}
	
	// Show view Page
public function index(){
$this->load->view("clientajouter");
}

// This function call from AJAX
public function user_data_submit() {
$data = array(
'nom' => $this->input->post('nom'),
'prenom'=>$this->input->post('prenom'),
'adresse'=>$this->input->post('adresse'),
'numero'=>$this->input->post('numero'),
'prix_tva'=>$this->input->post('prix_tva'),
'matricule_fiscale'=>$this->input->post('matricule_fiscale')
);

//Either you can print value or you can send value to database
echo json_encode($data);
}
	public function modifierClient($id_client,$nom,$prenom,$adresse,$numero,$code_tva,$matricule_fiscale)
	{
          $this->load->database();
		
		$data = array(
               'nom' => $nom,
               'prenom' => $prenom,
                'adresse' => $adresse,
				'numero' => $numero,
				'code_tva' => $code_tva,
				'matricule_fiscale' => $matricule_fiscale,
            );

$this->db->where('id_client', $id_client);
$this->db->update('client', $data);
		
		

 
	}
	
	public function supprimerClient($id_client)
	{
		$data["id_client"]=$id_client;
		
$this->db->where('id_client', $id_client);
$this->db->delete('client');
 
	}
	


	
		/*$this->load->database();
		
		$data["id_client"]=$id_client;
		$data["nom"]=$nom;
		$data["prenom"]=$prenom;
		$data["adresse"]=$adresse;
		$data["numero"]=$numero;
		$data["code_tva"]=$code_tva;
		$data["matricule_fiscale"]=$matricule_fiscale;
		
$this->db->insert('client',$data); 
//$res=$this->db->simple_query("insert into client values ($this->id_client ,'$this->nom' , '$this->prenom' , '$this->adresse' , $this->tel )"); 
//if ( $res== TRUE ) echo "client ajouté"; 
//else echo "client non ajouté"; */



}
?>