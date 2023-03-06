<section class="item">
    <div class="container">
        <h1 class="item-title"><?php echo $competition['Name'] ?></h1>
        <p><?= $competition['description']?></p>
        <div>
            <img src="<?=$competition['picture_url']?>" alt="Task picture" height="60px">
        </div>
        <?php if ($_SESSION['id_auth_user'] == $competition['organizer_id']) {?>
            <a href="../game.php?competitionId=<?= $id ?>"><button class="btn btn-lg btn-warning">Настроить сетку</button></a>
        <?php }?>
        <a href="../newComand.php?competitionId=<?= $id ?>"><button class="btn btn-lg btn-warning">Зарегистрировать команду</button></a>

        <h1>Сетка игр</h1>

        <?php $i=0; while ($game = $games->fetch()) { $i++;?>
            <hr>
            <h2>Игра <?= $i ?></h2>
            <?php $teams = $conn->query("SELECT * FROM teams WHERE teams.id =".$game["team_id_1"]." OR teams.id =".$game["team_id_2"]);
            while($team = $teams->fetch()) {?>
                <div>
                    <h3 class="d-inline me-3"><?= $team['Name'] ?></h3>
                    <?php
                        if(($team['leader_id'] == $_SESSION['id_auth_user']) && $_SESSION['username']){
                            $GLOBALS['teamDelete'] = $team['id']?>
                            <form action="" method="POST" target="../competition.php" class="d-inline">
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
            <?php }?>
        <?php }?>
        
        
    </div>
</section>