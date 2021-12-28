<?php
// Necessaire au poc require immobilerController depuis index
// echo "hello world";

require_once "modele/immobilierManager.php";

class ImmobilierController {
    private $ImmobilierManager;

    public function __construct(){
        $this->ImmobilierManager = new ImmobilierManager;
        $this->ImmobilierManager->loadImmobilier();
    }

    public function displayImmobiliers(){
        $Immobilier = $this->ImmobilierManager->getImmobilier();
        require_once "view/Immobilier.view.php";
    }

    public function newImmobilierForm(){
        require_once "view/new.Immobilier.view.php";
    }

    public function newImmobilierValidation(){
       $this->ImmobilierManager->newImmobilierDB($_POST['id'], $_POST['titre'], $_POST['adresse'],$_POST['ville'],$_POST['cp'],$_POST['surface'],$_POST['prix'],$_POST['photo'],$_POST['type'],$_POST['description']);
       header('Location:'. URL . "Immobilier");
    }

    public function editImmobilierForm($id){
        $Immobilier = $this->ImmobilierManager->getImmobilierById($id);
        require_once "view/edit.Immobilier.view.php";
    }

    public function editImmobilierValidation(){
        $this->ImmobilierManager->editImmobilierDB($_POST['id'], $_POST['titre'], $_POST['adresse'],$_POST['ville'],$_POST['cp'],$_POST['surface'],$_POST['prix'],$_POST['photo'],$_POST['type'],$_POST['description']);
        header("Location:". URL . "Immobilier");

     }

    public function deleteImmobilier($id){
        $this->ImmobilierManager->deleteImmobilierBD($id);
        header("Location: " . URL . "Immobilier");
    }

}