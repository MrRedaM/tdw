<div class="filterable_page">
    <div class="filters">
        <h1>Filtres</h1>
        <form method="post">
            <select name="class_id" id="class_id">
                <?php foreach($classrooms as $classroom): ?>
                    <option value="<?= $classroom['id'] ?>"><?= $classroom['name'] ?></option>
                <?php endforeach; ?>
            </select>
            <input type="submit" value="Filtrer" disabled>
        </form>
    </div>

    <div class="schedules">
        <H1>Emplois du temps</H1>

        <?php foreach($classrooms as $classroom): ?>
            <h2><?= $classroom['name'] ?></h2>
        <?php endforeach; ?> 

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
                        <?php foreach($programs as $program): ?>
                            <?php if($program['classroom'] == $classroom['id'] and $program['day'] == $day): ?>
                                <td> 
                                    <?php foreach($subjects as $subject): ?>
                                            <?php if($subject['id'] == $program['subject']): ?>
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
                                    (<?= $program['start'] ?> - <?= $program['end'] ?>)                     
                                </td>
                            <?php endif; ?>      
                        <?php endforeach; ?> 
                    </tr>
                <?php endfor;?>
            </table>
        </div>
        
    </div>
</div>


