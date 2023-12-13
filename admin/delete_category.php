<?php
    global $db;
    include 'config/Database.php';

    $id = $_GET['id'];

    $sql = "delete from cms_category where id = '$id'";
    $db->query($sql);

    header("Location:category.php");
