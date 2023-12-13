<?php
    global $db;
    include 'config/Database.php';

    $name = $_POST['name'];

    $sql = "insert into cms_category(name) values('$name')";
    $stmt = $db->query($sql);

    header("Location:category.php");