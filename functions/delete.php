<?php

require_once('../connection/connection.php');

$connection = CreatConnection();
echo("lllll");
$sql = "DELETE FROM `todos` WHERE id=3";
header('Location: ' . $_SERVER['HTTP_REFERER']);

$connection->close();
