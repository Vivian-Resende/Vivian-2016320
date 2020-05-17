<?php

ini_set('display_errors',1);
error_reporting(E_ALL);

$connection = mysqli_connect("localhost","root","") or die (mysqli_error($connection));
$db = mysqli_select_db($connection,"app") or die (mysqli_error($connection));

    $charity_name = $_POST['charity_name'];
    $charity_id = $_POST['charity_id'];
    $user_id = $_POST['user_id'];
    $points = $_POST['points'];
    $textarea = $_POST['item_description'];
    $username = $_POST['customer'];
  
    
    $date = date('Y-m-d', strtotime(' + 7days'));
    $time = $date;

    $query = "insert into charity (charity_name, charity_id, user_id, item_points, item_description, date_added, customer) VALUES ('$charity_name', '$charity_id', '$user_id','$points', '$textarea','$time', '$username')";
    $result = mysqli_query($connection, $query);

    if($result){
        echo "Registration successful";
    }
    else{
        echo "some error occured";
        }
    
    
?>