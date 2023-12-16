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
    <form action="?c=post&a=store" method="POST">
        <h3 class="text-center text-success my-3">Thêm mới bài viết</h3>
        <div class="mb-3">
            <label for="inputTitle" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="inputTitle" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="inputMessage" class="form-label">Message</label>
            <input type="text" name="message" class="form-control" id="inputMessage" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="inputMessage" class="form-label">Mã thể loại</label>
            <select class="form-select" aria-label="Default select example" name="category_id">
                <?php foreach($categories as $category): ?>
                    <option value="<?php echo $category->getId() ?>">
                        <?php echo $category->getName() ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="inputMessage" class="form-label">Mã thể loại</label>
            <select class="form-select" aria-label="Default select example" name="userid">
                <?php foreach($users as $user): ?>
                    <option value="<?php echo $user->getId() ?>">
                        <?php echo $user->getFirstname() . $user->getLastname() ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>