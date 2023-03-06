<main class="w-25 m-auto text-center">
    <div>
        <h1 >Новое соревнование</h1>
        <form method="post" action="..\registerCompetition.php" enctype="multipart/form-data">
            <div class="form-floating mb-2">
                <input type="text" name="title" id="title" class="form-control" placeholder="Название соревнования">
                <label for="title" class="text-black">Название соревнования</label>
            </div>

            <div class="mb-2">
                <label for="sport"><h4>Вид спорта:</h4></label>
                <select name="sport" id="sport" class="form-select">
                    <option value="football" >Футбол</option>
                    <option value="basketball">Баскетбол</option>
                    <option value="chess">Шахматы</option>
                    <option value="other">Другое</option>
                </select>
            </div>

            <div class="form-floating mb-2">
                <textarea style="height: 200px" type="text" name="description" id="description" class="form-control" placeholder="Описание"></textarea>
                <label for="description" class="text-black">Описание:</label>
            </div>

            <div class="mb-2">
                <label>
                    Изображение: <input type="file" name="filename">
                </label>
            </div>

            <input type="submit" value="Создать" class="btn btn-lg btn-warning">
        </form>
    </div>
</main>
