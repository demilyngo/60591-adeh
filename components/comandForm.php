<section>
    <div>
        <h1>Новая команда</h1>
        <form method="post" action="..\newComand.php?competitionId=<?= $competitionId ?>" enctype="multipart/form-data">
            <p>
                <label for="teamName">Название команды:</label>
                <input type="text" name="title" id="teamName">
            </p>
            <?php for($i = 1; $i<=$teamCapacity; $i=$i+1): ?>
                <label for="name<?=$i?>">Имя:</label>
                <input type="text" name="name<?=$i?>" id="name<?=$i?>">
            <?php endfor; ?>
            <p><input type="submit" value="Создать"></p>
        </form>
    </div>
</section>