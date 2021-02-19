<h2>Gestion des articles</h2>

<form method="post" action="admin_articles/new">
    <input type="submit" value="Nouveau article">
</form>

<table>
    <thead>
        <th>Articles</th>
        <th>Actions</th>
    </thead>
    <tbody>
        <?php foreach($articles as $article): ?>
            <tr>
                <td>
                <h3><a target="_blank" href="articles/read/<?= $article['id'] ?>"><?= $article['title'] ?></a></h3>
                </td>
                <td>
                    <form method="post" action="admin_articles/edit">
                        <input type="text" hidden name="id_article" id="id_article" value="<?= $article['id'] ?>">
                        <input type="submit" value="Modifier">
                    </form>
                    <form method="post" action="admin_articles/delete">
                        <input type="text" hidden name="id_article" id="id_article" value="<?= $article['id'] ?>">
                        <input type="submit" value="Supprimer">
                    </form>
                </td>
            </tr>            
        <?php endforeach; ?>
    </tbody>
</table>