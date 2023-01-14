<section>
    <div>
        <h1 >Новое соревнование</h1>
        <form method="post" action="..\registerCompetition.php" enctype="multipart/form-data">
            <p>
                <label for="id1">Наименование:</label>
                <input type="text" name="title" id="id1">
            </p>
            <p>
                <label for="id3">Вид спорта:</label>
                <select name="sport" id="id3">
                    <option value="football">Футбол</option>
                    <option value="basketball">Баскетбол</option>
                    <option value="chess">Шахматы</option>
                    <option value="other">Другое</option>
                </select>
            </p>
            <p><input type="submit" value="Создать"></p>
        </form>
    </div>
</section>
