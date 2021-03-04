<section>
    <h1>Nouveau paragraphe</h1>

    <form method="post" action="<?= PRE ?>/admin_presentation/applyNew" class="vform">
        <label for="index">Position du paragraphe</label>
        <input type="number" name="index" id="index" placeholder="Index du paragraphe">
        <label for="content">Contenu</label>
        <textarea cols="40" rows="20" name="content" id="content" placeholder="Contenu"></textarea>
        <label for="image">Image (optionel)</label>
        <input type="file" accept="image/*" name="image" id="image">
        <input type="submit" value="Publier" class="new">
    </form>
</section>
