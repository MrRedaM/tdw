<div class="p_page">
    <h1>Gestion de la présentation</h1>

    <form method="post" action="admin_presentation/new">
        <input type="submit" value="Nouveau paragraphe" class="new">
    </form>

    <table class="admin_table">
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
                        <div class="actions">
                            <form method="post" action="admin_presentation/edit/<?= $p['id'] ?>">
                                <input type="submit" value="Modifier" class="edit">
                            </form>
                            <form method="post" action="admin_presentation/delete/<?= $p['id'] ?>">
                                <input type="submit" value="Supprimer" class="delete">
                            </form>
                        </div>
                        
                    </td>
                </tr>            
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
