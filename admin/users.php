<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
      integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
      crossorigin="anonymous" referrerpolicy="no-referrer"/>
<?php
    include 'config/Database.php';

    $sql = "select * from cms_user";
    $stmt = $db->query($sql);
    $result = $stmt->fetchAll();
?>
<div class="container-fluid">
    <div class="row">
        <?php include "sidebar.php"; ?>
        <div class="col-md-10 py-3">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color:  #095f59;">
                    <h3 class="panel-title">Users</h3>
                </div>
                <a href="add_user.php" class="btn btn-success">Thêm</a>
                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Type</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($result as $each): ?>
                            <tr>
                                <td><?php echo $each['id'] ?></td>
                                <td><?php echo $each['firstname'] . ' ' . $each['lastname'] ?></td>
                                <td><?php echo $each['email'] ?></td>
                                <td><?php echo $each['type'] ?></td>
                                <td>
                                    <a href="edit_user.php?id=<?php echo $each['id'] ?>">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                </td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#<?= $each['id'] ?>">
                                        <i class="fa-solid fa-trash" style="color: #ff0000;"></i>
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="<?= $each['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Delete</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Are you sure delete?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <a href="delete_user.php?id=<?php echo $each['id'] ?>" class="btn btn-primary">Yes</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>


