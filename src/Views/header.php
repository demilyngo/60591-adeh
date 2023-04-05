<?php if($data['user']) { ?>
    Текущий пользователь: <?=$data['user']->login?>
    <br>
    <a href="/logout">Выйти</a>
<?php } else {?>
    <section class="form">
        <div class="container text-center">
            <main class="form-signin w-50 m-auto">
                <form method="post" action="/login">
                    <h1 class="h3 mb-3 fw-normal">Вход в систему</h1>
                    <p>
                        <input type="text" name="login" id="login" class="form-control" placeholder="Логин">
                    </p>
                    <p>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Пароль">
                    </p>
                    <p>
                    <p><input type="submit" value="Войти"></p>
                </form>
            </main>
        </div>
    </section>
<?php }
echo ($data['message'])


?>
