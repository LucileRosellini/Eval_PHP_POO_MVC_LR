<?php
// Necessaire au poc require immobilerController depuis index
// echo "hello world";

require_once "modele/immobilierManager.php";

class ImmobilierController {
    private $immobilierManager;

    public function __construct(){
        $this->immobilierManager = new immobilierManager;
        $this->immobilierManager->loadImmobilier();
    }

    public function displayImmobiliers(){
        $immobiliers = $this->immobilierManager->getImmobilier();
        require_once "view/immobilier.view.php";
    }

    public function newImmobilierForm(){
        require_once "view/new.immobilier.view.php";
    }

    public function newImmobilierValidation(){
       $this->immobilierManager->newImmobilierDB($_POST['id'], $_POST['titre'], $_POST['adresse'],$_POST['ville'],$_POST['cp'],$_POST['surface'],$_POST['prix'],$_POST['photo'],$_POST['type'],$_POST['description']);
       header('Location:'. URL . "immobilier");
    }

    public function editImmobilierForm($id){
        $immobilier = $this->immobilierManager->getImmobilierById($id);
        require_once "view/edit.immobilier.view.php";
    }

    public function editImmobilierValidation(){
        $this->immobilierManager->editImmobilierDB($_POST['id'], $_POST['titre'], $_POST['adresse'],$_POST['ville'],$_POST['cp'],$_POST['surface'],$_POST['prix'],$_POST['photo'],$_POST['type'],$_POST['description']);
        header("Location:". URL . "immobiliers");

     }

    public function deleteImmobilier($id){
        $this->immobilierManager->deleteImmobilierBD($id);
        header("Location: " . URL . "immobiliers");
    }

}