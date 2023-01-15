<?php
require('dbconnect.php');
require('auth.php');
require('components/header.php');

$id = $_GET['competitionId'];
$result = $conn->query("SELECT * FROM competitions WHERE id=".$id);
//$row = $result->fetch();
$competition=$result->fetch();

if ($_POST['delete']) {
    $conn->query("DELETE FROM teams WHERE teams.id=".$GLOBALS['teamDelete']);
    $conn->query("DELETE FROM players WHERE players.team_id=".$GLOBALS['teamDelete']);
}

$teams = $conn->query("SELECT DISTINCT teams.id, teams.Name, teams.leader_id FROM competitions, games, teams 
                        WHERE (teams.id = games.team_id_1 OR teams.id = games.team_id_2) AND 
                        games.competition_id=".$id);


require('components/competitionItem.php');