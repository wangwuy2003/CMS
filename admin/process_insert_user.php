<?php
    global $db;
    include 'config/Database.php';

    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $hash = password_hash($password, PASSWORD_DEFAULT);

    $sql = "insert into cms_user(firstname, lastname, email, password) values('$first_name', '$last_name','$email','$hash')";
    $stmt = $db->query($sql);

    header("Location:users.php");