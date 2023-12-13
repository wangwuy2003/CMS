<?php
    include_once  'config/Database.php';
    $id = $_GET['id'];

    $sql = "select * from cms_user where id = '$id'";
    $stmt = $db->query($sql);
    $result = $stmt->fetch();
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
<div class="container-fluid">
    <div class="row">
        <?php include "sidebar.php"; ?>
        <div class="col-md-10 py-3">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color:  #095f59;">
                    <h3 class="panel-title text-center">Update User</h3>
                </div>
                <div class="panel-body">
                    <form method="POST" action="process_update_user.php">
                        <input type="hidden" value="<?php echo $result['id'] ?>" name="id">
                        <div class="mb-3">
                            <label for="firstname" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="firstname" name="firstname" value="<?= $result['firstname'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="lastname" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="lastname" name="lastname" value="<?= $result['lastname'] ?>">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>


