<?php

ini_set('display_errors',1);
error_reporting(E_ALL);

$connection = mysqli_connect("localhost","root","") or die (mysqli_error($connection));
$db = mysqli_select_db($connection,"app") or die (mysqli_error($connection));

    $shop = $_POST['shop_name'];
    $shop_id = $_POST['shop_id'];
    $user_id = $_POST['user_id'];
    $discount = $_POST['discount_given'];
    $username = $_POST['customer'];
    $points = $_POST['item_points'];

    $date = date('Y-m-d', strtotime(' + 7days'));
    $time = $date;

    $query = "insert into shops (shop_name, shop_id, user_id, discount_given, customer, date_added, item_points) VALUES ('$shop', '$shop_id', '$user_id', '$discount','$username','$time', '$points')";
    $result = mysqli_query($connection, $query);

    if($result){
        echo "Registration successful";
    }
    else{
        echo "some error occured";
        }
    
    
?>