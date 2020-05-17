<?php

ini_set('display_errors',1);
error_reporting(E_ALL);

require "connect.php";


    $username = $_POST['tName'];
    $password = $_POST['tPass'];
    $email = $_POST['tMail'];
    $role = 'customer';
   

    $query = "insert into login (username, password, email, role) values ('$username', '$password', '$email', '$role')";
    $result = mysqli_query($connection, $query);

    if($result){
        header("Location:customer.php");
    }
    else{
        echo "some error occured";
        }
    
    
?>

