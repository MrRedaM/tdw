<section>
    <h1>Gestion du menu</h1>

    <form method="post" action="admin_food/new">
        <input type="submit" value="Ajouter" class="new">
    </form>

    <table class="admin_table">
        <thead>
            <th>Jour</th>
            <th>Plat</th>
            <th>Actions</th>
        </thead>
        <tbody>
            <?php foreach($menu as $day): ?>
                <tr>
                    <td>
                        <?php $d = date("w, d-m-Y", strtotime($day['day']));
                            $name =  DateUtils::getDayName(substr($d, 0, 1) + 1);
                            $d = ltrim($d, $d[0]);
                            echo $name.$d; ?>
                    </td>
                    <td>
                        <?= $day['menu'] ?>
                    </td>
                    <td>
                        <div class="actions">
                            <form method="post" action="admin_food/edit/<?= $day['id'] ?>">
                                <input type="submit" value="Modifier" class="edit">
                            </form>
                            <form method="post" action="admin_food/delete/<?= $day['id'] ?>">
                                <input type="submit" value="Supprimer" class="delete">
                            </form>
                        </div>
                        
                    </td>
                </tr>            
            <?php endforeach; ?>
        </tbody>
    </table>
</section>
