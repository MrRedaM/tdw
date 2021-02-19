<h2>Nouveau compte utilisateur</h2>

<form method='post' action="<?= PRE ?>/admin_accounts/apply_new">
    <input type="text" name="last_name" id="last_name" placeholder="Nom" required>
    <input type="text" name="first_name" id="first_name" placeholder="Prénom" required>
    <input type="text" name="mail" id="mail" placeholder="E-mail" required>
    <input type="text" name="address" id="address" placeholder="Adresse" required>
    <input type="text" name="phone1" id="phone1" placeholder="Téléphone 1" required>
    <input type="text" name="phone2" id="phone2" placeholder="Téléphone 2" required>
    <input type="text" name="phone3" id="phone3" placeholder="Téléphone 3" required>
    <select name="type" id="type" required">
        <option value="type" selected hidden disabled>Type</option>
        <option value="teacher">Enseignant</option>
        <option value="student">Etudiant</option>
        <option value="tutor">Parent</option>
    </select>
    <input type="submit" value="Créer">
</form>