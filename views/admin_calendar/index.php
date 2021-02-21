<H2>Emplois du temps</H2>

<form method="post">
    <select name="class_id" id="class_id">
        <?php foreach($classrooms as $classroom): ?>
            <option value="<?= $classroom['id'] ?>"><?= $classroom['name'] ?></option>
        <?php endforeach; ?>
    </select>
    <input type="submit" value="Filtrer" disabled>
</form>

<table>
    <?php foreach($classrooms as $classroom): ?>
        <h3><?= $classroom['name'] ?></h3>
        <table>
           <tr>
                <th>Dimanche</th>
                <?php foreach($programs as $program): ?>
                    <?php if($program['classroom'] == $classroom['id'] and $program['day'] == 1): ?>
                        <td>| 
                            <?php foreach($subjects as $subject): ?>
                                    <?php if($subject['id'] == $program['subject']): ?>
                                        <?= $subject['name'] ?>
                                        <?php break; ?>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                             avec 
                            <?php foreach($teachers as $teacher): ?>
                                <?php if($teacher['id'] == $program['teacher']): ?>
                                    <?= $teacher['last_name'] ?> <?= $teacher['first_name'][0] ?>
                                    <?php break; ?>
                                <?php endif; ?>
                            <?php endforeach; ?>
                            (<?= $program['start'] ?> - <?= $program['end'] ?>)
                            |                        
                        </td>
                    <?php endif; ?>      
                <?php endforeach; ?> 
           </tr>
           <tr>
                <th>Lundi</th>
                <?php foreach($programs as $program): ?>
                    <?php if($program['classroom'] == $classroom['id'] and $program['day'] == 2): ?>
                        <td>| 
                            <?php foreach($subjects as $subject): ?>
                                    <?php if($subject['id'] == $program['subject']): ?>
                                        <?= $subject['name'] ?>
                                        <?php break; ?>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                             avec 
                            <?php foreach($teachers as $teacher): ?>
                                <?php if($teacher['id'] == $program['teacher']): ?>
                                    <?= $teacher['last_name'] ?> <?= $teacher['first_name'][0] ?>
                                    <?php break; ?>
                                <?php endif; ?>
                            <?php endforeach; ?>
                            (<?= $program['start'] ?> - <?= $program['end'] ?>)
                            |                        
                        </td>
                    <?php endif; ?>      
                <?php endforeach; ?> 
           </tr>
           <tr>
                <th>Mardi</th>
                <?php foreach($programs as $program): ?>
                    <?php if($program['classroom'] == $classroom['id'] and $program['day'] == 3): ?>
                        <td>| 
                            <?php foreach($subjects as $subject): ?>
                                    <?php if($subject['id'] == $program['subject']): ?>
                                        <?= $subject['name'] ?>
                                        <?php break; ?>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                             avec 
                            <?php foreach($teachers as $teacher): ?>
                                <?php if($teacher['id'] == $program['teacher']): ?>
                                    <?= $teacher['last_name'] ?> <?= $teacher['first_name'][0] ?>
                                    <?php break; ?>
                                <?php endif; ?>
                            <?php endforeach; ?>
                            (<?= $program['start'] ?> - <?= $program['end'] ?>)
                            |                        
                        </td>
                    <?php endif; ?>      
                <?php endforeach; ?> 
           </tr>
           <tr>
                <th>Mercredi</th>
                <?php foreach($programs as $program): ?>
                    <?php if($program['classroom'] == $classroom['id'] and $program['day'] == 4): ?>
                        <td>| 
                            <?php foreach($subjects as $subject): ?>
                                    <?php if($subject['id'] == $program['subject']): ?>
                                        <?= $subject['name'] ?>
                                        <?php break; ?>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                             avec 
                            <?php foreach($teachers as $teacher): ?>
                                <?php if($teacher['id'] == $program['teacher']): ?>
                                    <?= $teacher['last_name'] ?> <?= $teacher['first_name'][0] ?>
                                    <?php break; ?>
                                <?php endif; ?>
                            <?php endforeach; ?>
                            (<?= $program['start'] ?> - <?= $program['end'] ?>)
                            |                        
                        </td>
                    <?php endif; ?>      
                <?php endforeach; ?> 
           </tr>
           <tr>
                <th>Jeudi</th>
                <?php foreach($programs as $program): ?>
                    <?php if($program['classroom'] == $classroom['id'] and $program['day'] == 5): ?>
                        <td>| 
                            <?php foreach($subjects as $subject): ?>
                                    <?php if($subject['id'] == $program['subject']): ?>
                                        <?= $subject['name'] ?>
                                        <?php break; ?>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                             avec 
                            <?php foreach($teachers as $teacher): ?>
                                <?php if($teacher['id'] == $program['teacher']): ?>
                                    <?= $teacher['last_name'] ?> <?= $teacher['first_name'][0] ?>
                                    <?php break; ?>
                                <?php endif; ?>
                            <?php endforeach; ?>
                            (<?= $program['start'] ?> - <?= $program['end'] ?>)
                            |                        
                        </td>
                    <?php endif; ?>      
                <?php endforeach; ?> 
           </tr>
           <tr>
                <th>Vendredi</th>
                <?php foreach($programs as $program): ?>
                    <?php if($program['classroom'] == $classroom['id'] and $program['day'] == 6): ?>
                        <td>| 
                            <?php foreach($subjects as $subject): ?>
                                    <?php if($subject['id'] == $program['subject']): ?>
                                        <?= $subject['name'] ?>
                                        <?php break; ?>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                             avec 
                            <?php foreach($teachers as $teacher): ?>
                                <?php if($teacher['id'] == $program['teacher']): ?>
                                    <?= $teacher['last_name'] ?> <?= $teacher['first_name'][0] ?>
                                    <?php break; ?>
                                <?php endif; ?>
                            <?php endforeach; ?>
                            (<?= $program['start'] ?> - <?= $program['end'] ?>)
                            |                        
                        </td>
                    <?php endif; ?>      
                <?php endforeach; ?> 
           </tr>
           <tr>
                <th>Samedi</th>
                <?php foreach($programs as $program): ?>
                    <?php if($program['classroom'] == $classroom['id'] and $program['day'] == 7): ?>
                        <td>| 
                            <?php foreach($subjects as $subject): ?>
                                    <?php if($subject['id'] == $program['subject']): ?>
                                        <?= $subject['name'] ?>
                                        <?php break; ?>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                             avec 
                            <?php foreach($teachers as $teacher): ?>
                                <?php if($teacher['id'] == $program['teacher']): ?>
                                    <?= $teacher['last_name'] ?> <?= $teacher['first_name'][0] ?>
                                    <?php break; ?>
                                <?php endif; ?>
                            <?php endforeach; ?>
                            (<?= $program['start'] ?> - <?= $program['end'] ?>)
                            |                        
                        </td>
                    <?php endif; ?>      
                <?php endforeach; ?> 
           </tr>
        </table>
    <?php endforeach; ?> 
</table>