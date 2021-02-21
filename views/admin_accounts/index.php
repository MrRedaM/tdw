<h2>Gestion des comptes</h2>

<form method='post'>
    <input type="search" name="search" id="search" placeholder="Rechercher..." value="<?= $_POST['search'] ?>">
    <select name="type" id="type" value="<?= $_POST['type'] ?>">
        <option value="type" selected hidden disabled>Type</option>
        <option value="all">Tous</option>
        <option value="teachers">Enseignants</option>
        <option value="students">Etudiants</option>
        <option value="tutors">Parents</option>
    </select>
    <input type="submit" value="Filtrer">
</form>

<form method="post" action="<?= PRE ?>/admin_accounts/new">
    <input type="submit" value="Nouveau compte">
</form>

<table>
    <thead>
        <th>Nom</th>
        <th>Prénom</th>
        <th>E-mail</th>
        <th>Adresse</th>
        <th>Téléphone 1</th>
        <th>Téléphone 2</th>
        <th>Téléphone 3</th>
    </thead>
    <tbody>
        <?php foreach($persons as $person): ?>
            <tr>
                <td>
                    <?= $person['last_name'] ?>
                </td>
                <td>
                    <?= $person['first_name'] ?>
                </td>
                <td>
                    <?= $person['mail'] ?>
                </td>
                <td>
                    <?= $person['address'] ?>
                </td>
                <td>
                    <?= $person['phone1'] ?>
                </td>
                <td>
                    <?= $person['phone2'] ?>
                </td>
                <td>
                    <?= $person['phone3'] ?>
                </td>
                <td>
                    <form method="post" action="admin_accounts/edit/<?= $person['id'] ?>">
                        <input type="submit" value="Modifier">
                    </form>
                    <form method="post" action="<?= PRE ?>/admin_accounts/delete/<?= $person['id'] ?>">
                        <input type="submit" value="Supprimer">
                    </form>
                </td>
            </tr>            
        <?php endforeach; ?>
    </tbody>
</table>