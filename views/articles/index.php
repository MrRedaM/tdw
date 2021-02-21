<h2>Accueil</h2>

<h3>Actualités</h3>

<?php foreach($articles as $article): ?>
    <h3><a href="articles/read/<?= $article['id'] ?>"><?= $article['title'] ?></a></h3>
    <p><?= $article['description'] ?></p>
<?php endforeach; ?>