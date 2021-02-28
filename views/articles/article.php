<div class="read_article">
    <div class="read_header">
        <div class="read_title">
            <h1><?= $article['title'] ?></h1>
            <?php $date = explode('-', explode(' ', $article['created'])[0]); ?>
            <?php $time = explode(':', explode(' ', $article['created'])[1]); ?>
            <p>Publié le <?= $date[2].'-'.$date[1].'-'.$date[0] ?>
                à <?= $time[0].':'.$time[1] ?></p>
        </div>
        <div class="tags">
            <?php foreach($tags as $tag): ?>
                <?php if(strpos($article['tags'], '#'.$tag['id'].'#') !== false): ?>
                    <a href=""><?= $tag['name'] ?></a>
                <?php endif ?>
            <?php endforeach; ?>
        </div>
    </div>
    <?php if($article['image'] != 'default.png' and $article['image'] != ""): ?>
        <img class="read_image" src="<?= PRE ?>/res/images/<?= $article['image'] ?>">
    <?php endif; ?>
    
    <p class="read_text"><?= $article['description'] ?></p>
</div>



