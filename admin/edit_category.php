
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
<?php
    global $db;
    include 'config/Database.php';
    $id = $_GET['id'];

    $sql = "select * from cms_category where id = '$id'";
    $stmt = $db->query($sql);
    $result = $stmt->fetch();
?>
<div class="container-fluid">
    <div class="row">
        <?php include "sidebar.php"; ?>
        <div class="col-md-10 py-3">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color:  #095f59;">
                    <h3 class="panel-title text-center">Edit Category</h3>
                </div>
                <div class="panel-body">
                    <form action="process_update_category.php" method="POST">
                        <div class="mb-3">
                            <input type="hidden" name="id" value="<?php echo $result['id'] ?>">
                            <label for="exampleInputEmail1" class="form-label">Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="name" value="<?php echo $result['name'] ?>" aria-describedby="">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>


