<section>
    <h1>Mise a jour infos contact</h1>

    <form method="post" action="<?= PRE ?>/admin_contact/applyEdit" class="vform">
        <label for="plat">Téléphone</label>
        <input type="text" name="phone" id="phone" placeholder="Description du plat" value="<?= S::value('contact_phone', $str) ?>" required> 
        <label for="plat">E-mail</label>
        <input type="text" name="mail" id="mail" placeholder="Description du plat" value="<?= S::value('contact_mail', $str) ?>" required> 
        <label for="plat">FAX</label>
        <input type="text" name="fax" id="fax" placeholder="Description du plat" value="<?= S::value('contact_fax', $str) ?>" required> 
        <input type="submit" value="Appliquer" class="new">
    </form>
</section>