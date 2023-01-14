<section>
    <p>Игрок - вид спорта</p>
    <?php while($item = $sports->fetch()) {?>
        <li>
            <?=$item['name'] . " - " . $item['sport']?>
        </li>
    <?php }?>
</section>