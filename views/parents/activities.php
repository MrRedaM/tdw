<h1>Activitées de <?= $_SESSION['person']['children'][$_SESSION['child_index']]['first_name']?></h1>
<div class="activities">
    <?php foreach($activities as $activity):  ?>
        <div class="activity">
            <div class="image" data-title="<?= $activity['name'] ?>">
                <img src="<?= PRE ?>/res/images/<?= $activity['image'] ?>">
            </div>
        </div>
    <?php endforeach; ?>
</div>
