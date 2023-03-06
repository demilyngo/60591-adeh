<?php
require('dbconnect.php');
require('auth.php');
require('components/header.php');
$id = $_GET['competitionId'];
$competition = $conn->query("SELECT * FROM competitions WHERE id=".$id)->fetch();
$quantity = $conn->query("SELECT COUNT(*) FROM teams WHERE teams.competition_id =".$id)->fetch();
if ($_SESSION['username']) {
    if(($_SESSION['role'] == 1 || $_SESSION['role'] == 2) && ($_SESSION['id_auth_user'] == $competition['organizer_id'])) {
        if ($_POST['team1']){
            $x = 1;
            for($i=0; $i!=$quantity["COUNT(*)"]/2; $i++) {
                $result = $conn->query("INSERT INTO games(competition_id, team_id_1, team_id_2)
                    VALUES ('".$id."', '".$_POST['team'.$x]."', '".$_POST['team'.($x+1)]."')");
                $x+=2;
            }
        }
        require('components/manageGame.php');
    }
    else {
        $message = 'Вы не организатор данного соревнования';
        require('components/message.php');
    }

}
else {
    require('components/loginForm.php');
}
