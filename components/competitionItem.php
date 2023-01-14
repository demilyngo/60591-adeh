<section class="item">
    <div class="container">
        <h1 class="item-title"><?php echo $title ?></h1>

        <?php while ($team = $teams->fetch()) {?>
            <h3><?= $team['Name'] ?></h3>
            <?php
            $players = $conn->query("SELECT DISTINCT players.id, players.Name FROM teams, players WHERE players.team_id=".$team['id']);
            while ($player = $players->fetch()) {?>
                <ul>
                    <li><?= $player['Name'] ?></li>
                </ul>
            <?php }?>
        <?php }; ?>
        
        <a href="../newComand.php?competitionId=<?= $id ?>">Зарегистрировать команду</a>
    </div>
</section>