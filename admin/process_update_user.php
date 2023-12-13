<?php
    include 'config/Database.php';

    $id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];

    $sql = "update cms_user
    set
    firstname= '$firstname',
    lastname = '$lastname'
    where id = '$id'";

    $stmt = $db->query($sql);

    header("Location:users.php");
