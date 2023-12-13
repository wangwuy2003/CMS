<?php
    global $db;
    include_once 'config/Database.php';

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "select * from cms_user where email = '$firstname' and password = 'password'";
    $stmt = $db->query($sql);
    $number_row = $stmt->rowCount();

    if ($number_row === 1) {
        header('location:signup.php?error=Trùng email');
    }

    $hash = password_hash($password, PASSWORD_DEFAULT);

    $sql1 = "insert into cms_user(first_name, last_name, email, password) values('$firstname', '$lastname', '$email', '$hash')";
    $db->query($sql1);
    header("Location:login.php");
