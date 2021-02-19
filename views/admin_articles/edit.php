<h2>Modifier article</h2>

<form method="post" action="<?= PRE ?>/admin_articles/applyEdit/<?= $article['id'] ?>">
    <input type="text" name="article_title" id="article_title" placeholder="Titre de l'article"
    value="<?= $article['title'] ?>"><br>
    <textarea cols="40" rows="10" name="article_desc" id="article_desc" placeholder="Contenu">
    <?= $article['description'] ?></textarea><br>
    <input hidden type="file" accept="image/*" name="image" id="image">
    <input type="submit" value="Appliquer">
</form>