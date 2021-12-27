<?php
$database=new PDO ('mysql:host=localhost;dbname=immobilier','root','');
$results = $database->query('SELECT * FROM logement');
while ($row=$results->fetch())
{
    echo $row['titre'].'<br>';
}
?>