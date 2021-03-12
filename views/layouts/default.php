<head>
    <meta charset="utf-8"/>
    <title>MySchool</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="/tdw/res/fonts/fonts.css">
    <!-- Styles -->
    <link rel="stylesheet" href="/tdw/res/css/style.css">
    <link rel="stylesheet" href="/tdw/res/css/articles.css">
    <link rel="stylesheet" href="/tdw/res/css/presentation.css">
    <link rel="stylesheet" href="/tdw/res/css/schedule.css">
    <link rel="stylesheet" href="/tdw/res/css/filter.css">
    <link rel="stylesheet" href="/tdw/res/css/teachers.css">
    <link rel="stylesheet" href="/tdw/res/css/menu.css">
    <link rel="stylesheet" href="/tdw/res/css/login.css">
    <link rel="stylesheet" href="/tdw/res/css/account.css">
    <link rel="stylesheet" href="/tdw/res/css/marks.css">
    <link rel="stylesheet" href="/tdw/res/css/activities.css">
    <link rel="stylesheet" href="/tdw/res/css/slider.css">
    
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
                <li><a href="<?= PRE ?>/presentation">Présentation</a></li>
                <li><a href="">Cycles</a>
                    <ul>
                        <li><a href="<?= PRE ?>/primary">Primaire</a></li>
                        <li><a href="<?= PRE ?>/secondary">Moyen</a></li>
                        <li><a href="<?= PRE ?>/highschool">Lycéé</a></li>
                    </ul>
                </li>
                <li><a href="<?= PRE ?>/student">Espace élève</a></li>
                <li><a href="<?= PRE ?>/parents">Espace parent</a></li>
                <li><a href="<?= PRE ?>/contact">Contact</a></li>
            </ul>
        </div>
        
        <div class="social">
            <a target="_blank" href="http://facebook.com"><img src="<?= PRE ?>/res/images/facebook.png" alt=""></a>
            <a target="_blank" href="http://instagram.com"><img src="<?= PRE ?>/res/images/instagram.png" alt=""></a>
            <a target="_blank" href="http://twitter.com"><img src="<?= PRE ?>/res/images/twitter.png" alt=""></a>
            <a hidden target="_blank" href="http://whatsapp.com"><img src="<?= PRE ?>/res/images/whatsapp.png" alt=""></a>
            <a target="_blank" href="http://youtube.com"><img src="<?= PRE ?>/res/images/youtube.png" alt=""></a>
        </div>
    </header>

    <main>
        <?= $content ?>
    </main>

    <footer>
        <div class="bottom_menu">
            <div class="logo">
                <img src="<?= PRE ?>/res/images/logo.png" alt="">
                <h1>MySchool</h1>
            </div>
            <div>
                <p>Notre école</p>
                <ul>
                    <li><a href="<?= PRE ?>/articles">Accueil</a></li>
                    <li><a href="<?= PRE ?>/presentation">Présentation</a></li>
                    <li><a href="<?= PRE ?>/contact">Contact</a></li>
                </ul>                
            </div>
            <div>
                <p>Cycles</p>
                <ul>
                    <li><a href="<?= PRE ?>/primary">Primaire</a></li>
                    <li><a href="<?= PRE ?>/secondary">Moyen</a></li>
                    <li><a href="<?= PRE ?>/highschool">Lycéé</a></li>
                </ul>
            </div>
            <div>
                <p>Membres</p>
                <ul>
                    <li><a href="<?= PRE ?>/student">Espace élève</a></li>
                    <li><a href="<?= PRE ?>/parents">Espace parent</a></li>
                    <li><a href="<?= PRE ?>/teacher">Espace enseignant</a></li>
                </ul>
                
            </div>
        </div>
        <p>Copyright ©  2020-2021 MySchool. All rights reserved.</p>
    </footer>
</body>
