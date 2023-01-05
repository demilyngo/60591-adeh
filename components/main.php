<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>События</title>
</head>
<body>
    <p>Игрок - вид спорта</p>
    <?php while($item = $sports->fetch()) {?>
        <li>
            <?=$item['name'] . " - " . $item['sport']?>
        </li>
    <?php }?>
</body>
</html>
