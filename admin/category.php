<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
<?php
    include 'config/Database.php';

    $sql = "select * from cms_category";
    $stmt = $db->query($sql);
    $result = $stmt->fetchAll();
?>
<div class="container-fluid">
    <div class="row">
        <?php include "sidebar.php"; ?>
        <div class="col-md-10 py-3">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color:  #095f59;">
                    <h3 class="panel-title">Category</h3>
                </div>
                <a href="add_category.php" class="btn btn-success">Thêm</a>
                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tên</th>
                            <th scope="col">Sửa</th>
                            <th scope="col">Xóa</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($result as $each): ?>
                                <tr>
                                    <td><?php echo $each['id'] ?></td>
                                    <td><?php echo $each['name'] ?></td>
                                    <td>
                                        <a href="edit_category.php?id=<?php echo $each['id'] ?>">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="delete_category.php?id=<?php echo $each['id'] ?>">
                                            <i class="bi bi-trash-fill" style="color: red"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>


