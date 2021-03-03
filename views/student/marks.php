<section>
    <h1>Relevé de notes</h1>
    <div class="info">
    <p>Nom</p>
    <p><?= $_SESSION['person']['last_name'] ?></p>
    <p>Prénom</p>
    <p><?= $_SESSION['person']['first_name'] ?></p>
    <p>Cycle</p>
    <p><?= $cycle['name'] ?></p>
    <p>Année</p>
    <p><?= $year['name'] ?></p>
</div>
<table class="marks">
    <thead>
        <th>Matière</th>
        <th>Note</th>
        <th>Coeff</th>
        <th>Observation</th>
    </thead>
    <?php $moy = 0; $coeffs = 0; foreach($subjects as $subject): ?>
        <tr>
            <?php foreach($marks as $mark):  ?>
                <?php if($mark['subject'] == $subject['id']): ?>
                    <td><?= $subject['name']?></td>
                    <td><?= $mark['mark'] ?></td>
                    <td><?= $subject['coeff']?></td>
                    <td><?= $mark['note'] ?></td>
                    <?php $moy = $moy + ($mark['mark'] * $subject['coeff']); ?>
                    <?php $coeffs = $coeffs + $subject['coeff']; ?>
                <?php endif; ?>
            <?php endforeach; ?>
        </tr>
    <?php endforeach; ?>
    <tr>
        <th>Moyenne</th>
        <td colspan="3"><?= $moy / $coeffs ?></td>
    </tr>
</table>
</section>
