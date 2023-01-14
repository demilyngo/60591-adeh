<?php
require('dbconnect.php');
require('auth.php');
require('components/header.php');
if ($_SESSION['username']) {
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
        $result = $conn->query("INSERT INTO competitions(Name, Sport_id)
                    VALUES ('".$_POST['title']."','".$sport_id."')");
    }
    require('components/competitionForm.php');
}
else {
    require('components/loginForm.php');
}