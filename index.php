<?php
// Necessaire pour POC BDD et Index PHP
// $database=new PDO ('mysql:host=localhost;dbimmobilier=immobilier','root','');
// $results = $database->query('SELECT * FROM logement');
// while ($row=$results->fetch())
// {
//     echo $row['titre'].'<br>';
// }

define("URL" , str_replace("index.php","",(isset($_SERVER['HTTPS']) ? "https" : "http") . "://".$_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] ));

require_once "controller/immobilierController.php";

$immobilierController = new ImmobilierController;

if(empty($_GET['page'])){
    require_once "view/home.view.php";
}else {
    $url = explode("/", filter_var($_GET['page']), FILTER_SANITIZE_URL );
    
    switch($url[0]){
        case "accueil" : require_once "view/home.view.php";
        break;
        case "immobilier" : 
            if(empty($url[1])){
                $immobilierController->displayImmobiliers();
            } else if($url[1] === "add"){
                $immobilierController->newImmobilierForm();
            } else if($url[1] === "gvalid"){
                $immobilierController->newImmobilierValidation();
            } else if($url[1] === "edit"){
                $immobilierController->editImmobilierForm($url[2]);
            } else if($url[1] === "editvalid"){
                $immobilierController->editImmobilierValidation();
            }
            else if($url[1] === "delete"){
                $immobilierController->deleteImmobilier($url[2]);
            } 
        break;
    }
}


