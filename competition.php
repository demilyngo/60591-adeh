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

//$teams = $conn->query("SELECT * FROM teams WHERE teams.competition_id =".$id);

$games = $conn->query("SELECT * FROM games WHERE games.competition_id =".$id);
require('components/competitionItem.php');