    <div class="container text-center">
        <main class="form-signin w-50 m-auto">
            <form method="post" action="../index.php">
                <h1 class="h3 mb-3 fw-normal">Вход в систему</h1>

                <div class="form-floating mb-2">
                    <input type="text" name="login" id="login" class="form-control" placeholder="Логин">
                    <label for="login" class="text-black">Логин</label>
                </div>
                <div class="form-floating mb-2">
                    <input type="password" name="password" id="password" class="form-control" placeholder="Пароль">
                    <label for="password" class="text-black">Пароль</label>
                </div>

                <p><input type="submit" value="Войти" class="btn btn-lg btn-light"></p>
            </form>
            <a href="../registration.php"><button class="btn btn-lg btn-warning">Регистрация</button></a>
        </main>
    </div>

