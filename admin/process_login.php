<?php
    include_once 'config/Database.php';

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "select * from cms_user where email = '$email'";
    $stmt = $db->query($sql);
    $number_row = $stmt->rowCount();

    if($number_row > 0){
        $row = $stmt->fetch();
        $pass_saved = $row['password'];
        $id = $row['id'];
        $type = $row['type'];
        $name = $row['last_name'];
        if (password_verify($password, $pass_saved)) {
            session_start();
            $_SESSION['id'] = $id;
            $_SESSION['name'] = $name;
            header("Location:index.php");
        } else {
            $error = "Password invalid";
            header("Location:login.php?error=$error");
        }
        header("Location: index.php");
    } else {
        $error = "Username not found";
        header("Location:login.php?error=$error");
    }