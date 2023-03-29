<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Сведения о пользователе:</h1>
<ul>
    <?php foreach ($data['users'] as $user): ?>
        <li>
            <?=$user->firstName?>
            <?=$user->lastName?>
            <?php
                switch($user->role) {
                    case 1:
                        echo " - Админ";
                        break;
                    case 2:
                        echo " - Организатор";
                        break;
                    case 3:
                        echo " - Участник";
                        break;
            }?>
        </li>
    <?php endforeach; ?>

</ul>
</body>
</html>