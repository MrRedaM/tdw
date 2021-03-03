<section>
    <h1>Informations personnelles</h1>
    <img src="<?= PRE ?>/res/images/user.jpg" class="account_img_big">
    <div class="info">
        <p>Nom</p>
        <p><?= $_SESSION['person']['last_name'] ?></p>

        <p>Prénom</p>
        <p><?= $_SESSION['person']['first_name'] ?></p>

        <p>E-mail</p>
        <p><?= $_SESSION['person']['mail'] ?></p>

        <p>Téléphone 1</p>
        <p><?= $_SESSION['person']['phone1'] ?></p>

        <p>Téléphone 2</p>
        <p><?= $_SESSION['person']['phone2'] ?></p>

        <p>Téléphone3</p>
        <p><?= $_SESSION['person']['phone3'] ?></p>
</div>
</section>
