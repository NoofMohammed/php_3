<?php

require_once('../connection/connection.php');

$connection = CreatConnection();

$sql = "DELETE FROM `todos` WHERE id=12";
if (mysqli_query($connection, $sql)) {
    echo "Record deleted successfully";
  } else {
    echo "Error deleting record: " . mysqli_error($connection);
  }
header('Location: ' . $_SERVER['HTTP_REFERER']);

$connection->close();
