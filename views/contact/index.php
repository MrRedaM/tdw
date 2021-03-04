<section>
    <h1>Contact</h1>
    <div class="info">
        <p>Téléphone fixe</p>
        <p><?= S::value('contact_phone', $str) ?></p>
        <p>E-mail</p>
        <a href="mailto: <?= S::value('contact_mail', $str) ?>"><?= S::value('contact_mail', $str) ?></a>
        <p>Téléphone fixe</p>
        <p><?= S::value('contact_fax', $str) ?></p>
    </div>
</section>