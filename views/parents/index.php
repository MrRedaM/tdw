<?php if(isset($_SESSION['person_type']) and $_SESSION['person_type'] == 'tutor'): ?>
    <div class="login_info">
        <p>Connecté en tant que <?= $_SESSION['person']['first_name'] ?></p>
        <div>
            <p>Enfant sélectionné</p>
            <form method='post' action="<?= PRE ?>/parents/child/">
                <select name="child" id="child">
                    <?php $i = 0; foreach($_SESSION['person']['children'] as $child): ?>
                        <option value="<?= $i ?>"
                                <?php if($i == $_SESSION['child_index']): echo "selected"; endif; ?>>
                            <?php echo $child['first_name']; $i++; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                <input type="submit" value="Valider">
            </form>
        </div>
        
        <a href="<?= PRE ?>/parents/disconnect">Se déconnecter</a>
    </div>
<?php endif; ?>

<h1 class="section_title">Espace parent</h1>

<?php if(isset($_SESSION['person_type']) and $_SESSION['person_type'] == 'tutor'): ?>

<div class="grid_container">
    <div class="article">
        <div class="article_image">
            <a href="<?= PRE ?>/schedule/classroom/<?= $_SESSION['person']['children'][$_SESSION['child_index']]['classroom'] ?>">
            <img src="<?= PRE ?>/res/images/timetable.png" onerror="this.src='/tdw/res/images/default.png';"></a>
        </div>
        <div class="article_text">
            <h3><a href="<?= PRE ?>/schedule/cycle/1">Emploi du temps de <?= $_SESSION['person']['children'][$_SESSION['child_index']]['first_name'] ?></a></h3>
            <p>Consulter l'emploi du temps de votre enfant</p>
            <a href="<?= PRE ?>/schedule/cycle/1">Consulter →</a>
        </div>
    </div>
    <div class="article">
        <div class="article_image">
            <a href="<?= PRE ?>/parents/marks"><img src="<?= PRE ?>/res/images/notes.png" onerror="this.src='/tdw/res/images/default.png';"></a>
        </div>
        <div class="article_text">
            <h3><a href="<?= PRE ?>/parents/marks">Notes de <?= $_SESSION['person']['children'][$_SESSION['child_index']]['first_name'] ?></a></h3>
            <p>Consulter les notes de votre enfant</p>
            <a href="<?= PRE ?>/parents/marks">Consulter →</a>
        </div>
    </div>
    <div class="article">
        <div class="article_image">
            <a href="<?= PRE ?>/parents/activities"><img src="<?= PRE ?>/res/images/activities.png" onerror="this.src='/tdw/res/images/default.png';"></a>
        </div>
        <div class="article_text">
            <h3><a href="<?= PRE ?>/parents/activities">Activités de <?= $_SESSION['person']['children'][$_SESSION['child_index']]['first_name'] ?></a></h3>
            <p>Consulter les activités extrascolaires de votre enfant</p>
            <a href="<?= PRE ?>/parents/activities">Consulter →</a>
        </div>
    </div>
    <div class="article">
        <div class="article_image">
            <a href="<?= PRE ?>/parents/info"><img src="<?= PRE ?>/res/images/account.png" onerror="this.src='/tdw/res/images/default.png';"></a>
        </div>
        <div class="article_text">
            <h3><a href="<?= PRE ?>/parents/info">Mes informations</a></h3>
            <p>Consulter vos informations personnelles</p>
            <a href="<?= PRE ?>/parents/info"">Consulter →</a>
        </div>
    </div>
</div>
<?php else: ?>
    <div class="login">
        <h2>Connectez-vous pour accéder à vos informations</h2>
        <?php if(isset($account['mail']) and $account['mail'] != ""): ?>
            <p>E-mail ou mot de passe incorrect!</p>
        <?php endif; ?>
        <form method='post' action="<?= PRE ?>/parents/connect" class="elevate_hover">
            <img src="<?= PRE ?>/res/images/user.png">
            <input type="email" name="mail" id="mail" placeholder="E-mail" value="<?= $account['mail'] ?>">
            <input type="password" name="password" id="password" placeholder="Mot de passe">
            <input type="submit" value="Se connecter">
        </form>
    </div>
<?php endif; ?>

<h1 class="section_title">Actualités parents</h1>

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
