<section>
    <h1>Modifier horaire : <?= $class_name ?> - <?= DateUtils::getDayName($day) ?></h1>

    <form method="post" action="<?= PRE ?>/admin_calendar/applyEdit/<?= $program['id'] ?>" class="vform">
        <label for="subject">Matière</label>
        <select name="subject" id="subject">
            <?php foreach($subjects as $subject): ?>
                <option value="<?= $subject['id'] ?>"
                <?php if($program['subject'] == $subject['id']) echo "selected"; ?>><?= $subject['name'] ?></option>
            <?php endforeach; ?>
        </select>
        <label for="teacher">Enseignant</label>
        <select name="teacher" id="teacher">
            <?php foreach($teachers as $teacher): ?>
                <option value="<?= $teacher['id'] ?>"
                <?php if($program['teacher'] == $teacher['id']) echo "selected"; ?>><?= $teacher['last_name'] ?> <?= $teacher['first_name'] ?></option>
            <?php endforeach; ?>
        </select>
        <label for="start">Début de la séance</label>
        <input type="time" name="start" id="start" value="<?= $program['start'] ?>">
        <label for="end">Fin de la séance</label>
        <input type="time" name="end" id="end" value="<?= $program['end'] ?>">
        <input hidden type="text" name="class_id" id="class_id" value="<?= $class_id ?>">
        <input hidden type="text" name="day" id="day" value="<?= $day ?>">
        <input type="submit" value="Appliquer" class="new">
    </form>
</section>