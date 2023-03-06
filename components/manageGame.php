<section>
    <form method="post" action="..\game.php?competitionId=<?= $id ?>" enctype="multipart/form-data">
        <div class="mb-2">

            <?php $x=1; for($i=0; $i!=$quantity["COUNT(*)"]/2; $i++) {?>
                <label for="team"><h4><?=$i+1?> игра:</h4></label>
                <select name="team<?=$x?>" id="team<?=$x?>" class="form-select">
                    <?php
                    $teams = $conn->query("SELECT * FROM teams WHERE teams.competition_id =".$id);
                    while($team = $teams->fetch()) {?>
                        <option value="<?=$team['id']?>"><?=$team['Name']?></option>
                    <?php }?>
                </select>
                <select name="team<?=$x+1?>" id="team<?=$x+1?>" class="form-select">
                    <?php
                    $teams = $conn->query("SELECT * FROM teams WHERE teams.competition_id =".$id);
                    while($team = $teams->fetch()) {?>
                        <option value="<?=$team['id']?>"><?=$team['Name']?></option>
                    <?php }?>
                </select>
                <br>
            <?php $x+=2;}?>
        </div>
        <input type="submit" value="Создать" class="btn btn-lg btn-warning">
    </form>

</section>
