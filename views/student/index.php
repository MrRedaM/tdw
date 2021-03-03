<?php if(isset($_SESSION['person_type']) and $_SESSION['person_type'] == 'student'): ?>
    <div class="login_info">
        <p>Connecté en tant que <?= $_SESSION['person']['first_name'] ?></p>
        <a href="<?= PRE ?>/student/disconnect">Se déconnecter</a>
    </div>
<?php endif; ?>

<h1 class="section_title">Espace élève</h1>

<?php if(isset($_SESSION['person_type']) and $_SESSION['person_type'] == 'student'): ?>

<div class="grid_container">
    <div class="article">
        <div class="article_image">
            <a href="<?= PRE ?>/schedule/classroom/<?= $_SESSION['person']['classroom'] ?>"><img src="<?= PRE ?>/res/images/timetable.png" onerror="this.src='/tdw/res/images/default.png';"></a>
        </div>
        <div class="article_text">
            <h3><a href="<?= PRE ?>/schedule/cycle/1">Mon emploi du temps</a></h3>
            <p>Consulter votre emploi du temps</p>
            <a href="<?= PRE ?>/schedule/cycle/1">Consulter →</a>
        </div>
    </div>
    <div class="article">
        <div class="article_image">
            <a href="<?= PRE ?>/teachers/cycle/1"><img src="<?= PRE ?>/res/images/notes.png" onerror="this.src='/tdw/res/images/default.png';"></a>
        </div>
        <div class="article_text">
            <h3><a href="<?= PRE ?>/teachers/cycle/1">Mes notes</a></h3>
            <p>Consulter vos notes</p>
            <a href="<?= PRE ?>/teachers/cycle/1">Consulter →</a>
        </div>
    </div>
    <div class="article">
        <div class="article_image">
            <a href="<?= PRE ?>/schedule/cycle/0"><img src="<?= PRE ?>/res/images/activities.png" onerror="this.src='/tdw/res/images/default.png';"></a>
        </div>
        <div class="article_text">
            <h3><a href="<?= PRE ?>/schedule/cycle/0">Mes activités</a></h3>
            <p>Consulter vos activités extrascolaires</p>
            <a href="<?= PRE ?>/schedule/cycle/0"">Consulter →</a>
        </div>
    </div>
    <div class="article">
        <div class="article_image">
            <a href="<?= PRE ?>/student/info"><img src="<?= PRE ?>/res/images/account.png" onerror="this.src='/tdw/res/images/default.png';"></a>
        </div>
        <div class="article_text">
            <h3><a href="<?= PRE ?>/student/info">Mes informations</a></h3>
            <p>Consulter vos informations personnelles</p>
            <a href="<?= PRE ?>/student/info"">Consulter →</a>
        </div>
    </div>
</div>
<?php else: ?>
    <div class="login">
        <h2>Connectez-vous pour accéder à vos informations</h2>
        <?php if(isset($account['mail']) and $account['mail'] != ""): ?>
            <p>E-mail ou mot de passe incorrect!</p>
        <?php endif; ?>
        <form method='post' action="<?= PRE ?>/student/connect" class="elevate_hover">
            <img src="<?= PRE ?>/res/images/user.png">
            <input type="email" name="mail" id="mail" placeholder="E-mail" value="<?= $account['mail'] ?>">
            <input type="password" name="password" id="password" placeholder="Mot de passe">
            <input type="submit" value="Se connecter">
        </form>
    </div>
<?php endif; ?>

<h1 class="section_title">Actualités élèves</h1>

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
            <a data-current="true" href="<?= PRE ?>/student/index/<?= $i ?>"><span><?= $i ?></span></a>
            <?php continue; ?>
        <?php endif; ?>
        <a href="<?= PRE ?>/student/index/<?= $i ?>"><span><?= $i ?></span></a>
    <?php endfor; ?>
</div>
