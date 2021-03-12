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
    <link rel="stylesheet" href="/tdw/res/css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <script>
        function myFunction() {
            let x = document.getElementById("drawer");
            if (x.className === "drawer") {
                x.className += " responsive";
            } else {
                x.className = "drawer";
            }
        }
    </script>

</head>

<body>
    <div id="drawer" class="drawer">
        <a href="javascript:void(0);" class="icon" id="navbutton1" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
        <a href="<?= PRE ?>/articles">Accueil</a>
        <a href="<?= PRE ?>/presentation">Présentation</a>
        <p>Cycles</p>
        <a class="nav_sub" href="<?= PRE ?>/primary">Primaire</a>
        <a class="nav_sub" href="<?= PRE ?>/secondary">Moyen</a>
        <a class="nav_sub" href="<?= PRE ?>/highschool">Lycéé</a>
        <a href="<?= PRE ?>/student">Espace élève</a>
        <a href="<?= PRE ?>/parents">Espace parent</a>
        <a href="<?= PRE ?>/contact">Contact</a>

        <div class="social">
            <a target="_blank" href="http://facebook.com"><img src="<?= PRE ?>/res/images/facebook.png" alt=""></a>
            <a target="_blank" href="http://instagram.com"><img src="<?= PRE ?>/res/images/instagram.png" alt=""></a>
            <a target="_blank" href="http://twitter.com"><img src="<?= PRE ?>/res/images/twitter.png" alt=""></a>
            <a hidden target="_blank" href="http://whatsapp.com"><img src="<?= PRE ?>/res/images/whatsapp.png" alt=""></a>
            <a target="_blank" href="http://youtube.com"><img src="<?= PRE ?>/res/images/youtube.png" alt=""></a>
        </div>
    </div>
    <header>

        <div class="logo">
            <img src="<?= PRE ?>/res/images/logo.png" alt="">
            <h1>MySchool</h1>
        </div>

        <div class="top_menu" id="navbar">
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

        <a href="javascript:void(0);" class="icon" id="navbutton" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
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
