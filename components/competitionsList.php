<section>
    <p>Список соревнований</p>
    <?php while($item = $competitions->fetch()) {?>
        <li>
            <a href="../competition.php?competitionId=<?= $item['id']?>"><?=$item['Name']?></a>
        </li>
    <?php }?>
</section>
