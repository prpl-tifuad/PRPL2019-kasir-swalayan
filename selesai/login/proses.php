<?php
session_start();
require '../config.php';
    $sql_check = "SELECT * FROM user WHERE username=? AND password=? LIMIT 1";
    $check_log = $dbconnect->prepare($sql_check);
    $check_log->bind_param('ss', $username, $password);
    $username = $_POST['username'];
    $password = md5( $_POST['password'] );
    $check_log->execute();
    $check_log->store_result();
    if ( $check_log->num_rows == 1 ) {
        $check_log->bind_result($username, $password);
        while ( $check_log->fetch() ) {
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
        }
        $check_log->close();
        header('location:../admin/index.php');
        exit();
    } 
    else {
        header('location: index.php/?error='.base64_encode('Username dan Password Salah!!!'));
        exit();
    }