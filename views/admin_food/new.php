<section>
    <h1>Nouveau plat</h1>

    <form method="post" action="<?= PRE ?>/admin_food/applyNew" class="vform">
        <label for="plat">Jour</label>
        <input type="date" name="date" id="date" placeholder="Jour" required"> 
        <label for="plat">Titre</label>
        <input type="text" name="plat" id="plat" placeholder="Description du plat" required> 
        <input type="submit" value="Ajouter" class="new">
    </form>
</section>
