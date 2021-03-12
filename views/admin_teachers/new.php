<section>
    <h1>Nouveau horaire de réception (<?= $teacher ?>)</h1>

    <form method="post" action="<?= PRE ?>/admin_teachers/applyNewReception/<?= $teacher_id ?>" class="vform">
        <label for="day">Jour</label>
        <select name="day" id="day">
            <?php for($i = 1; $i <= 7; $i++): ?>
                <option value="<?= $i ?>"><?= DateUtils::getDayName($i) ?></option>
            <?php endfor; ?>
        </select>
        <label for="start">Début de la séance de réception</label>
        <input type="time" name="start" id="start">
        <label for="end">Fin de la séance de réception</label>
        <input type="time" name="end" id="end">
        <input type="submit" value="Ajouter" class="new">
    </form>
</section>