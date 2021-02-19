<h2>Gestion de la présentation</h2>

<form method="post" action="admin_presentation/new">
    <input type="submit" value="Nouveau paragraphe">
</form>

<table>
    <thead>
        <th>Index</th>
        <th>Contenu</th>
        <th>Actions</th>
    </thead>
    <tbody>
        <?php foreach($paragraphs as $p): ?>
            <tr>
                <td>
                <h3><?= $p['p_index'] ?></h3>
                </td>
                <td>
                <?= $p['content'] ?>
                </td>
                <td>
                    <form method="post" action="admin_presentation/edit/<?= $p['id'] ?>">
                        <input type="submit" value="Modifier">
                    </form>
                    <form method="post" action="admin_presentation/delete/<?= $p['id'] ?>">
                        <input type="submit" value="Supprimer">
                    </form>
                </td>
            </tr>            
        <?php endforeach; ?>
    </tbody>
</table>