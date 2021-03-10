<section>
    <h1>Enseignant : <?= $teacher['last_name'] ?> <?= $teacher['first_name'] ?></h1>

    <h2>Heures de travail</h2>

    <form method="post" action="admin_teachers/new">
        <input type="submit" value="Ajouter"  class="new" disabled>
    </form>

    <table class="admin_table">
        <thead>
            <th>Classe</th>
            <th>Matière</th>
            <th>Jour</th>
            <th>Début</th>
            <th>Fin</th>
            <th>Actions</th>
        </thead>
        <tbody>
            <?php foreach($programs as $program): ?>
                <tr>
                    <?php foreach($classrooms as $classroom): ?>
                        <?php if($classroom['id'] == $program['classroom']): ?>
                            <td><?= $classroom['name'] ?></td>
                            <?php break; ?>
                        <?php endif; ?>
                    <?php endforeach; ?>

                    <?php foreach($subjects as $subject): ?>
                        <?php if($subject['id'] == $program['subject']): ?>
                            <td><?= $subject['name'] ?></td>
                            <?php break; ?>
                        <?php endif; ?>
                    <?php endforeach; ?>

                    <?php switch($program['day']): 
                        case 1: ?><td>Dimanche</td><?php break; ?>
                        <?php case 2: ?><td>Lundi</td><?php break; ?>
                        <?php case 3: ?><td>Mardi</td><?php break; ?>
                        <?php case 4: ?><td>Mercredi</td><?php break; ?>
                        <?php case 5: ?><td>Jeudi</td><?php break; ?>
                        <?php case 6: ?><td>Vendredi</td><?php break; ?>
                        <?php case 7: ?><td>Samedi</td><?php break; ?>
                    <?php endswitch; ?>

                    <td><?= $program['start'] ?></td>

                    <td><?= $program['end'] ?></td>

                    <td>
                        <div class="actions">
                            <form method="post" action="admin_teachers/edit/<?= $program['id'] ?>">
                                <input type="submit" value="Modifier" disabled class="edit">
                            </form>
                            <form method="post" action="admin_teachers/delete/<?= $program['id'] ?>">
                                <input type="submit" value="Supprimer" disabled class="delete">
                            </form>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <h2>Heures de réception</h2>

    <form method="post" action="admin_teachers/newReception">
        <input type="submit" value="Ajouter réception"  class="new" disabled>
    </form>

    <table class="admin_table">
        <thead>
            <th>Jour</th>
            <th>Début</th>
            <th>Fin</th>
            <th>Actions</th>
        </thead>
        <tbody>
            <?php foreach($receptions as $reception): ?>
                <tr>
                    <?php switch($reception['day']): 
                        case 1: ?><td>Dimanche</td><?php break; ?>
                        <?php case 2: ?><td>Lundi</td><?php break; ?>
                        <?php case 3: ?><td>Mardi</td><?php break; ?>
                        <?php case 4: ?><td>Mercredi</td><?php break; ?>
                        <?php case 5: ?><td>Jeudi</td><?php break; ?>
                        <?php case 6: ?><td>Vendredi</td><?php break; ?>
                        <?php case 7: ?><td>Samedi</td><?php break; ?>
                    <?php endswitch; ?>

                    <td><?= $reception['start'] ?></td>

                    <td><?= $reception['end'] ?></td>

                    <td>
                        <div class="actions">
                            <form method="post" action="admin_teachers/edit/<?= $reception['id'] ?>">
                                <input type="submit" value="Modifier" disabled class="edit">
                            </form>
                            <form method="post" action="admin_teachers/delete/<?= $reception['id'] ?>">
                                <input type="submit" value="Supprimer" disabled class="delete">
                            </form>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</section>
