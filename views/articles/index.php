<div class="image_slider">
        <div class="slides">
          <div class="slide">
            <img src="<?= PRE ?>/res/images/school1.jpg" alt="">
          </div>
          <div class="slide">
            <img src="<?= PRE ?>/res/images/bibli.jpg" alt="">
          </div>
          <div class="slide">
            <img src="<?= PRE ?>/res/images/school2.jpg" alt="">
          </div>
          <div class="slide">
            <img src="<?= PRE ?>/res/images/primary1.jpg" alt="">
          </div>
        </div>
</div>

<h1 class="section_title">Actualités</h1>

<div class="grid_container">
    <?php foreach($articles as $article): ?>
    <div class="article">
        <div class="article_image">
            <a href="<?= PRE ?>/articles/read/<?= $article['id'] ?>"><img src="<?= PRE ?>/res/images/<?= $article['image'] ?>" onerror="this.src='/tdw/res/images/default.png';"></a>
        </div>
        
        <div class="article_text">
            <h3><a href="<?= PRE ?>/articles/read/<?= $article['id'] ?>"><?= $article['title'] ?></a></h3>
            <p><?= $article['description'] ?></p>
            <a href="<?= PRE ?>/articles/read/<?= $article['id'] ?>">Lire l'article →</a>
        </div>
    </div>
    <?php endforeach; ?>
</div>

<div class="pages">
    <p>pages</p>
    <?php for($i = 1; $i <= $pages; $i++): ?>
        <?php if($i == $page): ?>
            <a data-current="true" href="<?= PRE ?>/articles/index/<?= $i ?>"><span><?= $i ?></span></a>
            <?php continue; ?>
        <?php endif; ?>
        <a href="<?= PRE ?>/articles/index/<?= $i ?>"><span><?= $i ?></span></a>
    <?php endfor; ?>
</div>
