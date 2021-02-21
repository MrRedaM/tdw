<h2>Enseignants</h2>

<form method='post'>
    <input type="search" name="search" id="search" placeholder="Rechercher..." value="<?= $_POST['search'] ?>">
    <!--input type="submit" value="Filtrer"-->
</form>

<table>
    <thead>
        <th>Nom et prénom</th>
    </thead>
    <tbody>
        <?php foreach($teachers as $teacher): ?>
            <tr>
                <td>
                    <a href="<?= PRE ?>/admin_teachers/view/<?= $teacher['id'] ?>">
                        <?= $teacher['last_name'] ?> <?= $teacher['first_name'] ?>
                    </a>
                </td>           
        <?php endforeach; ?>
    </tbody>
</table>