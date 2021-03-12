<section>
    <h1>Modifier article</h1>

    <form method="post" action="<?= PRE ?>/admin_articles/applyEdit/<?= $article['id'] ?>" enctype="multipart/form-data" class="vform">
        <label for="article_title">Titre</label>
        <input type="text" name="article_title" id="article_title" placeholder="Titre de l'article"
        value="<?= $article['title'] ?>">
        <label for="article_desc">Contenu</label>
        <textarea cols="40" rows="10" name="article_desc" id="article_desc" placeholder="Contenu">
        <?= $article['description'] ?></textarea>
        <label for="">Image</label>
        <img src="<?= PRE ?>/res/images/<?= $article['image'] ?>">
        <input type="file" accept="image/*" name="image" id="image">
        <label for="">Tags</label>
        <?php foreach($tags as $tag): ?>
            <div class="tag">
                <label for="tag<?= $tag['id'] ?>"><?= $tag['name'] ?></label>
                <input type="checkbox" name="tag<?= $tag['id'] ?>" id="tag<?= $tag['id'] ?>">
            </div>
        <?php endforeach ?>
        <input type="submit" value="Appliquer" class="new">
    </form>
</section>
