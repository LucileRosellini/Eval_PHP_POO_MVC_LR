<?php 

// Necessaire au poc require immobilierManager depuis immobilierController
//echo "hello world depuis immobilier manager";

require_once "Immobilier.php";
require_once "Manager.php";

class ImmobilierManager extends Manager {
    private $immobilier;

    public function addImmobilier($immobilier){
        $this->immobilier[] = $immobilier;
    }

    public function getImmobilier(){
        return $this->immobilier;
    }

    public function loadImmobilier(){
        $req  = $this->getBdd()->prepare("SELECT * FROM logement");
        $req->execute();
        $myimmobilier = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();
    
        foreach($myimmobilier as $immobilier){
            $i = new Immobilier($immobilier['id'], $immobilier['titre'], $immobilier['adresse'],$immobilier['ville'],$immobilier['cp'],$immobilier['surface'],$immobilier['prix'],$immobilier['photo'],$immobilier['type'],$immobilier['description']
         );
            $this->addImmobilier($i);
        }
    }

    public function newImmobilierDB($titre,$adresse,$ville,$cp,$surface,$prix,$photo,$type,$description){
        $req = "INSERT INTO logement (titre,adresse,ville,cp,surface,prix,photo,type,description) 
                VALUES (:titre, :adresse,:ville,:cp,:surface,:prix,:photo,:type,:description)";
        $statement = $this->getBdd()->prepare($req);
        $statement->bindValue(":titre",$titre, PDO::PARAM_STR);
        $statement->bindValue(":adresse",$adresse, PDO::PARAM_STR);
        $statement->bindValue(":ville",$ville, PDO::PARAM_STR);
        $statement->bindValue(":cp",$cp, PDO::PARAM_INT);
        $statement->bindValue(":surface",$surface, PDO::PARAM_INT);
        $statement->bindValue(":prix",$prix, PDO::PARAM_INT);
        $statement->bindValue(":photo",$photo, PDO::PARAM_STR);
        $statement->bindValue(":type",$type, PDO::PARAM_BOOL);
        $statement->bindValue(":description",$description, PDO::PARAM_STR);
        $result = $statement->execute();
        $statement->closeCursor();

        if($result){
            $immobilier = new Immobilier($this->getBdd()->lastInsertId(),$titre,$adresse,$ville,$cp,$surface,$prix,$photo,$type,$description);
            $this->addImmobilier($immobilier);
        }
    }

    public function getImmobilierById($id){
        foreach($this->immobilier as $immobilier) {
           if($immobilier->getId() == $id){
                return $immobilier;
           }
        }
    }

    public function editImmobilierDB($id,$titre,$adresse,$ville,$cp,$surface,$prix,$photo,$type,$description){
        $req = "UPDATE logement SET titre = :titre, adresse = :adresse, ville = :ville, cp = :cp, surface = :surface, prix = :prix, photo = :photo, type = :type, description = :description 
        WHERE id = :id";
        $statement = $this->getBdd()->prepare($req);
        $statement->bindValue(":id",$id, PDO::PARAM_INT);
        $statement->bindValue(":titre",$titre, PDO::PARAM_STR);
        $statement->bindValue(":adresse",$adresse, PDO::PARAM_INT);
        $statement->bindValue(":ville",$ville, PDO::PARAM_STR);
        $statement->bindValue(":cp",$cp, PDO::PARAM_INT);
        $statement->bindValue(":surface",$surface, PDO::PARAM_INT);
        $statement->bindValue(":prix",$prix, PDO::PARAM_INT);
        $statement->bindValue(":photo",$photo, PDO::PARAM_STR);
        $statement->bindValue(":type",$type, PDO::PARAM_BOOL);
        $statement->bindValue(":description",$description, PDO::PARAM_STR);
        $result = $statement->execute();
        $statement->closeCursor();

        if($result){
            $this->getImmobilierById($id)->settitre($titre);
            $this->getImmobilierById($id)->setadresse($adresse);
            $this->getImmobilierById($id)->setville($ville);
            $this->getImmobilierById($id)->setcp($cp);
            $this->getImmobilierById($id)->setsurface($surface);
            $this->getImmobilierById($id)->setprix($prix);
            $this->getImmobilierById($id)->setphoto($photo);
            $this->getImmobilierById($id)->settype($type);
            $this->getImmobilierById($id)->setdescription($description);
        }
    }

    public function deleteImmobilierBD($id){
        $req = "DELETE FROM logement WHERE id = :id";
        $statement = $this->getBdd()->prepare($req);
        $statement->bindValue(":id", $id, PDO::PARAM_INT);
        $result = $statement->execute();
        $statement->closeCursor();

        if($result ){
          $immobilier = $this->getImmobilierById($id);    
          unset($immobilier);
        }
    }


}
