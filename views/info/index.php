<h1>Informations utiles</h1>

<?php foreach($infos as $i): ?>
    <div class="cycle_info">
        <h3><?= $i["title"] ?></h3>
        <p><?= $i["info"] ?></p>
    </div>
<?php endforeach; ?>