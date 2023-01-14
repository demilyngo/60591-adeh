<?php
require('dbconnect.php');
require('auth.php');
require('components/header.php');

if($_SESSION['username']) {

    if ($_POST['title']) {
        $result = $conn->query("INSERT INTO teams(Name)
                        VALUES ('" . $_POST['title'] . "')");
        $newTeamId = $conn->query("SELECT MAX(id) FROM teams");
        $id = $newTeamId->fetch();
        for ($i = 0; $i <= $teamCapacity; $i=$i+1) {
            $result = $conn->query("INSERT INTO players(team_id, Name)
                        VALUES (14, '" . $_POST['name'] . "')");
        }
    }
    
    
    $competitionId = $_GET['competitionId'];
    $competition = $conn->query("SELECT * FROM competitions WHERE competitions.id=".$competitionId);
    $row = $competition->fetch();
    
    switch ($row['Sport_id']) {
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

    require('components/comandForm.php');
}
else {
    require('components/loginForm.php');
}