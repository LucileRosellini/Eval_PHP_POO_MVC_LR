<?php ob_start() ?>

<form method="POST" action="<?= URL ?>?page=immobilier/editvalid">
  <div class="form-group">
    <label for="titre">Titre</label>
    <input type="text" class="form-control" value="<?= $immobilier->getTitre()?>" name="titre" id="titre">
  </div>
  <div class="form-group">
    <label for="adresse">Adresse</label>
    <input type="text" class="form-control" value="<?= $immobilier->getAdresse()?>" name="adresse" id="adresse">
  </div>
  <div class="form-group">
    <label for="ville">Ville</label>
    <input type="text" class="form-control" value="<?= $immobilier->getVille()?>" name="ville" id="adresse">
  </div>
   <div class="form-group">
    <label for="cp">Code Postal</label>
    <input type="number" class="form-control" value="<?= $immobilier->getCp()?>" name="cp" id="cp">
  </div>
   <div class="form-group">
    <label for="surface">Surface</label>
    <input type="number" class="form-control" value="<?= $immobilier->getSurface()?>" name="surface" id="surface">
  </div>
   <div class="form-group">
    <label for="prix">Prix</label>
    <input type="number" class="form-control" value="<?= $immobilier->getPrix()?>" name="prix" id="prix">
  </div>
   <div class="form-group">
    <label for="photo">Photo</label>
    <input type="text" class="form-control" value="<?= $immobilier->getPhoto()?>" name="photo" id="photo">
  </div>
   <div class="form-group">
    <label for="type">Type</label>
    <input type="bool" class="form-control" value="<?= $immobilier->getType()?>" name="type" id="type">
  </div>
   <div class="form-group">
    <label for="description">Description</label>
    <input type="text" class="form-control" value="<?= $immobilier->getDescription()?>" name="description" id="description">
  </div>

  <input type="hidden" value="<?= $immobilier->getId()?>" name="id" id="id">
  <button type="submit" class="btn btn-primary">Modifier</button>
</form>

<?php
$content =  ob_get_clean();
$title = "Edition de: " . $immobilier->getTitre() ;
require_once "base.html.php";
?>