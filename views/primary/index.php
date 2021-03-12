<h1 class="section_title">Cycle Primaire</h1>

<div class="grid_container">
    <div class="article">
        <div class="article_image">
            <a href="<?= PRE ?>/schedule/cycle/1"><img src="<?= PRE ?>/res/images/timetable.png" onerror="this.src='/tdw/res/images/default.png';"></a>
        </div>
        <div class="article_text">
            <h3><a href="<?= PRE ?>/schedule/cycle/1">Emplois du temps</a></h3>
            <p>Consulter tous les horaires d'études des élèves du primaire</p>
            <a href="<?= PRE ?>/schedule/cycle/1">Voir les horaires →</a>
        </div>
    </div>
    <div class="article">
        <div class="article_image">
            <a href="<?= PRE ?>/teachers/cycle/1"><img src="<?= PRE ?>/res/images/teacher.png" onerror="this.src='/tdw/res/images/default.png';"></a>
        </div>
        <div class="article_text">
            <h3><a href="<?= PRE ?>/teachers/cycle/1">Enseignants</a></h3>
            <p>Liste des enseignants du primaire et leurs heures de reception</p>
            <a href="<?= PRE ?>/teachers/cycle/1">Voir les enseignants →</a>
        </div>
    </div>
    <div class="article">
        <div class="article_image">
            <a href="<?= PRE ?>/info/cycle/1"><img src="<?= PRE ?>/res/images/info.png" onerror="this.src='/tdw/res/images/default.png';"></a>
        </div>
        <div class="article_text">
            <h3><a href="<?= PRE ?>/info/cycle/1">Informations utiles</a></h3>
            <p>Consulter les informations utiles concernant le primaire</p>
            <a href="<?= PRE ?>/info/cycle/1">Consulter →</a>
        </div>
    </div>
    <div class="article">
        <div class="article_image">
            <a href="<?= PRE ?>/food"><img src="<?= PRE ?>/res/images/fork.png" onerror="this.src='/tdw/res/images/default.png';"></a>
        </div>
        <div class="article_text">
            <h3><a href="<?= PRE ?>/food">Menu cantine</a></h3>
            <p>Consulter le menu hebdomadaire de la cantine</p>
            <a href="<?= PRE ?>/food"">Consulter →</a>
        </div>
    </div>
</div>


<h1 class="section_title">Actualités du primaire</h1>

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
            <a data-current="true" href="<?= PRE ?>/primary/index/<?= $i ?>"><span><?= $i ?></span></a>
            <?php continue; ?>
        <?php endif; ?>
        <a href="<?= PRE ?>/primary/index/<?= $i ?>"><span><?= $i ?></span></a>
    <?php endfor; ?>
</div>
