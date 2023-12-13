<?php
    global $db;
    include 'config/Database.php';

    $id = $_POST['id'];
    $name = $_POST['name'];

    $sql = "update cms_category
    set
    name = '$name'
    where id = '$id'";

    $db->query($sql);

    header("Location:category.php");