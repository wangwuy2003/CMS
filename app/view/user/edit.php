<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>
<body>
<?php
    include_once  APP_ROOT . '/app/view/menu.php';
?>
<div class="container">
    <form action="?c=category&a=update" method="POST">
        <h3 class="text-center text-success my-3">Cập nhật tài khoản</h3>
        <input type="hidden" name="id" value="<?= $each->getId() ?>">
        <div class="mb-3">
            <label for="inputFirstName" class="form-label">First Name</label>
            <input type="text" name="firstname" class="form-control" id="inputFirstName" aria-describedby="emailHelp" value="<?= $each->getFirstname() ?>">
        </div>
        <div class="mb-3">
            <label for="inputLastName" class="form-label">Last Name</label>
            <input type="text" name="lastname" class="form-control" id="inputLastName" aria-describedby="emailHelp" <?= $each->getLastname() ?>>
        </div>
        <div class="mb-3">
            <label for="inputEmail" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" <?= $each->getEmail() ?>>
        </div>
        <div class="mb-3">
            <label for="inputPassword" class="form-label">Password</label>
            <input type="text" name="password" class="form-control" id="inputPassword" aria-describedby="emailHelp" <?= $each->getPassword() ?>>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
</body>
</html>