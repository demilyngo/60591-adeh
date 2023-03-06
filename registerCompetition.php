<?php
require('dbconnect.php');
require('auth.php');
require('components/header.php');
if ($_SESSION['username']) {
    if($_SESSION['role'] == 1 || $_SESSION['role'] == 2) {
        if ($_POST['title']){
            switch ($_POST['sport']) {
                case 'football':
                    $sport_id=1;
                    break;
                case 'basketball':
                    $sport_id=3;
                    break;
                case 'chess':
                    $sport_id=4;
                    break;
            }
            if ($file = fopen($_FILES['filename']['tmp_name'], 'r+')){
                //получение расширения
                $ext = explode('.', $_FILES["filename"]["name"]);
                $ext = $ext[count($ext) - 1];
                $filename = 'file' . rand(100000, 999999) . '.' . $ext;

                $resource = Container::getFileUploader()->store($file, $filename);
                $picture_url = $resource['ObjectURL'];
            }
            else {
                $picture_url = "assets/1464099699166435025.jpg";
            }
            try {
                $sql = 'INSERT INTO competitions(Name, Sport_id, description, picture_url) VALUES(:name, :sport, :description,:picture_url)';
                $stmt = $conn->prepare($sql);
                $stmt->bindValue(':name', $_POST['title']);
                $stmt->bindValue(':sport', $sport_id);
                $stmt->bindValue(':description', $_POST['description']);
                $stmt->bindValue(':picture_url', $picture_url);
                $stmt->execute();
                $_SESSION['msg'] = "Соревнование успешно создано";
                // return generated id
                // $id = $pdo->lastInsertId('id');

            } catch (PDOexception $error) {
                $_SESSION['msg'] = "Ошибка создания соревнования: " . $error->getMessage();
            }
//            $result = $conn->query("INSERT INTO competitions(Name, Sport_id, description)
//                    VALUES ('".$_POST['title']."','".$sport_id."', '".$_POST['description']."')");
        }
        require('components/competitionForm.php');
    }
    else {
        $message = 'Вы не организатор';
        require('components/message.php');
    }

}
else {
    require('components/loginForm.php');
}