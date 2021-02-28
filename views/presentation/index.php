<div class="presentation">
    <h1>Présentation de l'école</h1>
    <?php foreach($paragraphs as $p): ?>
        <div class="paragraph">
            <p><?= $p['content'] ?></p>
            <?php if(isset($p['image'])): ?>
               <img src="<?= PRE ?>/res/images/<?= $p['image'] ?>"> 
            <?php endif; ?>
        </div>
    <?php endforeach; ?>
</div>
