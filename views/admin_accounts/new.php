<section>
    <h1>Nouveau compte utilisateur</h1>

    <form method='post' action="<?= PRE ?>/admin_accounts/apply_new" class="vform">
        <label for="last_name">Nom</label>
        <input type="text" name="last_name" id="last_name" placeholder="Nom" required>
        <label for="first_name">Prénom</label>
        <input type="text" name="first_name" id="first_name" placeholder="Prénom" required>
        <label for="mail">E-mail</label>
        <input type="text" name="mail" id="mail" placeholder="E-mail" required>
        <label for="address">Adresse</label>
        <input type="text" name="address" id="address" placeholder="Adresse" required>
        <label for="phone1">N.Télephone 1</label>
        <input type="text" name="phone1" id="phone1" placeholder="Téléphone 1" required>
        <label for="phone2">N.Télephone 2</label>
        <input type="text" name="phone2" id="phone2" placeholder="Téléphone 2" required>
        <label for="phone3">N.Télephone 3</label>
        <input type="text" name="phone3" id="phone3" placeholder="Téléphone 3" required>
        <label for="type">Type de compte</label>
        <select name="type" id="type" required">
            <option value="type" selected hidden disabled>Type</option>
            <option value="teacher">Enseignant</option>
            <option value="student">Etudiant</option>
            <option value="tutor">Parent</option>
        </select>
        <input type="submit" value="Créer" class="new">
    </form>
</section>
