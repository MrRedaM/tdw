<head>
    <meta charset="utf-8"/>
    <title>MySchool</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="/tdw/res/fonts/fonts.css">
    <!-- Styles -->
    <link rel="stylesheet" href="/tdw/res/css/style.css">
    <link rel="stylesheet" href="/tdw/res/css/articles.css">
    
</head>

<body>
    <header>

        <div class="logo">
            <img src="<?= PRE ?>/res/images/logo.png" alt="">
            <h1>MySchool</h1>
        </div>
        
        <div class="top_menu">
            <ul>
                <li><a href="<?= PRE ?>/articles">Accueil</a></li>
                <li><a href="">Présentation</a></li>
                <li><a href="">Cycles</a>
                    <ul>
                        <li><a href="">Primaire</a></li>
                        <li><a href="">Moyen</a></li>
                        <li><a href="">Lycéé</a></li>
                    </ul>
                </li>
                <li><a href="">Espace élève</a></li>
                <li><a href="">Espace parent</a></li>
                <li><a href="">Contact</a></li>
            </ul>
        </div>
        
        <div class="social">
            <a target="_blank" href="http://facebook.com"><img src="<?= PRE ?>/res/images/facebook.png" alt=""></a>
            <a target="_blank" href="http://instagram.com"><img src="<?= PRE ?>/res/images/instagram.png" alt=""></a>
            <a target="_blank" href="http://twitter.com"><img src="<?= PRE ?>/res/images/twitter.png" alt=""></a>
            <a hidden target="_blank" href="http://whatsapp.com"><img src="<?= PRE ?>/res/images/whatsapp.png" alt=""></a>
            <a target="_blank" href="http://youtube.com"><img src="<?= PRE ?>/res/images/youtube.png" alt=""></a>
        </div>

        <h3 hidden><a href="<?= PRE ?>/admin">Admin Panel (temp)</a></h3>
        <ul hidden>
            <li><a href="<?= PRE ?>/admin_articles">Articles</a></li>
            <li><a href="<?= PRE ?>/admin_presentation">Présentations</a></li>
            <li><a href="<?= PRE ?>/admin_calendar">Emplois du temps</a></li>
            <li><a href="<?= PRE ?>/admin_teachers">Enseignants</a></li>
            <li><a href="<?= PRE ?>/admin_accounts">Comptes</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="">Paramètres</a></li>
        </ul>
    </header>

    <main>
        <?= $content ?>
    </main>

    <footer>
        <h3>Copyright ©  2020-2021 MySchool. All rights reserved.</h3>
    </footer>
</body>
