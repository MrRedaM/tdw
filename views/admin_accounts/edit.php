<h2>Modifier compte <?= $person['type'] ?></h2>

<form method='post' action="<?= PRE ?>/admin_accounts/apply_edit/<?= $person['type'] ?>/<?= $person['id'] ?>">
    <input type="text" name="last_name" id="last_name" placeholder="Nom" value="<?= $person['last_name'] ?>" required>
    <input type="text" name="first_name" id="first_name" placeholder="Prénom" value="<?= $person['first_name'] ?>" required>
    <input type="text" name="mail" id="mail" placeholder="E-mail" value="<?= $person['mail'] ?>" required>
    <input type="text" name="address" id="address" placeholder="Adresse" value="<?= $person['address'] ?>" required>
    <input type="text" name="phone1" id="phone1" placeholder="Téléphone 1" value="<?= $person['phone1'] ?>" required>
    <input type="text" name="phone2" id="phone2" placeholder="Téléphone 2" value="<?= $person['phone2'] ?>" required>
    <input type="text" name="phone3" id="phone3" placeholder="Téléphone 3" value="<?= $person['phone3'] ?>" required>

    <!-- Teacher info-->

    <?php if($person['type'] == 'student'): ?>
    <!-- Student info-->
        <select name="class_id" id="class_id" required">
            <?php foreach($classrooms as $classroom): ?>
                <option value="<?= $classroom['id'] ?>" <?php if($classroom['id'] == $type['classroom']) echo "selected" ;?>><?= $classroom['name'] ?></option>
            <?php endforeach; ?>
        </select>
    <?php endif; ?>

    <!-- tutor info-->

    <input type="submit" value="Appliquer">
</form>



