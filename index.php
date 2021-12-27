<?php
// Necessaire pour POC BDD et Index PHP
// $database=new PDO ('mysql:host=localhost;dbname=immobilier','root','');
// $results = $database->query('SELECT * FROM logement');
// while ($row=$results->fetch())
// {
//     echo $row['titre'].'<br>';
// }

define("URL" , str_replace("index.php","",(isset($_SERVER['HTTPS']) ? "https" : "http") . "://".$_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] ));

require_once "controller/immobilierController.php";




?>