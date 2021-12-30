<?php ob_start();
?>

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
                <th>photo</th>
                <th>type</th>
                <th>description</th>
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
                    <td><?= $value->getPhoto() ?></td>
                    <td><?= $value->getType() ?></td>
                    <td><?= $value->getDescription() ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>


<?php
$content = ob_get_clean();
$title = "Logement Dispo";
require_once "base.html.php";
?>