<?php
    function getSubjectName($id){
        echo 'hey';
        die();
        foreach($subjects as $subject){
            if($subject['id'] == $id){
                return $subject['name'];
            }
        }
    }
    function getClassName($id){
        foreach($classrooms as $classroom){
            if($classroom['id'] == $id){
                return $classroom['name'];
            }
        }
    }
?>

<h2>Enseignant : <?= $teacher['last_name'] ?> <?= $teacher['first_name'] ?></h2>

<h3>Heures de travail</h3>

<form method="post" action="admin_teachers/new">
    <input type="submit" value="Nouveau" disabled>
</form>

<table>
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
                <form method="post" action="admin_teachers/edit/<?= $program['id'] ?>">
                        <input type="submit" value="Modifier" disabled>
                    </form>
                <form method="post" action="admin_teachers/delete/<?= $program['id'] ?>">
                    <input type="submit" value="Supprimer" disabled>
                </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<h3>Heures de réception</h3>