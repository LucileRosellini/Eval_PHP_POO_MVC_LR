<?php

//Necessaire au poc require modele classe (en construction) immobilier.php depuis modele immobilierManager.php 
//echo "hello world depuis immobilier";

class Immobilier {

    private int     $id;
    private string  $titre;
    private string  $adresse;
    private string  $ville;
    private int     $cp;
    private int     $surface;
    private int     $prix;
    private string  $photo;
    private bool    $type;
    private string  $description;



    public function __construct($id,$titre,$adresse,$ville,$cp,$surface,$prix,$photo,$type,$description){
        $this->id = $id ;
        $this->titre = $titre ;
        $this->adresse = $adresse;
        $this->ville = $ville;
        $this->cp = $cp;
        $this->surface = $surface;
        $this->prix = $prix;
        $this->photo = $photo;
        $this->type = $type;
        $this->description = $description;

    }


	function getId() { 
        return $this->id; 
   } 

   function setId($id) {  
       $this->id = $id; 
   } 


	function getTitre() { 
 		return $this->titre; 
	} 

	function setTitre($titre) {  
		$this->titre = $titre; 
	} 


	function getAdresse() { 
 		return $this->adresse; 
	} 

	function setAdresse($adresse) {  
		$this->adresse = $adresse; 
	} 

    
	function getVille() { 
 		return $this->ville; 
	} 

	function setVille($ville) {  
		$this->ville = $ville; 
	} 


	function getCp() { 
 		return $this->cp; 
	} 

	function setCp($cp) {  
		$this->cp = $cp; 
	} 

    
	function getSurface() { 
 		return $this->surface; 
	} 

	function setSurface($surface) {  
		$this->surface = $surface; 
	} 


	function getPrix() { 
 		return $this->prix; 
	} 

	function setPrix($prix) {  
		$this->prix = $prix; 
	} 

    
	function getPhoto() { 
 		return $this->photo; 
	} 

	function setPhoto($photo) {  
		$this->photo = $photo; 
	} 


	function getType() { 
 		return $this->type; 
	} 

	function setType($type) {  
		$this->type = $type; 
	} 


	function getDescription() { 
 		return $this->description; 
	} 

	function setDescription($description) {  
		$this->description = $description; 
	} 

	
}