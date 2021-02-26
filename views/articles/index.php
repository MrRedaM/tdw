<h1 class="section_title">Actualités</h1>

<div class="grid_container">
    <?php foreach($articles as $article): ?>
    <div class="article">
        <div class="article_image">
            <a href=""><img src="<?= PRE ?>/res/images/<?= $article['image'] ?>" onerror="this.src='/tdw/res/images/default.png';"></a>
        </div>
        
        <div class="article_text">
            <h3><a href="articles/read/<?= $article['id'] ?>"><?= $article['title'] ?></a></h3>
            <p><?= $article['description'] ?></p>
            <a href="articles/read/<?= $article['id'] ?>">Lire l'article →</a>
        </div>
        
    </div>
    <?php endforeach; ?>
</div>
