<section>
    <h1>Gestion des articles</h1>

    <form method="post" action="admin_articles/new">
        <input type="submit" value="Nouveau article" class="new">
    </form>

    <table class="admin_table">
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
                        <div class="actions">
                            <form method="post" action="admin_articles/edit/<?= $article['id'] ?>">
                                <input type="submit" value="Modifier" class="edit">
                            </form>
                            <form method="post" action="admin_articles/delete">
                                <input type="text" hidden name="id_article" id="id_article" value="<?= $article['id'] ?>">
                                <input type="submit" value="Supprimer" class="delete">
                            </form>
                        </div>
                        
                    </td>
                </tr>            
            <?php endforeach; ?>
        </tbody>
    </table>
</section>
