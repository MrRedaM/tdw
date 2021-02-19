<h2>Nouveau paragraphe</h2>

<form method="post" action="<?= PRE ?>/admin_presentation/applyNew">
    <input type="number" name="index" id="index" placeholder="Index du paragraphe"><br>
    <textarea cols="40" rows="10" name="content" id="content" placeholder="Contenu"></textarea><br>
    <input hidden type="file" accept="image/*" name="image" id="image">
    <input type="submit" value="Publier">
</form>