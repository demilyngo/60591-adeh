<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title>Competitions</title>
        <link href="../styles.css" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </head>

    <body class=" bg-light ">
        <div class="cover-container d-flex w-100  p-3 mx-auto flex-column">
            <header class="container-fluid p-3 text-bg-dark mb-auto border-bottom">
                <div class="container">
                    <nav class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                            <li>
                                <a href="../index.php" class="nav-link px-2 text-white">Главная</a>
                            </li>
                            <li>
                                <a href="../competitions.php" class="nav-link px-2 text-white">Список соревнований</a>
                            </li>
<!--                            --><?php
//                            $res = $conn->query("SELECT * FROM users WHERE login='".$_POST['login']."'");
//
//                            if ($_SESSION['username'] && ($_SESSION['role'] == 1 || $_SESSION['role'] == 2)) {
//
//                                echo('<li><a href="../registerCompetition.php" class="nav-link px-2 text-white">Новое соревнование</a></li>');
//                            }
//                            ?>
                        </ul>
                        <?php
//                        $res = $conn->query("SELECT * FROM users WHERE login='".$_POST['login']."'");
//
//                        if ($_SESSION['username']) {
//                            $admin = $res->fetch();
//                            echo ('<a href="login.php?logout=1" class="nav-link px-2 text-white">'.$_SESSION['username'].' (Выйти) </a>');
//                        }
//                        else {
//                            echo ('<div class="text-end">
//                                <a href="login.php"><button type="button" class="btn btn-outline-light me-2">Войти</button></a>
//                                <a href="../registration.php"><button type="button" class="btn btn-warning">Регистрация</button></a>
//                                </div>');
//
//                        }
//                        ?>
                        <a href="login.php"><button type="button" class="btn btn-outline-light me-2">Войти</button></a>
                        <a href="../registration.php"><button type="button" class="btn btn-warning">Регистрация</button></a>
                    </nav>
                </div>
            </header>
        </div>