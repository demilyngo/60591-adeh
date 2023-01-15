<?php
require('dbconnect.php');
require('auth.php');
require('components/header.php');

if($_SESSION['username']) {

    $competitionId = $_GET['competitionId'];
    $competition = $conn->query("SELECT * FROM competitions WHERE competitions.id=".$competitionId);
    $row = $competition->fetch();
    
    switch ($row['Sport_id']) {
        case 2:
        case 3:
        case 1:
            $teamCapacity = 5;
            break;
        case 4:
            $teamCapacity = 1;
            break;
        default:
            $teamCapacity = 0;
            break;
    }

    if ($_POST['title']) {
        $result = $conn->query("INSERT INTO teams(Name, leader_id)
                        VALUES ('" . $_POST['title'] . "', '" . $_SESSION['id_auth_user'] . "')");

        $newTeamId = $conn->query("SELECT MAX(id) as id FROM teams");
        $id = $newTeamId->fetch();


        for ($i = 1; $i <= $teamCapacity; $i=$i+1) {
            $result = $conn->query("INSERT INTO players(team_id, Name)
                        VALUES ('" . $id['id'] . "', '" . $_POST['name'.$i]  . "')");
        }
    }

    require('components/comandForm.php');
}
else {
    require('components/loginForm.php');
}