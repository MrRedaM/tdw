<h2>Modifier paragraphe</h2>

<form method="post" action="<?= PRE ?>/admin_presentation/applyEdit/<?= $p['id'] ?>">
    <input type="number" name="index" id="index" placeholder="Titre de l'article"
    value="<?= $p['p_index'] ?>"><br>
    <textarea cols="40" rows="10" name="content" id="content" placeholder="Contenu">
    <?= $p['content'] ?></textarea><br>
    <input hidden type="file" accept="image/*" name="image" id="image">
    <input type="submit" value="Appliquer">
</form>