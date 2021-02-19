<h2>Comptes enseignants</h2>

<form method="post" action="admin_accounts/new_teacher">
    <input type="submit" value="Nouveau compte enseignant">
</form>

<form method="post" action="<?= PRE ?>/admin_accounts/teachers">
    <input type="search" name="search" id="search" placeholder="Rechercher..." value="<?= $_POST['search'] ?>">
</form>

<table>
    <thead>
        <th>Nom</th>
        <th>Présnom</th>
        <th>E-mail</th>
        <th>Adresse</th>
        <th>Téléphone 1</th>
        <th>Téléphone 2</th>
        <th>Téléphone 3</th>
    </thead>
    <tbody>
        <?php foreach($teachers as $teacher): ?>
            <tr>
                <td>
                    <?= $teacher['last_name'] ?>
                </td>
                <td>
                    <?= $teacher['first_name'] ?>
                </td>
                <td>
                    <?= $teacher['mail'] ?>
                </td>
                <td>
                    <?= $teacher['address'] ?>
                </td>
                <td>
                    <?= $teacher['phone1'] ?>
                </td>
                <td>
                    <?= $teacher['phone2'] ?>
                </td>
                <td>
                    <?= $teacher['phone3'] ?>
                </td>
                <td>
                    <form method="post" action="admin_accounts/edit_teacher/<?= $teacher['id'] ?>">
                        <input type="submit" value="Modifier">
                    </form>
                    <form method="post" action="admin_presentation/delete_teacher/<?= $teacher['id'] ?>">
                        <input type="submit" value="Supprimer">
                    </form>
                </td>
            </tr>            
        <?php endforeach; ?>
    </tbody>
</table>