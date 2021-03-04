<section>
    <h1>Nouveau article</h1>

    <form method="post" action="<?= PRE ?>/admin_articles/applyNew" enctype="multipart/form-data" class="vform">
        <label for="acticle_title">Titre</label>
        <input type="text" name="article_title" id="article_title" placeholder="Titre de l'article" required>
        <label for="acticle_desc">Contenu</label>
        <textarea cols="40" rows="20" name="article_desc" id="article_desc" placeholder="Contenu" required></textarea>
        <label for="image">Image</label>
        <input type="file" accept="image/*" name="image" id="image">
        <label >Tags</label>
        <?php foreach($tags as $tag): ?>
            <div class="tag">
                <label for="tag<?= $tag['id'] ?>"><?= $tag['name'] ?></label>
                <input type="checkbox" name="tag<?= $tag['id'] ?>" id="tag<?= $tag['id'] ?>">
            </div>
            
        <?php endforeach ?>
        <input type="submit" value="Publier" class="new">
    </form>
</section>
