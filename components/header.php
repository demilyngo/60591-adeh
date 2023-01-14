<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Competitions</title>
    <link href="style.css" rel="stylesheet">
</head>

<body>
<div id="inhelp_widget"></div>
<script src="http://mr_151805372.inhelp.osipov.digital/js/widget.js"></script>
<header class="site-header">
    <nav class="site-navigation">
        <ul class="navigation-list">
            <li>
                <a href="../competitions.php">Список соревнований</a>
            </li>
            <?php
            $res = $conn->query("SELECT * FROM users WHERE login='".$_POST['login']."'");

            if ($_SESSION['username']) {
                $admin = $res->fetch();
                if($_SESSION['role'] == 2)
                    echo('<li><a href="../registerCompetition.php">Новое соревнование</a></li>');
                echo ('<li><a href="login.php?logout=1">'.$_SESSION['username'].' (Выйти) </a></li>');
            }
            else {
                echo (' <li><a href="login.php">Войти</a></li>');
                echo (' <li><a href="../registration.php">Регистрация</a></li>');
            }
            ?>
        </ul>

    </nav>
</header>