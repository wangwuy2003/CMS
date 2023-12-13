<?php

    global $db;
    include_once 'config/Database.php';

    $id = $_GET['id'];

    $sql = "delete from cms_user where id = '$id'";

    $db->query($sql);

    header('Location:users.php');