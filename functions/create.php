
<?php

require_once('../connection/connection.php');

$connection = CreatConnection();


if(isset($_POST["create"])){
    $title = $_POST["title"];
    $description = $_POST["description"];
    $completed = $_POST["completed"];
    $connection->query("INSERT INTO `todos` (`title`,`description`,`completed`) VALUES ('$title','$description','$completed')");
    
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}


$connection->close();
