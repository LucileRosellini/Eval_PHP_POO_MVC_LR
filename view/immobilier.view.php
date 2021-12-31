<?php ob_start() ?>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>id</th>
                <th>titre</th>
                <th>adresse</th>
                <th>ville</th>
                <th>cp</th>
                <th>surface</th>
                <th>prix</th>
                <th>photo 200x200</th>
                <th>type</th>
                <th>description</th>
                <th>modifier</th>
                <th>supprimer</th>
            </tr>
        </thead>
        <tbody>

            <?php foreach ($immobiliers as $value) : ?>
                <tr>
                    <th><?= $value->getId() ?></th>
                    <td><?= $value->getTitre() ?></td>
                    <td><?= $value->getAdresse() ?></td>
                    <td><?= $value->getVille() ?></td>
                    <td><?= $value->getCp() ?></td>
                    <td><?= $value->getSurface() ?></td>
                    <td><?= $value->getPrix() ?></td>
                    <td><img src="<?= $value->getPhoto() ?>"/></td>
                    <td><?= $value->getType() ?></td>
                    <td><?= $value->getDescription() ?></td>
                    <td><a class="nav-link" href="<?= URL ?>?page=immobilier/edit/<?= $value->getId() ?>">modifier</a></td>
		            <td><a class="nav-link" href="<?= URL ?>?page=immobilier/delete/<?= $value->getId() ?>">supprimer</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>


<?php
$content = ob_get_clean();
$title = "Logement Dispo";
require_once "base.html.php";
?>