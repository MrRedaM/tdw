<h2>Nouveau article</h2>

<form method="post" action="<?= PRE ?>/admin_articles/applyNew" enctype="multipart/form-data">
    <input type="text" name="article_title" id="article_title" placeholder="Titre de l'article" required><br>
    <textarea cols="40" rows="10" name="article_desc" id="article_desc" placeholder="Contenu" required></textarea><br>
    <input type="file" accept="image/*" name="image" id="image"><br>
    <p>Tags</p>
    <?php foreach($tags as $tag): ?>
        <input type="checkbox" name="tag<?= $tag['id'] ?>" id="tag<?= $tag['id'] ?>"><?= $tag['name'] ?></input>
    <?php endforeach ?>
    <br>
    <input type="submit" value="Publier">
</form>