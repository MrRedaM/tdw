<h1>Bienvenue dans la page d'acceuil!</h1>

<h2>Liste des articles</h2>

<?php foreach($articles as $article): ?>
    <h3><a href="articles/read/<?= $article['id'] ?>"><?= $article['title'] ?></a></h3>
    <p><?= $article['description'] ?></p>
<?php endforeach; ?>