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
                    <input type="text" class="form-control" name="todo">
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


   
</div>

<?php
include('layout/footer.php')
?>

