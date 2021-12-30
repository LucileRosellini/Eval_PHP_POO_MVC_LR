<?php ob_start() ?>

<form method="POST" action="<?= URL ?>immobilier/editvalid">
  <div class="form-group">
    <label for="titre">Titre</label>
    <input type="text" class="form-control" value="<?= $immobilier->getTitle()?>" name="titre" id="titre">
  </div>
  <div class="form-group">
    <label for="adresse">Adresse</label>
    <input type="number" class="form-control" value="<?= $immobilier->getAdresse()?>" name="Adresse" id="adresse">
  </div>
  <input type="hidden" name="id-immobilier" value="<?= $immobilier->getId()?>">
  <button type="submit" class="btn btn-primary">Ajouter</button>
</form>

<?php
$content =  ob_get_clean();
$title = "Edition de: " . $immobilier->getTitre() ;
require_once "base.html.php";
?>