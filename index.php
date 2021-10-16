<?php
require_once('connection/connection.php');
$connection = CreatConnection();
$result = $connection->query("SELECT * FROM todos ORDER BY id DESC");

$connection->close();
include('layout/header.php');

?>
<div class="container ">
    <div class="card mt-4">
        <h5 class="card-header">Create New Todo</h5>
        <div class="card-body">
            <form method="POST" action="functions/create.php">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Title</label>
                    <input type="text" class="form-control" name="title">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Description</label>
                    <textarea  class="form-control" name="description" ></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Completed</label>
                    <input  class="form-control" name="completed" />
                </div>
                <button type="submit" name="create" class="btn btn-success">Create</button>
            </form>
        </div>
    </div>


    <div class="card mt-4">
        <h5 class="card-header">Todo List</h5>
        <div class="card-body">
            <table class="table  table-hover table-striped">
                <thead>
                    <tr>
                        <th class="col-3">id</th>
                        <th class="col-3">title</th>
                        <th class="col-3">Description</th>
                        <th class="col-3">completed</th>
                        <th class="col-3">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                     while ($row = $result->fetch_assoc()): ?>
                        <tr>
                            <th scope="row"><?php echo $row['id'] ; ?></th>
                            <td><?php echo $row['title'] ; ?></td>
                            <td><?php echo $row['description'] ; ?></td>
                            <td><?php echo $row['completed'] ; ?></td>
                            <td>
                                <div>
                                <a href='functions/edit.php' class="btn btn-warning">Edit</a>
                                <a href='functions/delete.php' class="btn btn-danger">Delete</a>
                                </div>

                            </td>
                        </tr>
                    <?php endwhile ?>
                </tbody>
            </table>
        </div>
    </div>

   
</div>

<?php
include('layout/footer.php')
?>

