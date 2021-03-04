<section>
    <h1>Modifier paragraphe</h1>

    <form method="post" action="<?= PRE ?>/admin_presentation/applyEdit/<?= $p['id'] ?>" class="vform">
        <label for="index">Position du paragraphe</label>
        <input type="number" name="index" id="index" placeholder="Titre de l'article"
        value="<?= $p['p_index'] ?>">
        <label for="content">Contenu</label>
        <textarea cols="40" rows="10" name="content" id="content" placeholder="Contenu">
        <?= $p['content'] ?></textarea>
        <label for="image">Image (optionel)</label>
        <input type="file" accept="image/*" name="image" id="image">
        <input type="submit" value="Appliquer" class="new">
    </form>
</section>
