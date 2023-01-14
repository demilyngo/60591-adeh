<section class="form">
    <div class="container">
        <h1 class="catalog-title">Регистрация</h1>
        <form method="post" action="../registration.php">
            <p>
                <label for="id1">Имя:</label>
                <input type="text" name="firstName" id="id1">
            </p>
            <p>
                <label for="id2">Фамилия:</label>
                <input type="text" name="lastName" id="id2">
            </p>

            <p>
                <input type="radio" id="id3" name="role" value="Participant" checked>
                <label for="id3">Участник</label>
                
                <input type="radio" id="id4" name="role" value="Host">
                <label for="id4">Организатор</label>
            </p>

            <p>
                <label for="id5">Логин:</label>
                <input type="text" name="login" id="id5">

            </p>
            <p>
                <label for="id6">Пароль:</label>
                <input type="password" name="password" id="id6">
            </p>
            <p>

            <p><input type="submit" value="Зарегистрироваться"></p>
        </form>
    </div>
</section>