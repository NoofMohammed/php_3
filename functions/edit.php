<?php

require_once("../connection/connection.php");
$connection = CreatConnection();
echo("llllllllllllllllllllllllll");
$sql = "UPDATE todos SET title='Doe' WHERE id=2";
header('Location: ' . $_SERVER['HTTP_REFERER']);

$connection->close();

?>