<?php ob_start() ?>

<div>Hello World</div>

<form method="POST" action="<?= URL ?>immobilier/ivalid">
  <div class="form-group">
    <label for="titre">Titre</label>
    <input type="text" class="form-control" name="titre" id="titre">
  </div>
  <div class="form-group">
    <label for="adresse">Adresse</label>
    <input type="text" class="form-control" name="adresse" id="adresse">
  </div>
  <div class="form-group">
    <label for="ville">Ville</label>
    <input type="text" class="form-control" name="ville" id="ville">
  </div>
  <div class="form-group">
    <label for="cp">Code Postal</label>
    <input type="number" class="form-control" name="cp" id="cp">
  </div>
  <div class="form-group">
    <label for="Surface">Surface</label>
    <input type="number" class="form-control" name="surface" id="surface">
  </div>
  <div class="form-group">
    <label for="prix">Prix</label>
    <input type="number" class="form-control" name="prix" id="prix">
  </div>
  <div class="form-group">
    <label for="photo">Photo</label>
    <input type="text" class="form-control" name="photo" id="photo">
  </div>
  <div class="form-group">
    <label for="type">Type</label>
    <input type="bool" class="form-control" name="type" id="type">
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <input type="text" class="form-control" name="description" id="description">
  </div>
  <button type="submit" class="btn btn-primary">Ajouter</button>
</form>

<?php
$content =  ob_get_clean();
$titre = "H3110 W0r1d";
require_once "base.html.php";
?>