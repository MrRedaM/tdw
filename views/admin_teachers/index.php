<section>
    <h1>Enseignants</h1>

    <form method='post'>
        <input type="search" name="search" id="search" placeholder="Rechercher..." <?php if(isset($_POST['search'])) echo "value=".$_POST['search']; ?>">
        <!--input type="submit" value="Filtrer"-->
    </form>

    <table class="admin_table">
        <thead>
            <th>Nom et prénom</th>
        </thead>
        <tbody>
            <?php foreach($teachers as $teacher): ?>
                <tr>
                    <td>
                        <a href="<?= PRE ?>/admin_teachers/view/<?= $teacher['id'] ?>">
                            <?= $teacher['last_name'] ?> <?= $teacher['first_name'] ?>
                        </a>
                    </td>    
                </tr>     
            <?php endforeach; ?>
        </tbody>
    </table>
</section>
