<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="/tdw/res/fonts/fonts.css">
    <!-- Styles -->
    <link rel="stylesheet" href="/tdw/res/css/admin.css">
    <link rel="stylesheet" href="/tdw/res/css/form.css">
    <link rel="stylesheet" href="/tdw/res/css/filter.css">
    <link rel="stylesheet" href="/tdw/res/css/login.css">
    <link rel="stylesheet" href="/tdw/res/css/account.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="<?= PRE ?>/res/images/logo.png" alt="">
            <h1>MySchool (admin)</h1>
        </div>
        
    </header>

    <?php if(isset($_SESSION['person_type']) and $_SESSION['person_type'] == 'admin'): ?>
        <div class="login_info">
            <p>Connecté en tant que <?= $_SESSION['person']['first_name'] ?></p>
            <a href="<?= PRE ?>/admin/disconnect">Se déconnecter</a>
        </div>
    <?php endif; ?>
    
    <main>
        <?= $content ?>
    </main>

    <footer>
        <p>Copyright ©  2020-2021 MySchool. All rights reserved.</p>
    </footer>
</body>
</html>