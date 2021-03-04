<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>

    <link rel="stylesheet" href="/tdw/res/fonts/fonts.css">

    <link rel="stylesheet" href="/tdw/res/css/login.css">
</head>
<body>
    <div class="login">
        <h2>Login to panel</h2>
        <?php if(isset($account['mail']) and $account['mail'] != ""): ?>
            <p>E-mail ou mot de passe incorrect!</p>
        <?php endif; ?>
        <form method="post" action="<?= PRE ?>/admin/login" class="elevate_hover">
            <img src="<?= PRE ?>/res/images/user.png">
            <input type="text" id="mail" name="mail" placeholder="E-mail" value="<?php if(isset($account['mail'])){echo $account['mail'];} ?>">
            <input type="password" id="passwd" name="passwd" placeholder="Password">
            <input type="submit" value="Login">
        </form>
    </div>
    
</body>
</html>

