<?php
require('dbconnect.php');
require('auth.php');
require('components/header.php');
$sports = $conn->query("SELECT DISTINCT sports.Name 'sport', players.Name 'name'
                        FROM competitions, sports, players, games 
                        WHERE (players.team_id=games.team_id_1 
                        OR players.team_id=games.team_id_2) 
                        AND (games.competition_id = competitions.id) 
                        AND (competitions.Sport_id = sports.id);");

require('components/playersList.php');