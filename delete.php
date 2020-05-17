<?php

session_start();

ini_set('display_startup_errors',1); 
ini_set('display_errors',1);
error_reporting(-1);

require "connect.php";

$id = isset($_POST['user_id']) ? $_POST['user_id'] : ''; 
$sql = "delete from login where user_id = '$id'";
if (mysqli_query($connection, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($connection);
}
mysqli_close($connection);


?>