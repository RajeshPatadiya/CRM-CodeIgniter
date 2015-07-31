<?php
 class connexion
  {
    
  private $Serveur ;    
  private  $Base ;        
  private  $Identifiant ;
  private  $Motdepasse;        
 public  $Lien ;       

     
   
    public function __construct($Serveur , $Base , $Identifiant , $Motdepasse )
    {
      $this->Serveur= $Serveur;
      $this->Base = $Base;
      $this->Identifiant = $Identifiant;
      $this->Motdepasse = $Motdepasse;
	
	  $this->Lien = mysql_connect($this->Serveur, $this->Identifiant, $this->Motdepasse)
         or die("Impossible de se connecter : " . mysql_error());
         $Base = mysql_select_db($this->Base,$this->Lien);
     
	}
	
  }
	?>