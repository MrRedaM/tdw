<div class="filterable_page">
    <div class="filters">
        <h1>Filtres</h1>
        <form method='post'>
            <input type="search" name="search" id="search" placeholder="Rechercher...">
            <!--input type="submit" value="Filtrer"-->
        </form>
    </div>
    <div class="teachers">
        <h1>Heures de receptions des enseignants</h1>
            <div class="teacher_list">
                <?php foreach($teachers as $teacher): ?>
                    <div class="teacher">
                        <img src="<?= PRE ?>/res/images/user.jpg">
                        <a href="<?= PRE ?>/admin_teachers/view/<?= $teacher['id'] ?>">
                            <?= $teacher['last_name'] ?> <?= $teacher['first_name'] ?>
                        </a> 
                        <p><?= $teacher['receptions'] ?></p>    
                    </div>    
                <?php endforeach; ?>
            </div>
    </div>
</div>
