<div class="admin_schedule">
    <H1>Emplois du temps</H1>
    <div>
            <form method="post" class="hform">
                <select name="class_id" id="class_id">
                    <?php foreach($classrooms as $classroom): ?>
                        <option value="<?= $classroom['id'] ?>"><?= $classroom['name'] ?></option>
                    <?php endforeach; ?>
                </select>
                <input type="submit" value="Filtrer" disabled>
            </form>
    </div>

    <div class="schedules">
        <?php foreach($classrooms as $classroom): ?>
            <h2><?= $classroom['name'] ?></h2>
        

        <div class="timetable">                
            <table>
                <?php for($day = 1; $day <= 7; $day++): ?>
                    <tr>
                        <?php switch($day): 
                            case 1: ?><th>Dimanche</th><?php break; ?>
                            <?php case 2: ?><th>Lundi</th><?php break; ?>
                            <?php case 3: ?><th>Mardi</th><?php break; ?>
                            <?php case 4: ?><th>Mercredi</th><?php break; ?>
                            <?php case 5: ?><th>Jeudi</th><?php break; ?>
                            <?php case 6: ?><th>Vendredi</th><?php break; ?>
                            <?php case 7: ?><th>Samedi</th><?php break; ?>
                        <?php endswitch; ?>

                        <td>
                            <form method="post" action="<?= PRE ?>/admin_calendar/new">
                                <input hidden type="text" name="class_name" id="class_name" value="<?= $classroom['name'] ?>">
                                <input hidden type="text" name="class_id" id="class_id" value="<?= $classroom['id'] ?>">
                                <input hidden type="text" name="day" id="day" value="<?= $day ?>">
                                <input type="submit" value="Inserer" class="edit">
                            </form>
                        </td>

                        <?php foreach($programs as $program): ?>
                            <?php if($program['classroom'] == $classroom['id'] and $program['day'] == $day): ?>
                                <td> 
                                    
                                    <?php foreach($subjects as $subject): ?>
                                            <?php if($subject['id'] == $program['subject']): ?>
                                                <div style="background-color: <?= $subject['color'] ?>; color: <?= ColorUtils::getTextColor($subject['color']) ?>;">
                                                <?= $subject['name'] ?>
                                                <?php break; ?>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    <br>avec 
                                    <?php foreach($teachers as $teacher): ?>
                                        <?php if($teacher['id'] == $program['teacher']): ?>
                                            <?= $teacher['last_name'] ?> <?= $teacher['first_name'][0] ?>
                                            <?php break; ?>
                                        <?php endif; ?>
                                    <?php endforeach; ?><br>
                                    (<?= date("G:i", strtotime($program['start'])) ?> - <?= date("G:i", strtotime($program['end'])) ?>)
                                    <div class="actions">
                                        <form method="post" action="<?= PRE ?>/admin_calendar/edit/<?= $program['id'] ?>">
                                            <input hidden type="text" name="class_name" id="class_name" value="<?= $classroom['name'] ?>">
                                            <input hidden type="text" name="class_id" id="class_id" value="<?= $classroom['id'] ?>">
                                            <input hidden type="text" name="day" id="day" value="<?= $day ?>">
                                            <input type="submit" value="Modifier" class="edit">
                                        </form>
                                        <form action="<?= PRE ?>/admin_calendar/delete/<?= $program['id'] ?>">
                                            <input type="submit" value="Supprimer" class="delete">
                                        </form>
                                    </div>
                                    
                                    </div>  

                                </td>
                            <?php endif; ?>      
                        <?php endforeach; ?> 
                    </tr>
                <?php endfor;?>
            </table>
        </div>
        <?php endforeach; ?> 
    </div>
</div>


