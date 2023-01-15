<section>
    <h1 class="text-center">Список соревнований</h1>
    <div class="list-group w-50 m-auto">
        <?php while($item = $competitions->fetch()) {?>
            <a href="../competition.php?competitionId=<?= $item['id']?>" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                <div class="d-flex gap-2 w-100 justify-content-between">
                    <div>
                        <h6 class="mb-0"><?=$item['Name']?></h6>
                        <p class="mb-0 opacity-75"><?=$item['description']?></p>
                    </div>
                    <small class="opacity-50 text-nowrap">now</small>
                </div>
            </a>
        <?php }?>
    </div>



</section>
