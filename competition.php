<?php
require('dbconnect.php');
require('auth.php');
require('components/header.php');

$id = $_GET['competitionId'];
$result = $conn->query("SELECT * FROM competitions WHERE id=".$id);
//$row = $result->fetch();
$title=$result->fetch()['Name'];

$teams = $conn->query("SELECT DISTINCT teams.id, teams.Name FROM competitions, games, teams 
                        WHERE (teams.id = games.team_id_1 OR teams.id = games.team_id_2) AND 
                        games.competition_id=".$id);


require('components/competitionItem.php');