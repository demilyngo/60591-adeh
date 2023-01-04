<?php
require('dbconnect.php');

$result = $conn->query("SELECT * FROM criteria");

require('components/main.php');