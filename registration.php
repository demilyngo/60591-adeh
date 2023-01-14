<?php
require('dbconnect.php');
require('auth.php');
require('components/header.php');
if ($_POST['login'] && $_POST['password']){
    switch ($_POST['role']) {
        case 'Host':
            $role = 2;
            break;
        case 'Participant':
            $role = 3;
            break;
    }
    $result = $conn->query("INSERT INTO users(firstName, lastName, login, password, role)
                VALUES ('".$_POST['firstName']."','".$_POST['lastName']."', '".$_POST['login']."',
                '".$_POST['password']."', '".$role."')");
}
require('components/registrationComponent.php');

//$result = $conn->query("SELECT * FROM users WHERE login='".$_POST['login']."'");
//
//if ($row = $result->fetch()){
//    if (($_POST['password']) == $row['password']){
//        $_SESSION['username'] = $_POST['login'];
//        $_SESSION['id_auth_user'] = $row['id'];
//        $_SESSION['admin'] = $row['is_admin'];
//    }
//}

