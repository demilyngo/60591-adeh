<main class="w-25 m-auto text-center">
    <div>
        <h1><?= $row['Name']?></h1>
        <h2>Новая команда</h2>
        <form method="post" action="..\newComand.php?competitionId=<?= $competitionId ?>" enctype="multipart/form-data">
            <div class="form-floating mb-2">
                <input type="text" name="title" id="teamName" class="form-control" placeholder="Название команды">
                <label for="teamName" class="text-black">Название команды</label>
            </div>
            <h2>Участники</h2>
            <?php for($i = 1; $i<=$teamCapacity; $i=$i+1): ?>
                <div class="form-floating mb-2">
                    <input type="text" name="name<?=$i?>" id="name<?=$i?>" class="form-control" placeholder="Имя">
                    <label for="name<?=$i?>" class="text-black">Имя</label>
                </div>
            <?php endfor; ?>
            <input type="submit" value="Создать" class="btn btn-lg btn-warning">
        </form>
    </div>
</main>