<section class="item">
    <div class="container">
        <h1 class="item-title"><?php echo $competition['Name'] ?></h1>
        <p><?= $competition['description']?></p>
        <a href="../newComand.php?competitionId=<?= $id ?>"><button class="btn btn-lg btn-warning">Зарегистрировать команду</button></a>
        <?php while ($team = $teams->fetch()) {?>
            <div>
                <h3><?= $team['Name'] ?></h3>
                <?php
                if(($team['leader_id'] == $_SESSION['id_auth_user']) && $_SESSION['username']){
                    $GLOBALS['teamDelete'] = $team['id']?>
                    <form action="" method="POST" target="../competition.php">
                        <input type="submit" name="delete" value="Удалить" class="btn btn-lg btn-danger"/>
                    </form>
                <?php }?>
            </div>
            <?php
            $players = $conn->query("SELECT DISTINCT players.id, players.Name FROM teams, players WHERE players.team_id=".$team['id']);
            while ($player = $players->fetch()) {?>
                <ul>
                    <li><?= $player['Name'] ?></li>
                </ul>
            <?php }?>
        <?php }; ?>
        
        
    </div>
</section>