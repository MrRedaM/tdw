<div class="menu">
    <table>
    <h1>Menu de la semaine</h1>
        <?php $i = 1; foreach($menu as $day):?>
            <tr>
                <th><?= DateUtils::getDayName($i) ?></h3>
                <td><?php echo $day['menu']; $i++; ?></p>
            </tr>
    <?php endforeach; ?>
    </table>
</div>

