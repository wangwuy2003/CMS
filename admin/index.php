<?php
    global $db;
    include_once 'config/Database.php';

    $sql = "select count(*) from cms_category";
    $stmt = $db->prepare($sql);
    $user = $stmt->execute();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <?php include "sidebar.php"; ?>
        <div class="col-md-10 py-3">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color:  #095f59;">
                </div>
                <div class="panel-body">
                    <div class="col-md-3">
                        <div class="well dash-box">
                            <h4>Users</h4>

                            <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span> <?php echo $user ?></h2>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="well dash-box">
                            <h2><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span></h2>
                            <h4>Categories</h4>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="well dash-box">
                            <h2><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></h2>
                            <h4>Posts</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>
</html>
