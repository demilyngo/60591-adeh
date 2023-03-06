<?php
require('dbconnect.php');
require('auth.php');
require('components/header.php');


$competitions = $conn->query("SELECT * FROM competitions ORDER BY id DESC");
require('components/main.php');
