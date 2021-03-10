<section>
    <h1>Modifier plat</h1>

    <form method="post" action="<?= PRE ?>/admin_food/applyEdit/<?= $day['id'] ?>" class="vform">
        <label for="plat">Titre</label>
        <input type="text" name="plat" id="plat" placeholder="Description du plat" value="<?= $day['menu'] ?>" required> 
        <input type="submit" value="Appliquer" class="new">
    </form>
</section>