<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"  crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/pulse/bootstrap.min.css" crossorigin="anonymous">
    <title>MVC - POO</title>
</head>
<body>
   
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">

    <a class="navbar-brand" href="<?= URL ?>accueil"><?= $title ?></a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="nav-link" href="<?= URL ?>?page=immobilier">EXCLUSIVITÉS!</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= URL ?>?page=immobilier/add">Ajouter</a>
        </li>


        </ul>
    </div>
    </nav>


   <main>
        <div class="container">
            <h1 class=" my-4 text-center"><?= $title ?></h1>
            <h2 class=" my-4 text-center"><?= $content ?></h2>
        </div>
    </main>

<!-- Inclusion  -->
<!-- contenu de immobilier.view.php -->
<!-- Jusqu'ici? -->




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>